@extends('adminlte::master')
@section('adminlte_css')
<link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/iCheck/square/blue.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
@yield('css')
@stop
@section('body_class', 'login-page')
@section('body')
<div class="login-box">
   <div class="login-logo">
      <a href="#"> admin  </a>
   </div>
   @if ($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif
   <!-- /.login-logo -->
   <div class="login-box-body">
      <p class="login-box-msg">   admin   </p>
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
         {{ csrf_field() }}
         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
            <div class="col-md-6">
               <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
               @if ($errors->has('email'))
               <span class="help-block">
               <strong>{{ $errors->first('email') }}</strong>
               </span>
               @endif
            </div>
         </div>
         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>
            <div class="col-md-6">
               <input id="password" type="password" class="form-control" name="password" required>
               @if ($errors->has('password'))
               <span class="help-block">
               <strong>{{ $errors->first('password') }}</strong>
               </span>
               @endif
            </div>
         </div>
         <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
               <div class="checkbox">
                  <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                  </label>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
               <button type="submit" class="btn btn-primary">
               Login
               </button>
            </div>
         </div>
      </form>
   </div>
   <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@stop
@section('adminlte_js')
<script src="{{ asset('vendor/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
<script>
   $(function () {
       $('input').iCheck({
           checkboxClass: 'icheckbox_square-blue',
           radioClass: 'iradio_square-blue',
           increaseArea: '20%' // optional
       });
   });
</script>
@yield('js')
@stop