@extends('layout.app-dashboard')

@section('title', 'Account Deposit')

@section('content')


    @include('layout.partials.page-title')

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    @include('layout.partials.dashboard.header')
                </div>

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header flex-column align-items-start">
                            <h4 class="card-title">Wallet Deposit Address</h4>
                            <a class="my-2" href="{{ route('deposits.index') }}">View Deposit History <i class="fa fa-arrow-right"></i> </a>
                            <p class="text-danger">Select your <strong class="text-danger font-weight-bold">preferred wallet</strong> and make transfer of the amount you want pay.</p>
                        </div>
                        <div class="card-body" id="deposits">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach ($assets as $asset)
                                <li class="nav-item">
                                    <a class="nav-link @if($loop->first) active @endif" data-toggle="tab" href="#asset_tab_{{ $asset->id }}">{{ $asset->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach ($assets as $asset)
                                    <div class="tab-pane fade show @if($loop->first) active @endif" id="asset_tab_{{ $asset->id }}">
                                        {{-- <div class="qrcode">
                                            <img src="{{ asset('assets/images/qr.svg') }}" alt="" width="150">
                                        </div> --}}
                                        <form action="">
                                            <div class="alert alert-info">
                                                <p>Copy the payment wallet address below!</p>
                                            </div>
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    value="{{ $asset->default_address->address }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-primary text-white">Copy</span>
                                                </div>
                                            </div>
                                        </form>

                                        <ul>
                                            <li>
                                                <i class="mdi mdi-checkbox-blank-circle"></i>
                                                {{ $asset->name }} network transfers will be credited to your account after
                                                5 network confirmations.
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Fill this if you have made a payment.</h4>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    @include('layout.partials.errors')

                                    <form action="{{ route('deposits.store') }}" method="POST" class="py-5">
                                        @csrf
                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="asset_id" class="mr-sm-2">Currency</label> <span class="text-danger">*</span><br />
                                                <small>Select the specific wallet currency you made payment to.</small>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control @error('currency') is-invalid @enderror"
                                                    id="currency" name="currency">
                                                    <option value="">Select</option>
                                                    @forelse ($assets as $asset)
                                                        <option value="{{ $asset->name }}" {{ old('currency') == $asset->name ? 'selected' : '' }}> {{ $asset->name }} </option>
                                                    @empty
                                                    @endforelse


                                                </select>
                                                @error('currency')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="amount" class="col-form-label">Transaction ID <span class="text-danger">*</span>
                                                    <br />
                                                    <small>Enter the Transaction ID for the deposit</small>
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text bg-primary"><i
                                                                class="fa fa-bitcoin text-white"></i></label>
                                                    </div>
                                                    <input type="text" value="{{ old('transactionID') }}" id="transactionID"
                                                        class="form-control text-black @error('transactionID') is-invalid @enderror text-right"
                                                        name="transactionID" placeholder="Transaction ID" required>
                                                    @error('transactionID')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="amount" class="col-form-label">Amount <span class="text-danger">*</span>
                                                    <br />
                                                    <small>Enter the amount you transferred in USD</small>
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text bg-primary"><i
                                                                class="cc DOLLAR-alt text-white">$</i></label>
                                                    </div>
                                                    <input type="text" value="{{ old('amount') }}" id="amount"
                                                        class="form-control text-black @error('amount') is-invalid @enderror text-right"
                                                        name="amount" placeholder="5000 USD" min="0">
                                                    @error('amount')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button class="btn btn-primary">I have made the transfer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()



@push('styles')
@endpush

@push('scripts')
@endpush
