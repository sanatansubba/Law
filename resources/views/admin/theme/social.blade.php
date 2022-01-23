@extends('admin.includes.admin_design')

@section('title') Social Media Settings - {{ config('app.name', 'Laravel') }} @endsection

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
                                <li class="breadcrumb-item active">Socail Media Settings</li>
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
                            <h5 class="card-title">Social Media Settings</h5>
                        </div>

                        @include('admin.includes._message')
                        <div class="card-body">


                            <form method="post" action="{{ route('socialUpdate') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group">
                                    <label for="facebook" class="col-sm-3 col-form-label input-label">Facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="facebook" id="facebook" value="{{ $social->facebook }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="instagram" class="col-sm-3 col-form-label input-label">Instagram</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="instagram" id="instagram" value="{{ $social->instagram }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="youtube" class="col-sm-3 col-form-label input-label">Youtube</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="youtube" id="youtube" value="{{ $social->youtube }}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="linkedin" class="col-sm-3 col-form-label input-label">Linkedin</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{ $social->linkedin }}">
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

