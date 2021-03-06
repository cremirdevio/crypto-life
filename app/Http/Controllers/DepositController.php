<?php

namespace App\Http\Controllers;

use App\Mail\DepositRequest;
use App\Models\Asset;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $deposits = $user->deposits()->take(25)->get();

        return view('user.deposit.index', compact('deposits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets = Asset::has('payment_address')->with(['default_address'])->get();
        // return $assets;
        return view('user.deposit.create', compact('assets'));
    }

    public function store(Request $request)
    {
        $inputs = $request->validate([
            'currency' => ['required', 'string'],
            'amount' => ['required', 'numeric', 'min:1'],
            'transactionID' => ['required', 'string', 'min:64', 'max:64'],
        ], [
            'transactionID.min' => 'Invalid Transaction ID. Check to be sure you copied properly!',
            'transactionID.max' => 'Invalid Transaction ID. Check to be sure you copied properly!',
            'currency.required' => 'Currency Deposited to is important.',
            'transactionID.required' => 'Transaction ID is needed to track your deposit.'
        ]);

        $deposit = Deposit::create([
            ...$inputs,
            'amount' => intval($request->amount) * 100,
            'reference' => Str::random(10),
        ]);
        $deposit->user_id = auth()->id();
        $deposit->save();

        dispatch(function () {
            Mail::to(config('mail.admin_email'))->send(new DepositRequest);
        })->afterResponse();

        return back()->with('success', 'You account balance will be updated once your deposit is verified.');
    }

    public function destroy(Deposit $deposit)
    {
        $deposit->status = 'cancelled';
        $deposit->save();

        return back()->with('success', 'Deposit cancelled successfully!');
    }
}
