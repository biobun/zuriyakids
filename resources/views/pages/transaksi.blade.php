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
                <h5 class="breadcrumbs-title">Order Produk</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{ url('dashboard/home') }}">Dashboard</a></li>
                    <li><a class="active">Order Produk</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- profile-page-header -->
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
        <form class="col s12 l10 offset-l2" action={{ action('TransaksiController@OrderPesanan') }} method="get" enctype="multipart/form-data">
            <div class="field_wrapper">
                <div class="row margin">
                    {{-- <a href="javascript:void(0);" class="add_button color-circle" title="Add field"><i style="font-size: 3rem" class="mdi-content-add-circle small "></i></a> --}}
                    <div class="input-field col l2 s4">
                        <div>
                            <select name="info_id[]" class="select-product">
                                <option value="" disabled selected>Pilih Produk</option>
                                <?php
                                    foreach ($barang as $barangs) { ?>
                                    <option> <?php echo $barangs->id; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="input-field col l1 s3">
                        <div>
                            <input type="text" name="harga[]" value="0" readonly id="harga[]" class="product-price" disabled/>
                            <label for="harga" class="active">Harga</label>
                        </div>
                    </div>
                    <div class="input-field col l1 s3">
                        <div>
                            <input type="text" name="jumlah[]" value="0" class="amount-product" />
                            <label for="jumlah" class="active">Jumlah</label>
                        </div>
                    </div>
                    <div class="input-field col l2 s4">
                        <div>
                            <input type="text" name="total[]" value="" id="total" class="total-product" readonly>
                        </div>
                    </div>
                    <div class="input-field col l2 s4">
                        <div>
                            <a href="javascript:void(0);" class="add_button btn red" title="Add field">Add Order</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12 l6">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <button class="btn waves-effect waves-light col s12" type="submit">Pesan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
@section('js')
<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type='text/javascript'>
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="row margin"><a href="javascript:void(0);" class="remove_button" title="Remove field"><i style="font-size:3rem" class="mdi-content-remove-circle small"></i></a><div class="input-field col l2 s4"><div><select name="info_id[]" id="info_id" class="select-product"><option value="" disabled selected>Pilih Produk</option><?php foreach ($barang as $barangs) { ?><option> <?php echo $barangs->id; ?> </option><?php } ?></select></div></div> <div class="input-field col l1 s3"><div><input type="text" name="harga[]" value="0" disabled id="harga" class="product-price"/><label for="harga" class="active">Harga</label></div></div><div class="input-field col l1 s3"><input type="text" name="jumlah[]" value="0" class="amount-product"/><label for="jumlah" class="active">Jumlah</label></div><div class="input-field col l2 s4"><input type="text" name="total[]" value="" class="total-product"/><label for="total" class="active">Total</label></div></div>'; //New input field html
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
            $('select').material_select();
            wrapper.find('select.select-product').last().change(getHarga);
            wrapper.find('.amount-product').last().change(totalHarga);
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
        });
});
$('select.select-product').change(getHarga);
$('.amount-product').change(totalHarga);

function getHarga() {
  var $self = $(this);

  $.ajax({
    url: '/infos/' + $(this).val(),
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

function totalHarga(){
    var input1 = $('.product-price').last(),
        input2 = $('.amount-product').last();
    var $selfs = $(this);    
    var val1 = (isNaN(parseInt(input1.val()))) ? 0 : parseInt(input1.val());
    var val2 = (isNaN(parseInt(input2.val()))) ? 0 : parseInt(input2.val());
    $selfs.parents('.row.margin').find('.total-product').val(val1*val2);
}

</script>
@stop