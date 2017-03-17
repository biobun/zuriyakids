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
          <h5 class="breadcrumbs-title">Tabel Agen</h5>
            <ol class="breadcrumbs">
              <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
              <li><a class="active">Data Agen</a></li>
            </ol>
        </div>
      </div>
    </div>
</div>
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
            <th>Id Agen</th>
            <th>Nama Agen</th>
            <th>Email</th>
            <th>Username</th>
            <th>Paket</th>
            <th>Handphone</th>
            <th>Alamat</th>
            <th>BBM</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $i = 1;
            foreach ($agen as $agens) {
          ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $agens->id; ?></td>
              <td><?php echo $agens->nama; ?></td>
              <td><?php echo $agens->email; ?></td>
              <td><?php echo $agens->username; ?></td>
              <td><?php echo $agens->paket; ?></td>
              <td><?php echo $agens->handphone; ?></td>
              <td><?php echo $agens->alamat; ?></td>
              <td><?php echo $agens->bbm; ?></td>
              <td><?php 
                $status = $agens->status;
                if ($status == 0) {
                  echo "Belum Aktif";
                }
                else{
                  echo "Aktif";
                }
                ?>  
              </td>
              <td><button class="btn green">Edit</button></td>
            </tr>
              <?php $i++;} ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop   