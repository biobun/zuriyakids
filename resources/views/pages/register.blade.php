@extends('includes.layout-form')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Muslim')
@section('content')
<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form" method="post">
            <div class="row">
                <div class="input-field col s12 center">
                    <h4>Register Agen</h4>
                </div>
            </div>
            @if (count($errors) > 0)
            <div id="card-alert" class="card red">
                <div class="card-content white-text">
                    @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
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
            @if ($message = Session::get('error'))
            <div id="card-alert" class="card red">
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
                    <select name="paket">
                        <option value="" disabled="" selected="">Pilih Paket
                            @foreach($paket as $pakets)
                            <option value="{{ $pakets->id }}" @if($pakets->nama_paket==$dipilih) selected @endif >{{ $pakets->nama_paket}}(Rp.{{number_format($pakets->harga,0) }})</option>
                            @endforeach
                        </select>
                        <label for="paket" class="center-align">Pilih Paket</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="email" type="email" name="email">
                        <label for="email" class="center-align">Email</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-social-person-outline prefix"></i>
                        <input id="username" type="text" name="username">
                        <label for="username" class="center-align">Username</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-face-unlock prefix"></i>
                        <input id="namalengkap" type="text" name="nama">
                        <label for="namalengkap" class="center-align">Nama Lengkap</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-maps-local-phone prefix"></i>
                        <input id="handphone" type="text" name="handphone">
                        <label for="handphone">Handphone(Whatsapp)</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-social-location-city prefix"></i>
                        <input id="kota" type="text" name="kota">
                        <label for="kota">Kota</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-maps-place prefix"></i>
                        <textarea id="alamat" name="alamat" class="materialize-textarea"></textarea>
                        <label for="alamat">Alamat Lengkap untuk pengiriman</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="password" type="password" name="password">
                        <label for="password">Password (Min: 6 Karakter)</label>
                    </div>
                </div>
                <div class="row">
                    <input type="hidden" name="status" value="0"/>
                    <input type="hidden" name="image" value="avatar.png"/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light col s12 blue" type="submit">Register Now</button>
                    </div>
                    <div class="input-field col s12">
                        <p class="margin center medium-small sign-up">Sudah mempunya akun <a href="{{ url('/login') }}">Login</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @stop
    @section('js')
    <script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
    });
    </script>
    @stop