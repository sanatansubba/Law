@extends('admin.includes.admin_design')

@section('title') Theme Settings - {{ config('app.name', 'Laravel') }} @endsection

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
                                <li class="breadcrumb-item active">Theme Settings</li>
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
                            <h5 class="card-title">Theme Settings</h5>
                        </div>

                        @include('admin.includes._message')
                        <div class="card-body">


                            <form method="post" action="{{ route('updateTheme') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group">
                                    <label for="website_name" class="col-sm-3 col-form-label input-label">Website Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="website_name" id="website_name" value="{{ $theme->website_name }}">
                                    </div>
                                    <p id="correct_password">
                                </div>



                                <div class="row form-group">
                                    <label for="logo" class="col-sm-3 col-form-label input-label">Logo</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="logo" id="logo" onchange="readURL(this)">
                                        <br>
                                        <img  src="{{ asset('public/uploads/'.$theme->logo) }}" class="img-fluid"  alt="" id="logo" @if(!empty($theme->logo)) style="width: 100px;border: 1px solid gray; padding: 4px" @endif>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <label for="website_name" class="col-sm-3 col-form-label input-label">Favicon</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="favicon" id="favicon" onchange="readURL2(this)">
                                        <br>

                                        <img  src="{{ asset('public/uploads/'.$theme->favicon) }}" class="img-fluid"  alt="" id="two" @if(!empty($theme->favicon)) style="width: 50px;border: 1px solid gray; padding: 4px" @endif>
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

        function readURL2(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#two')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection

