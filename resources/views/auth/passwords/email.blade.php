@extends('includes.layout-form')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
<div class="row">
    <div class="col s12">
        <form role="form" method="POST" action="{{ route('password.email') }}">
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
                    <div class="input-field col s12">
                        <input id="email" type="text" name="email" value="{{ old('email')}}" required>
                        <label for="password">Alamat Email</label>
                    </div>
                    <button type="submit" class="btn blue">Send Reset Password Link</button><br/><br/>
                    <a href="{{ url('/login') }}">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection