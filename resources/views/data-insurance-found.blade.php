@extends('layout.app-dashboard')

@section('title', 'Data Insurance found')

@section('content')

    @include('layout.partials.page-title')

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card sub-menu">
                        <div class="card-body">
                            <ul class="d-flex">
                                <li class="nav-item">
                                    <a href="./data-tbi.html" class="nav-link">
                                        <i class="mdi mdi-database-plus"></i>
                                        <span>TBI</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./data-founding-rate.html" class="nav-link">
                                        <i class="mdi mdi-book"></i>
                                        <span>Founding Rate</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./data-insurance-found.html" class="nav-link">
                                        <i class="mdi mdi-book-multiple"></i>
                                        <span>Insurance Found</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown">
                                        <i class="mdi mdi-file-export"></i>
                                        <span>Export CSV</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="./data-last-price.html">Last Price</a>
                                        <a class="dropdown-item" href="./data-index-price.html">Index Price</a>
                                        <a class="dropdown-item" href="./data-mark-price.html">Mark Price</a>
                                        <!-- <a class="dropdown-item" href="#">Founding Rate</a> -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Insurance Fund Balance</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Start Time</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>15th March, 2020</td>
                                            <td>1.0215 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>15th March, 2020</td>
                                            <td>1.0215 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>15th March, 2020</td>
                                            <td>1.0215 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>15th March, 2020</td>
                                            <td>1.0215 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>15th March, 2020</td>
                                            <td>1.0215 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>15th March, 2020</td>
                                            <td>1.0215 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>15th March, 2020</td>
                                            <td>1.0215 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>15th March, 2020</td>
                                            <td>1.0215 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>15th March, 2020</td>
                                            <td>1.0215 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>15th March, 2020</td>
                                            <td>1.0215 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>15th March, 2020</td>
                                            <td>1.0215 BTC</td>
                                        </tr>
                                    </tbody>
                                </table>
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
