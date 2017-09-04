@extends('includes.layout-form')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
<div class="row center">
    <img src="images/logo1-white.png" class="responsive-img valign profile-image-login">
</div>
<div id="login-page" class="row grey lighten-4">
    <div class="col s12 z-depth-0 card-panel grey lighten-4">
        <form class="login-form" method="post" >
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
            <div id="card-alert" class="card red">
                <div class="card-content white-text">
                    <p>{{ $message }}</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            @endif
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="{{asset('images/profile/avatar.png')}}" class="circle responsive-img valign profile-image-login">
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <input id="email" type="text" name="email">
                    <label for="username" class="center-align">Email</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
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
                    <button class="btn waves-light col s12 blue" type="submit">Login</button>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <p class="margin center-align medium-small"><a href="{{ route('password.reset') }}">Forgot password ?</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
@stop