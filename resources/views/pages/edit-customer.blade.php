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
        <h5 class="breadcrumbs-title">Ubah Data {{ $customer->user->role->name }}</h5>
        <ol class="breadcrumbs">
          <li><a href="{{ url('dashboard/home') }}">Dashboard</a></li>
          <li><a href="#">{{ $customer->user->role->name }}</a></li>
          <li><a class="active">Ubah Data</a></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- profile-page-header -->
<div id="profile-page" class="section white">
  <div class="row">
    <form class="col s12" action={{ action('CustomerController@edit') }} method="post" enctype="multipart/form-data">
      <div class="col s12 m8 l6 offset-l2">
        <div class="row">
          <div class="row">
            <div class="input-field col s12 m8 l8">
              <input value="{{ $customer->id }}" type="hidden" class="validate" name="id_agen">
              <input value="{{ $customer->username }}" type="text" class="validate" name="username">
              <label for="first_name">Username</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m8 l8">
              <input value="{{ $customer->email }}" type="email" class="validate" name="email">
              <label for="first_name">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m8 l8">
              <input value="{{ $customer->nama }}" type="text" class="validate" name="nama">
              <label for="first_name">Nama</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m8 l8">
              <input value="{{ $customer->handphone }}" type="text" class="validate" name="handphone">
              <label for="first_name">Handphone</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m8 l8">
              <input value="{{ $customer->alamat }}" type="text" class="validate" name="alamat">
              <label for="first_name">Alamat</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m8 l8">
              <input value="{{ $customer->bbm }}" type="text" class="validate" name="bbm">
              <label for="first_name">BBM</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m8 l8">
              <input value="{{ $customer->paket->nama_paket }}" type="text" disabled>
              <label for="first_name">Paket yang dipilih</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m8 l8">
              <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
              <button class="btn waves-effect waves-light col s12">Simpan Perubahan</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m4 l3">
        <div class="row">
          <figure class="card-profile-image center-align">
            {!! Html::image('images/profile/'. $customer->image, 'profile image', array('class'=>'circle z-depth-0 responsive-img activator')) !!}
          </figure>
          <h6 class="center-align">Foto Profile</h6>
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input type="file" name="image">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" name="profile">
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  @stop
  @section('js')
  @stop