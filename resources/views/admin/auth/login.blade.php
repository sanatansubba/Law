<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Login - {{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('public/backend/assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/style.css') }}">
</head>
<body>

<div class="main-wrapper login-body">
    <div class="login-wrapper">A
        <div class="container">

            <div class="loginbox">
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        @include('admin.includes._message')
                        <form action="{{ route('loginAdmin') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Email Address</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="form-control pass-input">
                                </div>
                            </div>

                            <button class="btn btn-lg btn-block btn-primary" type="submit">Login</button>



                        </form>

                        <div class="text-center dont-have">Forgot Your Password ? <a href="javascript:">Reset Password</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('public/backend/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('public/backend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/backend/assets/js/script.js') }}"></script>
</body>
</html>
