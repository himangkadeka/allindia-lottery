@extends('layouts.master')
@section('title','All India Lottery')
@section('content')
    <div class="container-fluid px-4">
        {{--<h2 class="mt-4">Dashboard</h2>--}}
        {{--<ol class="breadcrumb mb-4">--}}
            {{--<li class="breadcrumb-item active">Dashboard</li>--}}
        {{--</ol>--}}
        <div class="row mt-2">

            <div class="card border-0 shadow-sm rounded-4">
                <!-- Header with background color -->
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h6 class="mb-0">Add Result Data</h6>
                </div>

                <!-- Body with clean content area -->
                <div class="card-body bg-white rounded-bottom-4 d-flex justify-content-between align-items-center p-4">
                    <p class="mb-0 small text-muted">Click the button to input new results</p>
                    <a href="{{route('add-results')}}" class="btn btn-success  fw-semibold">
                        <i class="bi bi-plus-circle me-1"></i> Add
                    </a>
                </div>
            </div>


            {{--<div class="col-xl-3 col-md-6">--}}
                {{--<div class="card bg-primary text-white mb-4">--}}
                    {{--<div class="card-body">Primary Card</div>--}}
                    {{--<div class="card-footer d-flex align-items-center justify-content-between">--}}
                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                        {{--<div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-xl-3 col-md-6">--}}
                {{--<div class="card bg-warning text-white mb-4">--}}
                    {{--<div class="card-body">Warning Card</div>--}}
                    {{--<div class="card-footer d-flex align-items-center justify-content-between">--}}
                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                        {{--<div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-xl-3 col-md-6">--}}
                {{--<div class="card bg-success text-white mb-4">--}}
                    {{--<div class="card-body">Success Card</div>--}}
                    {{--<div class="card-footer d-flex align-items-center justify-content-between">--}}
                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                        {{--<div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-xl-3 col-md-6">--}}
                {{--<div class="card bg-danger text-white mb-4">--}}
                    {{--<div class="card-body">Danger Card</div>--}}
                    {{--<div class="card-footer d-flex align-items-center justify-content-between">--}}
                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                        {{--<div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection