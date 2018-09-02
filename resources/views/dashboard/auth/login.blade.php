@extends('dashboard.layout')

@section('title','Dashboard | login')


@section('content')
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{'/'}}">পত্রিকার নাম</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in</p>

        {{ Form::open(array('url' => 'login','method' => 'post')) }}

        <div class="form-group has-feedback">
        {{--{{ Form::label('email', 'E-Mail Address',['class'=>'form-group']) }}--}}
        {{ Form::email('email',' ',['class'=>'form-control','placeholder'=>'Email']) }}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group has-feedback">
        {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password']) }}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="row">
        <div class="col-md-8">
            <input class="checkbox icheck" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>

        <!-- /.col -->
        <div class="col-md-4">
            {{ Form::submit('Sign In',['class'=>'btn btn-primary btn-block btn-flat'])}}
        </div>
        <!-- /.col -->
        </div>

        {{ Form::close() }}
@stop
