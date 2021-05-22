<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel-blog | Registration Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="/"><b>Laravel</b>blog</a>
    </div>

    @if(session()->has('err'))
        <div class="alert alert-danger">
            {{session('err')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::open(['route' => 'login.store', 'method' => 'post']); !!}
                <div class="input-group mb-3">
                     {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => "Email" ]); !!}
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    {!!Form::password('password', ['class' => 'form-control', 'placeholder' => "Password"]); !!}
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-sm-4 offset-6 offset-sm-8">
                        {!! Form::submit('Sing in!', ['class' => "btn btn-primary btn-block"]); !!}
                    </div>
                    <!-- /.col -->
                </div>
             {!! Form::close(); !!}

            <a href="{{route('register.create')}}" class="text-center">I have not a membership</a>

        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->


<script src="{{ asset('assets/admin/js/admin.js') }}"></script>
</body>
</html>
