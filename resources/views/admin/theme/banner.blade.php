@extends('admin.includes.admin_design')

@section('title') Banner Settings - {{ config('app.name', 'Laravel') }} @endsection

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Dashboard</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Banner Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-4">

                    @include('admin.includes._settings_sidebar')

                </div>
                <div class="col-xl-9 col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Banner Settings</h5>
                        </div>

                        @include('admin.includes._message')
                        <div class="card-body">


                            <form method="post" action="{{ route('bannerUpdate') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group">
                                    <label for="title" class="col-sm-3 col-form-label input-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="title" id="title" value="{{ $banner->title }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="subtitle" class="col-sm-3 col-form-label input-label">Subtitle</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{ $banner->subtitle }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="info" class="col-sm-3 col-form-label input-label">Info</label>
                                    <div class="col-sm-9">
                                        <textarea name="info" id="info" cols="30" rows="4" class="form-control">
                                            {{ $banner->info }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="discover_link" class="col-sm-3 col-form-label input-label">Discover More</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="discover_link" id="discover_link" value="{{ $banner->discover_link }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="image" class="col-sm-3 col-form-label input-label">Background Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="image" id="image" accept="image/*" onchange="readURL(this);">
                                        <br>
                                        <img src="{{ asset('public/uploads/'.$banner->image) }}" alt="" width="100" id="logo">

                                    </div>

                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')
    <script type="text/javascript">
        function readURL(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#logo')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

@endsection

