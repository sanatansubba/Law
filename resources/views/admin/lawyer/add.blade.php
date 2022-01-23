@extends('admin.includes.admin_design')

@section('title') Lawyer Management - {{ config('app.name', 'Laravel') }} @endsection

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Lawyer Management</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('banner.index') }}">Lawyer</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('banner.index') }}">Lawyer</a></li>
                                <li class="breadcrumb-item active">Add New Lawyer</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <a href="{{ route('lawyer.index') }}" class="btn btn-primary add-button"><i class="feather-eye"></i></a>
                    </div>
                </div>
            </div>

            @include('admin.includes._message')

            <form action="{{ route('lawyer.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Name" name="name" id="name" value="{{ old('name') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">E-Mail Address <span class="text-danger">*</span>  </label>
                                            <input type="email" class="form-control" placeholder="Please Enter Email" name="email" id="email" value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobile"> Mobile <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Mobile Number" name="mobile" id="mobile" value="{{ old('mobile') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address"> Address <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Address" name="address" id="address" value="{{ old('address') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="speciality"> Speciality <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Speciality" name="speciality" id="speciality" value="{{ old('speciality') }}">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="info"> Lawyer Info <span class="text-danger">*</span>  </label>
                                            <textarea name="info" id="info" cols="30" rows="10" class="form-control">
                                            </textarea>
                                        </div>
                                    </div>




                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image"> Image <span class="text-danger">*</span>  </label>
                                            <input type="file" class="form-control" placeholder="Please Enter Service Image" name="image" id="image" accept="image/*" onchange="readURL(this);">
                                        </div>

                                        <div class="col-md-12" style="margin-bottom: 20px">
                                            <img src="https://via.placeholder.com/300x200.png?text=Your+Banner+Image" alt="" id="one">
                                        </div>
                                    </div>

                                    <br>


                                    <div class="col-md-12">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success text-center">Add New Lawyer</button>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>





@endsection

@section('js')



    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script type="text/javascript">
        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    $("#one").attr('src', e.target.result).width(300);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#info').summernote({
                height: 200
            });
        });

    </script>

@endsection
