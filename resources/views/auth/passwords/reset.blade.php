@extends('includes.layout-form')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
<div class="row">
    <div class="col s12">
        <form role="form" method="POST" action="{{ route('password.reset.post') }}">
            {{ csrf_field() }}
            <div class="card white">
                <div class="card-content black-text">
                    <span class="card-title">Reset Password</span>
                </div>
                <div class="card-action">
                    @if (session('status'))
                    <div id="card-alert" class="card green">
                        <div class="card-content white-text">
                            <p>{{ session('status') }}</p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif
                    @if ($errors->has('email'))
                    <div id="card-alert" class="card red">
                        <div class="card-content white-text">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif
                    @if ($errors->has('password'))
                    <div id="card-alert" class="card red">
                        <div class="card-content white-text">
                            <p>{{ $errors->first('password') }}</p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif
                    @if ($errors->has('password_confirmation'))
                    <div id="card-alert" class="card red">
                        <div class="card-content white-text">
                            <p>{{ $errors->first('password_confirmation') }}</p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="text" name="email" value="{{ $email or old('email')}}" required autofocus>
                        <label for="password">Alamat Email</label>
                    </div>
                    <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="email" type="password" name="password" required>
                        <label for="password">Password Baru</label>
                    </div>
                    <div class="input-field col s12 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <input id="email" type="password" name="password_confirmation" required>
                        <label for="password">Confirm Password Baru</label>
                    </div>

                    <button type="submit" class="btn blue">Reset Password</button><br/><br/>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
