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
              <li><a href="#">Dashboard</a></li>
              <li><a href="{{url('dashboard/stok-barang')}}">Stok Barang</a></li>
              <li><a class="active">Edit Data Barang</a></li>
            </ol>
        </div>
      </div>
    </div>
</div>
<div class="section white">
  <form class="col s12" method="post" action="{{ action('BarangController@update') }}">
    <div class="row">
      <div class="input-field col s6">
        <input id="kodebarang" type="text" class="validate" value="{{ $barang->id_barang }}" name="kd_barang">
        <label for="kodebarang">Kode Barang</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="text" class="validate" name="nama_barang" value="{{ $barang->nama_barang }}">
        <label for="last_name">Nama Barang</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="hargaecer" type="number" name="hargaecer" value="{{ $barang->harga_ecer }}">
        <label for="hargaecer">Harga Ecer</label>
      </div>
      <div class="input-field col s6">
        <input id="hargareseller" type="number" name="hargareseller" value="{{ $barang->harga_reseller }}">
        <label for="hargareseller">Harga Reseller</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="hargaagen" type="number" name="hargaagen" value="{{ $barang->harga_agen }}">
        <label for="hargaagen">Harga Agen</label>
      </div>
      <div class="input-field col s6">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input id="stok" type="number" name="stok" value="{{ $barang->stok }}">
        <label for="stok">Stok</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <button type="submit" class="waves-effect left waves-light btn modal-action" style="margin-right: 10px;">Ubah</button>
        <button class="waves-effect left waves-light btn modal-action">Batal</button>
      </div>      
    </div>
  </form>
</div>
@stop

