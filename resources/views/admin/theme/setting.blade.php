@extends('admin.includes.admin_design')

@section('title') Site Settings - {{ config('app.name', 'Laravel') }} @endsection

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
                                <li class="breadcrumb-item active">Site Settings</li>
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
                            <h5 class="card-title">Site Settings</h5>
                        </div>

                        @include('admin.includes._message')
                        <div class="card-body">


                            <form method="post" action="{{ route('udpateSetting') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row form-group">
                                    <label for="site_title" class="col-sm-3 col-form-label input-label">Site Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="site_title" id="site_title" value="{{ $setting->site_title }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="site_subtitle" class="col-sm-3 col-form-label input-label">Site Sub Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="site_subtitle" id="site_subtitle" value="{{ $setting->site_subtitle }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="address" class="col-sm-3 col-form-label input-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="address" id="address" value="{{ $setting->address }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="phone" class="col-sm-3 col-form-label input-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="phone" id="phone" value="{{ $setting->phone }}">
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <label for="alt_phone" class="col-sm-3 col-form-label input-label">Alternate Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="alt_phone" id="alt_phone" value="{{ $setting->alt_phone }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="email" class="col-sm-3 col-form-label input-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" id="email" value="{{ $setting->email }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="footer_info" class="col-sm-3 col-form-label input-label">Footer Info</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="footer_info" id="footer_info" value="{{ $setting->footer_info }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="map" class="col-sm-3 col-form-label input-label">Map</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="map" id="map" value="{{ $setting->map }}">
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

