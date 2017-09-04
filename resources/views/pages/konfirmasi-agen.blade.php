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
					<li><a href="{{ url('dashboard/home') }}">Dashboard</a></li>
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
			<div class="input-field col s6">
				<i class="mdi-action-search prefix"></i>
				<input id="icon_prefix3" type="text" class="validate">
				<label for="icon_prefix3">Seacrh</label>
			</div>
		</div>
		<div class="col s12 m8 l12">
			<table id="data-table-simple" class="responsive-table display striped centered" cellspacing="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nomor Order</th>
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
						<td>
							<?php
								$paketdipilih = substr($konfpembyaran->agen_id, 2,6);
							echo $paketdipilih; ?>
						</td>
						<td><?php echo $konfpembyaran->no_rekening; ?></td>
						<td><?php echo $konfpembyaran->nama_rekening; ?></td>
						<td><?php echo $konfpembyaran->jumlah; ?></td>
						<td>{{ Html::image('uploads'.'/'.$konfpembyaran->bukti_transfer, 'Bukti Transfer', array('class'=>'materialboxed', 'width'=>50)) }} </td>
						<td>
							<?php if ($konfpembyaran->status == 1) { ?>
								<button id="aktivasi" disabled class="btn red">Sudah Teraktivasi</button>
							<?php } else{ ?>
								<a id="aktivasi" href="{{ route('aktivasiagen', ['id_order'=>$konfpembyaran->id]) }}" class="btn green btn-aktivasi-confirm">Aktivasi</a>
							<?php }  ?>
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
@stop