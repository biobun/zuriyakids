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
<div id="profile-page" class="section white">
    <div class="row">
        @role((['Agen','Reseller']))
        @if (count($errors) > 0)
        <div id="card-alert" class="card red">
            <div class="card-content white-text">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        <form class="col s12" action={{ action('ProfileController@update') }} method="post" enctype="multipart/form-data">
            <div class="col s12 m8 l6 offset-l2">
                <div class="row">
                    <div class="row">
                        <div class="input-field col s12 m8 l8">
                            <input value="{{ Auth::user()->agen->id }}" type="hidden" class="validate" name="id_agen">
                            <input value="{{ Auth::user()->agen->username }}" type="text" class="validate" name="username">
                            <label for="first_name">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8 l8">
                            <input value="{{ Auth::user()->agen->email }}" type="email" class="validate" name="email">
                            <label for="first_name">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8 l8">
                            <input value="{{ Auth::user()->agen->nama }}" type="text" class="validate" name="nama">
                            <label for="first_name">Nama</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8 l8">
                            <input value="{{ Auth::user()->agen->handphone }}" type="text" class="validate" name="handphone">
                            <label for="first_name">Handphone</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8 l8">
                            <textarea class="validate materialize-textarea" name="alamat">{{ Auth::user()->agen->alamat }}</textarea>
                            <label for="first_name">Alamat</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8 l8">
                            <input value="{{ Auth::user()->agen->kota }}" type="text" class="validate" name="kota">
                            <label for="first_name">Kota</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8 l8">
                            <input value="{{ Auth::user()->agen->bbm }}" type="text" class="validate" name="bbm">
                            <label for="first_name">BBM</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8 l8">
                            <input value="{{ Auth::user()->agen->paket->nama_paket }}" type="text" disabled>
                            <label for="first_name">Paket yang dipilih</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l3">
                <div class="row">
                    <figure class="card-profile-image center-align">
                        {!! Html::image('images/profile/'. Auth::user()->agen->image, 'profile image', array('class'=>'circle z-depth-0 responsive-img activator')) !!}
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
            <div class="row">
                        <div class="input-field col s12 m8 l4 offset-l2">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <button class="btn-large waves-effect waves-light col s12 blue">Simpan Perubahan</button>
                        </div>
                    </div>
        </form>
        @endrole
    </div>
    @stop
    @section('js')
    @stop