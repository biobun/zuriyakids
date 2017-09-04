@extends('includes.layout-form')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
<div class="row">
    <div class="col s12">
            <div class="card white">
                <div class="card-content black-text">
                    <span class="card-title">Terima kasih {{ $dataagen->nama }} telah mendaftar di Zuriyakids</span>
                </div>
                <div class="card-action">
                    <p>Paket yang dipilih <strong>{{ $dataagen->nama_paket }} (Rp. {{ number_format($dataagen->harga) }})</strong></p>
                    <p>Selanjutnya untuk pembayaran dapat ditransfer ke salah satu rekening berikut:
                    <br>
                    <br> 1. rek Mandiri  <b>9000 1139 4872</b> atas nama Mohammad Imaad Al Hamas
                    <br> 2. rek BCA  <b>553 045 2567</b> atas nama Mohammad Imaad Al Hamas
                    <br>
                    <br>
                    Silahkan cek email anda untuk data yang lebih lengkap
                    </p>
                    <a href="{{ route('konfirmasi_pembayaran',['id_order' => $dataagen->id]) }}" class="btn green">Konfirmasi Pembayaran</a>
                </div>
            </div>
    </div>
</div>
@endsection