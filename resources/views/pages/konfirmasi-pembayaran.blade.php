@extends('includes.layout')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
@if ($message = Session::get('error'))
	<script>
		$(document).ready(function(){
			Materialize.toast("{{ $message }}", 4000);
		});
	</script>
@endif
<?php $message = $errors->all() ?>
	<?php foreach ($message as $msg) : ?>
	<?= $msg ?>
	<?php endforeach; ?> 
<div class="row">
	<div class="container">
		<h4>Konfirmasi Pembayaran</h4>
		<nav>
		    <div class="nav-wrapper">
		      <div class="col s12">
		        <a href="#!" class="breadcrumb">Daftar</a>
		        <a href="#!" class="breadcrumb">Konfirmasi Pembayaran</a>
		      </div>
		    </div>
	  	</nav>
	</div>
</div>
<div class="row">
	<div class="container">
		<form class="col s12 m4 l8 offset-l2 white" action="{{ action('KonfPembayaranController@insert') }}" method="post" enctype="multipart/form-data">
	    	<div class="row">
	        	<div class="input-field col s6 offset-s3">
		         	<input id="id_order" type="text" class="validate" name="id_order">
		        	<label for="id_order">Nomor Order</label>
		        </div>
	    	</div>
	    	<div class="row">
	        	<div class="input-field col s6 offset-s3">
		         	<input id="first_name" type="text" class="validate" name="jumlah">
		        	<label for="first_name">Jumlah</label>
		        </div>
	    	</div>
	    	<div class="row">
	        	<div class="input-field col s6 offset-s3">
		         	<input id="first_name" type="text" class="validate" name="no_rekening">
		        	<label for="first_name">Nomor Rekening</label>
		        </div>
	    	</div>
	    	<div class="row">
	        	<div class="input-field col s6 offset-s3">
		         	<input id="first_name" type="text" class="validate" name="nama_rekening">
		        	<label for="first_name">Nama Pemilik Rekening</label>
		        </div>
	    	</div>
	    	<div class="row">
	        	<div class="file-field input-field col s6 offset-s3">
		         	<div class="btn">
        				<span>File</span>
        					<input type="file" multiple name="image">
      				</div>
      				<div class="file-path-wrapper">
        				<input class="file-path validate" type="text" placeholder="Unggah bukti transfer" name="bukti_transfer">
      				</div>
		        </div>
	    	</div>
	    	<div class="row">
	        	<div class="input-field col s6 offset-s3">	        		
        			<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		         	<input id="first_name" type="submit" class="validate btn col s12">
		        </div>
	    	</div>
	    </form>
	</div>
</div>
@stop
@section('js')

@stop
