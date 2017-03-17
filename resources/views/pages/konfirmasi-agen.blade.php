@extends('includes.layout-dashboard')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Muslim')
@section('content')
{{-- Breadcumbs --}}
<div id="breadcrumbs-wrapper">
	<div class="header-search-wrapper grey hide-on-large-only">
		<i class="mdi-action-search active"></i>
		<input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
	</div>
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<h5 class="breadcrumbs-title">Konfirmasi Pembayaran Agen</h5>
				<ol class="breadcrumbs">
					<li><a href="{{ url('dashboard') }}">Dashboard</a></li>
					<li><a class="active">Konfirmasi Pembayaran Agen</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- profile-page-header -->
<div class="section white">
	<div class="row">
		<div class="col s12 m8 l12">
			<div class="input-field col s6">
				<i class="mdi-action-search prefix"></i>
				<input id="icon_prefix3" type="text" class="validate">
				<label for="icon_prefix3">Seacrh</label>
			</div>
			<table id="data-table-simple" class="responsive-table display centered" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nomor Order</th>
						<th>Id Agen</th>
						<th>Paket Dipilih</th>
						<th>Nomor Rekening</th>
						<th>Nama Rekening</th>
						<th>Jumlah</th>
						<th>Bukti Transfer</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
							$i = 1;
							foreach ($konfirmasi_pembayaran_agen as $konfpembyaran) {
						?>
						<td><?php echo $i; ?></td>
						<td><?php echo $konfpembyaran->id; ?></td>
						<td><?php echo $konfpembyaran->agen_id; ?></td>
						<td>
						<?php 
							$paketdipilih = substr($konfpembyaran->agen_id, 2,1);
							echo $paketdipilih; ?>
						</td>
						<td><?php echo $konfpembyaran->no_rekening; ?></td>
						<td><?php echo $konfpembyaran->nama_rekening; ?></td>
						<td><?php echo $konfpembyaran->jumlah; ?></td>
						<td>{{ Html::image('uploads/thumbs'.'/'.$konfpembyaran->bukti_transfer) }}</td>
						<td>
							<a href="{{ route('aktivasiagen', ['id_order'=>$konfpembyaran->id]) }}" class="btn green btn-aktivasi-confirm">Aktivasi</a>
							<a href="#" class="btn red btn-hapus-confirm">Hapus</a>
							{{-- {{ link_to_action('KonfPembayaranController@aktivasiagen','Aktivasi', array($konfpembyaran->id), array('class'=>'btn green')) }} --}}
							{{-- <a class="waves-effect waves-light btn green modal-trigger" href="#modal1">Aktivasi</a> --}}
							{{-- {{ link_to_action('KonfPembayaranController@delete','delete', array($konfpembyaran->id), array('class'=>'btn red')) }} --}}
						</td>
					</tr>
					<?php $i++;} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop
@section('js')
<script type="text/javascript">
	$('.btn-aktivasi-confirm').click(function(){
	    swal({
		    title: "Apakah anda ingin membuat agen ini menjadi aktif?",
		    type: "warning",
		    showCancelButton: true,
		    confirmButtonColor: '#DD6B55',
		    confirmButtonText: 'Ya',
		    closeOnConfirm: false
	    },
    function(){
    	swal("Aktivasi!", "Agen telah berhasil diaktivasi", "success");
    });
   });
	$('.btn-hapus-confirm').click(function(){
	    swal({
		    title: "Apakah anda ingin menghapus data konfirmasi pembayaran?",
		    type: "warning",
		    showCancelButton: true,
		    confirmButtonColor: '#DD6B55',
		    confirmButtonText: 'Ya',
		    closeOnConfirm: false
	    },
    function(){
    	swal("Hapus!", "Konfirmasi pembayaran telah berhasil dihapus", "success");
    });
   });
</script>
@stop