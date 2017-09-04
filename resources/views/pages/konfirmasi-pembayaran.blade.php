@extends('includes.layout-form')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
<div class="row">
	<div class="col s12 z-depth-4 card-panel">
		<form class="login-form white" action="{{ action('KonfPembayaranController@insert') }}" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="input-field col s12 center">
					<h4>Konfirmasi Pembayaran</h4>
				</div>
			</div>
			<div class="row">
				<div class="container">
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
				</div>
			</div>
			<div class="row">
				<div class="input-field col s10 offset-s1">
					<input id="id_order" onblur="checkMailStatus()" type="text" class="validate" name="id_order" value="{{ $datakonfirmasi->id }}">
					<label for="id_order">Nomor Order</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s10 l4 offset-s1 offset-l1">
					<input id="user_name" type="text" class="validate" name="user_name" value="{{ $datakonfirmasi->nama }}" disabled>
					<label for="user_name">Nama</label>
				</div>
				<div class="input-field col s10 l6 offset-s1">
					<input id="user_name" type="text" class="validate" name="user_name" value="{{ $datakonfirmasi->nama_paket }}// (Rp . {{ number_format($datakonfirmasi->harga,0) }} )" disabled>
					<label for="user_name">Paket yang dipilih</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s10 offset-s1">
					<input id="jumlah" type="text" class="validate" name="jumlah">
					<label for="jumlah">Jumlah</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s10 offset-s1">
					<input id="no_rekening" type="text" class="validate" name="no_rekening">
					<label for="no_rekening">Nomor Rekening</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s10 offset-s1">
					<input id="nama_rekening" type="text" class="validate" name="nama_rekening">
					<label for="nama_rekening">Nama Pemilik Rekening</label>
				</div>
			</div>
			<div class="row">
				<div class="file-field input-field col s10 offset-s1">
					<p style="font-size: 12px" class="red-text">*Bukti transfer harus berbentuk gambar Maksimal 3 MB</p>
					<div class="btn">
						<span>File</span>
						<input type="file" multiple name="image">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text" name="bukti_transfer">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6 offset-s3">
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<input id="first_name" type="submit" class="validate btn col s12 blue" value="Ok">
				</div>
			</div>
			<div class="row"></div>
		</form>
	</div>
</div>
@stop
@section('js')
<script>
function checkMailStatus(){
    //alert("came");
var id_order=$("#id_order").val();// value in field email
$.ajax({
    type:'post',
        url:'konfi.php',// put your real file name 
        data:{id_order: id_order},
        success:function(msg){
        alert(msg); // your message will come here.     
        }
 });
}
</script>
@stop