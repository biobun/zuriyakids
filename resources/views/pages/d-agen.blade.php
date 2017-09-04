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
                    <li><a href="{{ url('dashboard/home') }}">Dashboard</a></li>
                    <li><a class="active">Data Agen</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="section white">
    <div class="row">
        <div class="col s12 m8 l12">
            <div class="input-field col s12 l6">
                <i class="mdi-action-search prefix"></i>
                <input id="icon_prefix3" type="text" class="validate">
                <label for="icon_prefix3">Search</label>
            </div>
            <div class="col s12">
            <table id="table1" class="display highlight centered" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Agen</th>
                        <th>Nama Agen</th>
                        <th>Username</th>
                        <th>Handphone</th>
                        <th>Kota</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($agen as $agens) {
                    ?>
                    <tr data-id="{{ $i }}" data-parent="">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $agens->id; ?></td>
                        <td><?php echo $agens->nama; ?></td>
                        <td><?php echo $agens->username; ?></td>
                        <td><?php echo $agens->handphone; ?></td>
                        <td><?php echo $agens->kota; ?></td>
                        <td>
                            <?php
                            $status = $agens->status;
                            if ($status == 0) {
                            ?>
                            <p class="red-text">Belum Aktif</p>
                            <?php }else{ ?>
                            <p class="green-text">Aktif</p>
                            <?php } ?>
                        </td>
                        <td>
                            <?php
                                $status = $agens->status;
                                if ($status == 0) {
                            ?>
                                <a class="btn disabled">Edit</a>
                            <?php } else { ?>
                                <a class="btn green" href="{{ route('editcustomer', ['id_customer'=>$agens->id]) }}">Edit</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr  data-id="14" data-parent="{{ $i }}">
                        <td>Reseller</td>
                        <td>asjdlksajdlka</td>
                    </tr>
                        <?php $i++;} ?>
                    </tbody>
                </table>
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