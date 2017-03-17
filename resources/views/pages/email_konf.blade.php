@extends('includes.layout')
@section('title', 'Zuriyakids')
@section('description', 'Konfirmasi Pendaftaran')
@section('content')
<div class="container">
	@if (session()->has('flash_notification.message'))
		<br>
	    <div class="alert alert-{{ session('flash_notification.level') }}">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

	        <strong> {!! session('flash_notification.message') !!} </strong>
	    </div>
	@endif
	<center><h3>Silahkan Cek Email Anda</h3>
	<h4>Klik <a href="{{ url('login') }}">Disini</a> untuk ke Halaman Login</h4>
	</center>
</div>
@endsection