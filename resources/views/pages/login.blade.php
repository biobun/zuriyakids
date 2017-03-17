@extends('includes.layout-form')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
<div id="login-page" class="row">
  <div class="col s12 z-depth-4 card-panel">
    <form class="login-form" method="post" action="{{ action('LoginController@authenticate')}}">
      <div class="row">
        <div class="input-field col s12 center">
          <img src="images/logo1.png" alt="" class="circle responsive-img valign profile-image-login">
          <p class="center login-form-text">Zuriyakids Login</p>
        </div>
      </div>
      @if ($message = Session::get('success'))
      <div id="card-alert" class="card green">
        <div class="card-content white-text">
          <p>{{ $message }}</p>
        </div>
        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
      </div>
      @endif
      @if ($message = Session::get('warning'))
      <div id="card-alert" class="card orange">
        <div class="card-content white-text">
          <p>{{ $message }}</p>
        </div>
        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
      </div>
      @endif
      @if ($message = Session::get('login_error'))
      <div id="card-alert" class="card orange">
        <div class="card-content white-text">
          <p>{{ $message }}</p>
        </div>
        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
      </div>
      @endif
      <div class="row margin">
        <div class="input-field col s12">
          <i class="mdi-social-person-outline prefix"></i>
          <input id="email" type="text" name="email">
          <label for="username" class="center-align">Email</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="mdi-action-lock-outline prefix"></i>
          <input id="password" type="password" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l12  login-text">
          <input type="checkbox" id="remember-me">
          <label for="remember-me">Remember me</label>
        </div>
      </div>
      <div class="row">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="input-field col s12">
          <button class="btn waves-effect waves-light col s12" type="submit">Login</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="{{ url('/daftar') }}">Daftar Sekarang</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
          {{-- <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p> --}}
        </div>
      </div>
    </form>
  </div>
</div>
@stop