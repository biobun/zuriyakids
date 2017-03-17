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
          <h5 class="breadcrumbs-title">Stok Barang</h5>
            <ol class="breadcrumbs">
              <li><a href="index.htm">Dashboard</a></li>
              <li><a class="active">Stok Barang</a></li>
            </ol>
        </div>
      </div>
    </div>
</div>
<div class="section white">
  <div id="responsive-table">
    <div class="col s12 m8 l9">
    <a href="#modaltambah" class="waves-effect waves-light btn modal-trigger"><i class="mdi-content-add left"></i>Tambah Barang</a>
    <br/>
    <br/>
      <table class="striped responsive-table">
      <thead>
        <tr>
            <th data-field="no">No</th>
            <th data-field="kd-barang">Kode Barang</th>
            <th data-field="nama-barang">Nama Barang</th>
            <th data-field="harga-ecer">Harga Ecer</th>
            <th data-field="harga-reseller">Harga Reseller</th>
            <th data-field="harga-agen">Harga Agen</th>
            <th data-field="stok">Stok</th>
            <th data-field="stok">Action</th>
        </tr>
      </thead>
        <tbody>
        <tr>
          <?php 
            $i = 1;
            foreach ($barang as $barangs) {
          ?> 
            <td><?php echo $i; ?></td>
            <td><?php echo $barangs->id_barang; ?></td>
            <td><?php echo $barangs->nama_barang; ?></td>
            <td><?php echo "Rp. ".number_format($barangs->harga_ecer); ?></td>
            <td><?php echo "Rp. ".number_format($barangs->harga_reseller); ?></td>
            <td><?php echo "Rp. ".number_format($barangs->harga_agen); ?></td>
            <td><?php echo $barangs->stok; ?></td>
            <td>
              {{ link_to_action('BarangController@edit','Edit', array($barangs->id_barang), array('class'=>'btn green')) }}
              <button class="btn-floating red right waves-effect btn modal-trigger" href="#"><i class="mdi-action-delete"></i></button>
            </td>
          </tr>
        <?php $i++; } ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
{{-- Modal Tambah --}}
<div id="modaltambah" class="modal">
  <div class="modal-content">
  <h5>Tambah Data Barang</h5>
  <div class="divider"></div>
  {!! Form::open( array('url' => action('BarangController@tambah'), 'method' => 'post')) !!}
    <br>
    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="kd_barang">
        <label for="nama">Kode Barang</label>
      </div>
    </div>
    <div class="row">  
      <div class="input-field col s12">
        <input type="text" name="nama_barang">
        <label for="nama">Nama Barang</label>
      </div>
    </div>
    <div class="row">  
      <div class="input-field col s12">
        <input type="text" name="harga_agen">
        <label for="nama">Harga Agen</label>
      </div>
    </div>
    <div class="row">  
      <div class="input-field col s12">
        <input type="text" name="harga_reseller">
        <label for="nama">Harga Reseller</label>
      </div>
    </div>
    <div class="row">  
      <div class="input-field col s12">
        <input type="text" name="harga_ecer">
        <label for="nama">Harga Ecer</label>
      </div>
    </div>
    <div class="row">  
      <div class="input-field col s12">
        <input type="text" name="stok">
        <label for="nama">Stok</label>
      </div>
    </div>        
  </div>
  <div class="modal-footer">
  <button class=" btn btn-message waves-effect waves-red btn modal-action" type="submit">Submit</button>
    <button class="waves-effect waves-green btn-flat modal-action modal-close">Cancel</button>
  </div>
  {!! Form::close() !!}
</div>
@stop
