@extends('admin.includes.admin_design')

@section('title') Admin Dashboard - {{ config('app.name', 'Laravel') }} @endsection

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card-counter primary">
                            <i class="fa fa-inbox"></i>
                            <span class="count-numbers">{{ $contactMessages }}</span>
                            <span class="count-name">Contact Messages</span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-counter danger">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="count-numbers">{{ $serviceCount }}</span>
                            <span class="count-name">Services</span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-counter success">
                            <i class="fa fa-database"></i>
                            <span class="count-numbers">{{ $blogCount }}</span>
                            <span class="count-name">Blogs</span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-counter info">
                            <i class="fa fa-users"></i>
                            <span class="count-numbers">{{ $lawyerCount }}</span>
                            <span class="count-name">Lawyers</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
