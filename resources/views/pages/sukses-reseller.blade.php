@extends('includes.layout-form')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
<div class="row">
    <div class="col s12">
            <div class="card white">
                <div class="card-content black-text">
                    <span class="card-title">Terima kasih {{ $reseller->nama }} telah mendaftar Reseller di Zuriyakids</span>
                </div>
                <div class="card-action">
                    <p>Paket yang dipilih  <strong>{{ $reseller->nama_paket }} ( Rp. {{ number_format($reseller->harga) }})</strong></p>
                    <p>Selanjutnya untuk pembayaran dapat ditransfer ke rekening Agen anda. 
                    <br>Hubungi Agen anda untuk informasi lebih lanjut 
                    <br>
                    <br>
                    Silahkan cek email anda untuk data yang lebih lengkap
                    </p>
                    {{-- <a href="{{ route('konfirmasi_pembayaran',['id_order' => $dataagen->id]) }}" class="btn green">Konfirmasi Pembayaran</a> --}}
                </div>
            </div>
    </div>
</div>
@endsection