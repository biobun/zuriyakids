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
				<h5 class="breadcrumbs-title">Konfirmasi Pembayaran Reseller</h5>
				<ol class="breadcrumbs">
					<li><a href="{{ url('dashboard') }}">Dashboard</a></li>
					<li><a class="active">Konfirmasi Pembayaran Reseller</a></li>
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
		</div>
		<div class="col s12 m8 l12">
			<table id="data-table-simple" class="display striped centered" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>handphone</th>
						<th>Paket Dipilih</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<?php
						$i = 1;
						foreach ($konfirmasi_reseller as $konfreseller) {
					?>
						<td> <?php echo $i; ?></td>	
						<td> <?php echo $konfreseller->nama; ?></td>	
						<td> <?php echo $konfreseller->handphone; ?></td>	
						<td> <?php echo $konfreseller->paket_id; ?></td>
						<td> 
							<?php if ($konfreseller->status == 2) { ?>
								<button id="aktivasi" disabled class="btn red">Sudah Teraktivasi</button>
							<?php } else{ ?>
								<a id="aktivasi" href="{{ route('aktivasireseller', ['id_reseller'=>$konfreseller->id]) }}" class="btn green">Aktivasi</a>
							<?php }  ?>
						</td>	
					</tr>
						<?php $i++;} ?>	
			</table>
		</div>
	</div>
</div>
@stop