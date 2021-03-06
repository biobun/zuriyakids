@extends('includes.layout-dashboard')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Muslim')
@section('content')
<div id="breadcrumbs-wrapper">
	<div class="header-search-wrapper grey hide-on-large-only">
		<i class="mdi-action-search active"></i>
		<input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
	</div>
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<h5 class="breadcrumbs-title">Pesanan</h5>
				<ol class="breadcrumbs">
					<li><a class="active">Pesanan</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div id="profile-page" class="section white">
	<div class="row">
		@if ($message = Session::get('error'))
		<div class="col s12 l6 offset-l2">
			<div id="card-alert" class="card red">
				<div class="card-content white-text">
					<p>{{ $message }}</p>
				</div>
				<button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
		</div>
		@endif
		@if ($message = Session::get('success'))
		<div class="col s12 l6 offset-l2">
			<div id="card-alert" class="card green">
				<div class="card-content white-text">
					<p>{{ $message }}</p>
				</div>
				<button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
		</div>
		@endif
		<div class="section white">
			<div id="responsive-table">
				<div class="col s12 m8 l12">
					<table class="highlight responsive-table" id="table1">
						<thead>
							<tr>
								<th data-field="no">No</th>
								<th data-field="id">Id Transaksi</th>
								<th data-field="jumlah">Total</th>
								<th data-field="status">Status</th>
								<th data-field="action">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach ($transaksi as $transaksis) {
							?>
							<tr data-id="{{ $i }}" data-parent="">
								<td><?php echo $i; ?></td>
								<td><?php echo $transaksis->id; ?></td>
								<td><?php echo "Rp. ".number_format($transaksis->total); ?></td>
								<td><?php
										if ($transaksis->status == 0) {
											$status = "Belum diproses";
											$text = "red-text";
										}elseif($transaksis->status == 1){
											$status = "Sedang diproses";
											$text = "orange-text";
										}elseif($transaksis->status == 2){
											$status = "Sudah diproses";
											$text = "blue-text";
										}elseif($transaksis->status == 3){
											$status = "Dalam Pengiriman";
											$text = "blue-text";
										}elseif($transaksis->status == 4){
											$status = "Pesanan Telah Diterima";
											$text = "green-text";
										}else{
											$status = "Error";
											$text = "black-text";
										}
										echo "<span class=". $text .">".$status."</span>";
										?>
									</td>
								<td>
								<?php
									if ($transaksis->status == 0) {
								?>
									<a href="{{ route('editpesanan',['transaksi_id'=>$transaksis->id]) }}" class="btn green">Edit Pesanan</a>
								<?php 
									} else {
								?>
									<a href="#" class="btn grey" disabled>Edit Pesanan</a>
								<?php
									}
								?>
								</td>
							</tr>
								<?php
                        			foreach ($transaksiDetail as $transaksiDetails) {
                        				if ($transaksiDetails->transaksi_id == $transaksis->id) {
                        					
	                        	?>
							<tr  data-id="14" data-parent="{{ $i }}">
	                        	<td>&#9679;</td>
	                        	<td>Kode Produk : <?php echo $transaksiDetails->barang_id; ?></td>
	                        	<td>Jumlah : <?php echo $transaksiDetails->jumlah; ?></td>

	                        	<td>Total : <?php echo "Rp. ".number_format($transaksiDetails->total); ?></td>
                    		</tr>
                    		<?php
                        				}
                        			}
                        	?>
							<?php $i++; } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@section('js')
<script type="text/javascript">
    $('#table1').aCollapTable({
    startCollapsed: true,
    addColumn: true,
    plusButton: '<i class="mdi-content-add-circle-outline"></i> ', 
    minusButton: '<i class="mdi-content-remove-circle-outline"></i> ' 
});        
</script>
@endsection
@stop