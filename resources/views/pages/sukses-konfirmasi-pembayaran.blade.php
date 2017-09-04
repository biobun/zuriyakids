@extends('includes.layout-form')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
<div class="row">
    <div class="col s12">
            <div class="card white">
                <div class="card-content black-text">
                    <span class="card-title">Konfirmasi Pembayaran Berhasil</span>
                </div>
                <div class="card-action">
                    <p>Konfirmasi pembayaran telah berhasil dilakukan. Aktivasi akun anda akan segera kami proses.<br>
                    Aktivasi akun akan segera kami kirim ke email anda.
                    <br>
                    <br>Jika ada pertanyaan anda dapat mengirimkan email ke <b>zuriyakidsteam@gmail.com</b>
                    </p>
                    <a href="{{ url('/login') }}" class="btn blue">Login</a>
                </div>
            </div>
    </div>
</div>
@endsection