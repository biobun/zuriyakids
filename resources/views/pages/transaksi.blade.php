@extends('includes.layout-dashboard')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Muslim')
@section('content')
<h5>Transaksi</h5>
	<?php echo Auth::user()->email;?>
@stop