@extends('admin.includes.admin_design')

@section('title') Change Password - {{ config('app.name', 'Laravel') }} @endsection

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
                                <li class="breadcrumb-item active">Change Password</li>
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
                            <h5 class="card-title">Update Your Password</h5>
                        </div>

                        @include('admin.includes._message')
                        <div class="card-body">




                            <form method="post" action="{{ route('updatePassword', $user->id) }}">
                                @csrf
                                <div class="row form-group">
                                    <label for="current_password" class="col-sm-3 col-form-label input-label">Current Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Enter current password">
                                    </div>
                                    <p id="correct_password">
                                </div>
                                <div class="row form-group">
                                    <label for="new_password" class="col-sm-3 col-form-label input-label">New Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" id="new_password" placeholder="Enter new password">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="confirm_password" class="col-sm-3 col-form-label input-label">Confirm new password</label>
                                    <div class="col-sm-9">
                                        <div class="mb-3">
                                            <input type="password" name="pass_confirmation" class="form-control" id="confirm_password" placeholder="Confirm your new password">
                                        </div>
                                        <h5>Password requirements:</h5>
                                        <p class="mb-2">Ensure that these requirements are met:</p>
                                        <ul class="list-unstyled small">
                                            <li>Minimum 8 characters long - the more, the better</li>
                                            <li>At least one lowercase character</li>
                                            <li>At least one uppercase character</li>
                                            <li>At least one number, symbol</li>
                                        </ul>
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
    <script>
        $("#current_password").keyup( function () {
            var current_password = $("#current_password").val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: 'check-password',
                data: {
                    current_password:current_password},
                success: function (resp) {
                    if(resp =="true"){
                        $("#correct_password").text("Current Password Matches").css("color", "green");
                    } else if (resp =="false"){
                        $("#correct_password").text("Password Does Not Match").css("color", "rgb(185, 74, 72)");
                    }
                }, error: function (resp) {
                    alert("Error");
                }

            });
        });
    </script>
@endsection

