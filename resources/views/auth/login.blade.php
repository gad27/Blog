<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css"/>

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Blog :: Login</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Core css -->
<link rel="stylesheet" href="{{asset('admin/css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('admin/css/theme1.css')}}"/>

</head>
<body class="font-montserrat">

<div class="auth">
    <div class="auth_left">
        <form method="POST" action="{{route('login')}}" class="card">
            @csrf
            <div class="text-center mb-2">
                <a class="header-brand" href=""><i class="fas fa-sign-in-alt"></i></a>
            </div>
            <div class="card-body">
                <div class="card-title">Login to your account</div> 
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    @error('email')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Password<a href="forgot-password.html" class="float-right small">I forgot password</a></label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    @error('password')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block" title="">Sign in</button>
                </div>
            </div>
            <div class="text-center text-muted">
                Don't have account yet? <a href="register.html">Sign up</a>
            </div>
        </form>        
    </div>
    <div class="auth_right full_img"></div>
</div>

<script src="{{asset('admin/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{asset('admin/js/core.js')}}"></script>
</body>

<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->
</html>