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
        <h5 class="breadcrumbs-title">Profile</h5>
        <ol class="breadcrumbs">
          <li><a href="index.htm">Dashboard</a></li>
          <li><a class="active">Profile</a></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- profile-page-header -->
<div id="profile-page" class="section">
  <div id="profile-page-header" class="card">
    <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="../images/user-profile-bg.jpg" alt="user background"></div>
    <figure class="card-profile-image">
      <img src="../images/avatar.jpg" alt="profile image" class="circle z-depth-2 responsive-img activator">
    </figure>
    <div class="card-content">
      <div class="row">
        <div class="col s3 offset-s2">
          <h4 class="card-title grey-text text-darken-4">{!! Auth::user()->Agen->nama!!}</h4>
          <p class="medium-small grey-text">{!! Auth::user()->Role->name !!}</p>
        </div>
      </div>
      <span class="card-title grey-text text-darken-4">{!! Auth::user()->username !!}
        <a class="btn-floating green right waves-effect btn modal-trigger" href="#modal1"><i class="large mdi-editor-mode-edit"></i></a>
      </span>
      <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> {{ Auth::user()->Agen->handphone }}</p>
      <p><i class="mdi-communication-email cyan-text text-darken-4en-2"></i> {!! Auth::user()->Agen->paket !!}</p>
    </div>
  </div>
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h5>Ubah Data</h5>
      <div class="divider"></div>
      {!! Form::open( array('url' => action('UpdateData@profile'), 'method' => 'post', 'id' => 'Form1')) !!}
      <br>
      <div class="row">
        <input type="hidden" name="id" value=" {{ Auth::user()->id}}">
        <div class="input-field col s12">
          <input type="text" name="nama" value="{{ Auth::user()->nama}}">
          <label for="nama">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="email" value="{{ Auth::user()->email}}">
          <label for="nama">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="handphone" value="{{ Auth::user()->handphone }}">
          <label for="nama">Handphone</label>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button class="waves-effect left waves-light btn modal-action" type="submit" style="margin-right: 10px;">Submit</button>
      <a href="#" class="waves-effect left waves-light btn modal-close">Cancel</a>
    </div>
    {!! Form::close() !!}
  </div>
</div>
@stop
@section('js')
<script type="text/javascript">
$(document).ready(function(){
"use strict";
document.querySelector('#Form1').addEventListener('submit', function(e){
var form = this;
e.preventDefault();
swal({   title: "Apakah kamu ingin mengubah data?",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Ya",
cancelButtonText: "Tidak",
closeOnConfirm: false,
closeOnCancel: false },
function(isConfirm){
if (isConfirm) {
swal("Berhasil!", "Data berhasil diubah.", "success");
document.forms[0].submit();
}
else {
swal("Dibatalkan", "Data tidak jadi diubah", "error");   }
});
});
});
</script>
@stop