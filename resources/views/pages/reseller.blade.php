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
                <h5 class="breadcrumbs-title">Tabel Reseller</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ url('dashboard/home') }}">Dashboard</a></li>
                    <li><a class="active">Data Reseller</a></li>
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
        </div>
        <div class="col s12 m8 l12">
            <table id="data-table-simple" class="display striped centered" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Reseller</th>
                        <th>Nama Reseller</th>
                        <th>Username</th>
                        <th>Id Agen</th>
                        <th>Handphone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($reseller as $reselers) {
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $reselers->id; ?></td>
                        <td><?php echo $reselers->nama; ?></td>
                        <td><?php echo $reselers->username; ?></td>
                        <td><?php echo $reselers->agen_id; ?></td>
                        <td><?php echo $reselers->handphone; ?></td>
                        <td><?php
                            $status = $reselers->status;
                            if ($status == 0) {
                            echo "Belum Aktif";
                            }
                            else{
                            echo "Aktif";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                                $status = $reselers->status;
                                if ($status == 0) {
                            ?>
                                <a class="btn disabled">Edit</a>
                            <?php } else { ?>
                                <a class="btn green" href="{{ route('editcustomer', ['id_customer'=>$reselers->id]) }}">Edit</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php $i++;} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop