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
				<h5 class="breadcrumbs-title">Ubah Pesanan</h5>
				<ol class="breadcrumbs">
					<li><a href="{{ url('dashboard/home') }}">Dashboard</a></li>
					<li><a href="{{ url('dashboard/pesanan') }}">Pesanan Saya</a></li>
					<li><a class="active">Ubah Pesanan</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="section white">
	<div class="row">
		<div class="section white">
			
				<form class="col s12 l10 offset-l2">
				<?php
					foreach ($editorder as $editorders) {	
				?>
				<div class="row margin">
					
					<div class="input-field col l1 s3">
						<div>
							<input type="text" name="kd_barang[]" value="{{ $editorders->barang_id }}" readonly class="product" />
							<label for="kd_barang" class="active">Kode Barang</label>
						</div>
					</div>
					<div class="input-field col l1 s3">
						<div>
							<input type="text" name="harga[]" disabled class="product-price" />
							<label for="harga" class="active">Harga</label>
						</div>
					</div>	
					<div class="input-field col l1 s3">
						<div>
							<input type="text" name="jumlah[]" value="{{ $editorders->jumlah }}" />
							<label for="jumlah" class="active">Jumlah</label>
						</div>
					</div>
					<div class="input-field col l2 s3">
						<div>
							<input type="text" name="total[]" value="Rp. {{ number_format($editorders->total) }}" readonly />
							<label for="total" class="active">Total</label>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="row">
					
					<div class="input-field col l4 s3">
						<div>
							<input type="submit" name="submit" value="Ubah" class="btn blue col s12" />
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type='text/javascript'>
$(document).ready(function(){
	$('input.product-price').val(getHarga);
});
function getHarga() {
  var $self = $(this);
  var $product = $('input.product').parents('.row.margin');

  $.ajax({
    url: '/infos/' + $('input.product').val(),
    type: 'get',
    data: {},
    success: function(data) {
      if (data.success == true) {
        $self.parents('.row.margin').find('.product-price').val(data.info);
      } else {
        alert('Cannot find info');
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {}
  });
}
</script>
@endsection
@stop