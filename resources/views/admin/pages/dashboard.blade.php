@extends('admin.layouts.master')
@section('page_title', 'Mahmud')

@push('admin_style')
    <link rel="stylesheet" href="http://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <style>
        .current {
            color: #fff !important;
            background-color: #696cff !important;
        }
    </style>
@endpush
@section('admin_content')
    <h1>Welcome to Advance Project Dashboard</h1>

    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('admin') }}/assets/img/icons/unicons/chart-success.png"
                                 alt="chart success" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">User Count</span>
                    <h3 class="card-title mb-2">00</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('admin') }}/assets/img/icons/unicons/chart-success.png"
                                 alt="chart success" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Role Count</span>
                    <h3 class="card-title mb-2">00</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('admin') }}/assets/img/icons/unicons/chart-success.png"
                                 alt="chart success" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Page Count</span>
                    <h3 class="card-title mb-2">12</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('admin') }}/assets/img/icons/unicons/chart-success.png"
                                 alt="chart success" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Module Count</span>
                    <h3 class="card-title mb-2">00</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h1>User Login Activity</h1>
        <div class="table-responsive text-nowrap p-3">
            <table class="table table-hover" id="myTable">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Last Login</th>
                    <th>User Name</th>
                    <th>User Email</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                <tr>
                    <td><strong></strong></td>
                    <td>format</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>No user found yet!</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
