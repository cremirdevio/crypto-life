@extends('layout.app-dashboard')

@section('title', '403')

@section('content')

    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center">
                        <h1 class="error-text  font-weight-bold">403</h1>
                        <h4 class="mt-4"><i class="fa fa-times-circle text-danger"></i> Forbidden Error!</h4>
                        <p>You do not have permission to view this resource.</p>
                        <div class="mb-5">
                            <a class="btn btn-primary" href="./index.html">Back to Home</a>
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
