@extends('adminlte::master')
@section('adminlte_css')
<link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
@yield('css')
@stop
@section('body_class', 'register-page')
@section('body')
<div class="register-box">
   <div class="register-logo">
      <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
   </div>
   <div class="register-box-body">
      <h1 class="login-box-msg"> omly  femto15.com   email </h1>
      <form action="{{ url('profile/register') }}" method="post">
         {!! csrf_field() !!}
         <div class="form-group has-feedback {{ $errors->has('Name') ? 'has-error' : '' }}">
            <input type="text" name="Name" class="form-control" value="{{ old('Name') }}"
               placeholder="{{ trans('adminlte::adminlte.full_name') }}">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('Name'))
            <span class="help-block">
            <strong>{{ $errors->first('Name') }}</strong>
            </span>
            @endif
         </div>
         <div class="form-group has-feedback {{ $errors->has('Name') ? 'has-error' : '' }}">
            <select class="form-control" name="Company_id" required >
               <option value="1" >select</option>
               @foreach ($Company as $Company_val)
               <option value="{!!   $Company_val->id  !!}" > {!!   $Company_val->Name       !!} </option>
               @endforeach
            </select>
            @if ($errors->has('Company_id'))
            <span class="help-block">
            <strong>{{ $errors->first('Company_id') }}</strong>
            </span>
            @endif    
         </div>
         <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
            <input type="email" name="email" class="form-control" value="{{ old('email') }}"
               placeholder="{{ trans('adminlte::adminlte.email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
            <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
         </div>
         <div class="form-group has-feedback {{ $errors->has('Phone') ? 'has-error' : '' }}">
            <input type="text" name="Phone" class="form-control"
               placeholder="Phone">
            @if ($errors->has('Phone'))
            <span class="help-block">
            <strong>{{ $errors->first('Phone') }}</strong>
            </span>
            @endif
         </div>
         <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
            <input type="password" name="password" class="form-control"
               placeholder="{{ trans('adminlte::adminlte.password') }}">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
            <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
         </div>
         <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
            <input type="password" name="password_confirmation" class="form-control"
               placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            @if ($errors->has('password_confirmation'))
            <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
            @endif
         </div>
         <button type="submit"
            class="btn btn-primary btn-block btn-flat"
            >{{ trans('adminlte::adminlte.register') }}</button>
      </form>
      <div class="auth-links">
         <a href="{{ url(config('adminlte.login_url', 'login')) }}"
            class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
      </div>
   </div>
   <!-- /.form-box -->
</div>
<!-- /.register-box -->
@stop
@section('adminlte_js')
@yield('js')
@stop