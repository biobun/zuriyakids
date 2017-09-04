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
				<h5 class="breadcrumbs-title">Ranking</h5>
				<ol class="breadcrumbs">
					<li><a href="{{ url('dashboard/home') }}">Dashboard</a></li>
                    <li><a class="active">Ranking</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="section white">
	<div class="row">
		<div class="section-white">
		<div class="col s12 m8 l12">
			
		<table class="responsive-table striped">
			<thead>
							<tr>
								<th data-field="no">No</th>
								<th data-field="id">Nama Agen</th>
								<th data-field="jumlah">Total Transaksi</th>
							</tr>
						</thead>
			<tbody>
				<?php 
					$i = 1;
					foreach ($agenTerbaik as $agenTerbaiks) {
					?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $agenTerbaiks->nama; ?></td>
							<td><?php echo $agenTerbaiks->transaksitotal; ?></td>
						</tr>
					<?php
						$i++; }
				?>
			</tbody>
		</table>
		</div>	
		</div>
	</div>
</div>
@stop	