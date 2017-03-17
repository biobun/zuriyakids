@extends('includes.layout-agenzurya')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
{{-- NAVIGASI BAR --}}
<nav class="nav-extended">
  <div class="nav-wrapper white">
    <div class="container">  
      <a href="#" class="brand-logo left"><img src="{{ URL::asset('images/logo1.png')}}" width="65px"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Reward</a></li>
        <li><a href="#">Produk</a></li>
        <li><a href="#">Paket</a></li>
        <li><a href="{{ url('/daftar-reseller') }}" class="waves-effect waves-light btn">Daftar</a></li>
    </div>
  </div>
</nav>
<div class="nav-content valign center blue-grey darken-4" style="padding-bottom: 1px">
<br>
  <span class="nav-title arab" dir="rtl" lang="ar">اللَّهُ يَبْسُطُ الرِّزْقَ لِمَنْ يَشَاءُ وَيَقْدِرُ</span>
  <p>Allah meluaskan rezeki dan menyempitkannya bagi siapa yang Dia kehendaki.</p>
</div>
{{-- SLIDER --}}
<div class="slider">
  <ul class="slides">
    <li>
      {{-- <img src="{{ URL::asset('images/1.jpg') }}"> <!-- random image --> --}}
      <img src="#"> <!-- random image -->
      <div class="caption center-align">
        <h3>This is our big Tagline!</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
    </li>
    <li>
      <img src="#"> <!-- random image -->
      <div class="caption left-align">
        <h3>Left Aligned Caption</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
    <li>
      <img src="#"> <!-- random image -->
      <div class="caption right-align">
        <h3>Right Aligned Caption</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
    <li>
      <img src="#"> <!-- random image -->
      <div class="caption center-align">
        <h3>This is our big Tagline!</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
  </ul>
</div>
{{-- MAIN --}}
<div class="container">
  {{-- TENTANG KAMI --}}
  <h4>Tentang Kami</h4>
  <div class="section">
    <div class="row group">
      <div class="col s12 l4 thumbnail">
        <img src="{{ URL::asset('images/gr.jpg') }}" class="clip-img">
      </div>
      <div class="col s12 l8">
        <div class="detail-ttg-kami">  
          <p>Zuriya adalah brand produk kebutuhan anak muslim yang mempunyai nilai utama care & share. Zuriya membawa pesan untuk saling peduli dan berbagi.</p>
          <p>Produk-produk Zuriya selalu mengedepankan kualitas, kreativitas, dan harga yang terjangkau. Melalui konten edukatif, Zuriya mengajarkan nilai-nilai Islam keseharian pada anak-anak muslim di Indonesia menjadi lebih mudah.</p>
          <p>Zuriya bekerja sama dengan Yayasan Desa Quran membangun desa-desa qurani yang memberdayakan setiap penduduknya dari anak hingga orang tua. Saat ini proyek kami adalah di Desa Rawakalong, Gunung Sindur, Bogor.</p>
        </div>
      </div>
    </div>
  </div>
  {{-- REWARD --}}
  <h4>Reward</h4>
    <div class="section">
      <div class="row">
        <div class="col s12 m12 l12">
          <blockquote>
          <h5>Bagi agen terbaik akan mendapatkan:</h5>
          </blockquote>
          <ul>
            <li><p class="flow-text">1. Umroh Gratis</p>
            <img src="{{ URL::asset('images/reward-1.jpg') }}" class="responsive-img">
            <p class="valign center">Untuk agen terbaik urutan 1</p>
            </li>
            <li><p class="flow-text">2. Uang Tunai 5 Juta Rupiah</p>
            <img src="{{ URL::asset('images/reward-1.jpg') }}" class="responsive-img">
            <p class="valign center">Untuk agen terbaik urutan 2 & 3</p>
            </li>
            <li><p class="flow-text">3. Voucher Zuriyakids senilai 2 Juta Rupiah</p>
            <img src="{{ URL::asset('images/reward-1.jpg') }}" class="responsive-img">
            <p class="valign center">Untuk agen terbaik urutan 4 - 7</p>
            </li>
          </ul>
          <a class="waves-effect waves-light btn-large col s12" href="{{ url('/daftar-reseller') }}">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  {{-- PRODUK --}}
  <h4>Produk</h4>
    <div class="section">
        <div class="row">
          <div class="col s12 m12 l6">
            <h5>Kaos Anak</h5>
            <div class="card">
              <div class="card-image">
                <img src="{{ URL::asset('images/2.png') }}" class="responsive-img">
              </div>
              <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
              </div> 
            </div>
          </div>
          <div class="col s12 m12 l6">
            <h5>Jumpsuit Bayi</h5>
            <div class="card">
              <div class="card-image">
                <img src="{{ URL::asset('images/3.png') }}" class="responsive-img">
              </div>
              <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
              </div> 
            </div>
          </div>
          <a class="waves-effect waves-light btn-large col s12">Daftar Sekarang</a>
        </div>
    </div>
  {{-- PAKET --}}
  <h4>Paket</h4>
  <blockquote>
    <h5>Pilih paket sesuai kebutuhan anda</h5>
  </blockquote>
    <div class="col s12">
      <ul class="collapsible" data-collapsible="expandable">
    <li>
      <div class="collapsible-header"><i class="material-icons">star</i>Paket A</div>
        <div class="collapsible-body">
          <div class="row">
            <div class="container">
              <div class="col s6">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ URL::asset('images/card1.jpg') }}">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">30 pcs Katalog</span>
                  </div>
                </div>
              </div>
              <div class="col s6">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ URL::asset('images/card1.jpg') }}">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Spanduk Mini</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="container">
              <div class="col s12">
                <table class="striped bordered">
                <tbody>
                  <tr>
                    <td>Tidak ada minimum pembelian berikutnya</td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                  <tr>
                    <td>Whatsapp Group Support</td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                  <tr>
                    <td>Avatar untuk Social Media</td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                </tbody>
                </table>
                <br>
                <a class="waves-effect waves-light btn-large col s12">Daftar Sekarang</a>
              </div>
            </div>
          </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">star</i>Paket B</div>
      <div class="collapsible-body">
        <div class="row">
            <div class="container">
              <div class="col s6">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ URL::asset('images/card1.jpg') }}">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">30 pcs Katalog</span>
                  </div>
                </div>
              </div>
              <div class="col s6">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ URL::asset('images/card1.jpg') }}">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Spanduk Mini</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="container">
              <div class="col s12">
                <table class="striped bordered">
                <tbody>
                  <tr>
                    <td>Tidak ada minimum pembelian berikutnya</td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                  <tr>
                    <td>Whatsapp Group Support</td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                  <tr>
                    <td>Avatar untuk Social Media</td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                </tbody>
                </table>
                <br>
                <a class="waves-effect waves-light btn-large col s12">Daftar Sekarang</a>
              </div>
            </div>
          </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">star</i>Paket C</div>
      <div class="collapsible-body">
        <div class="row">
            <div class="container">
              <div class="col s6">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ URL::asset('images/card1.jpg') }}">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">30 pcs Katalog</span>
                  </div>
                </div>
              </div>
              <div class="col s6">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ URL::asset('images/card1.jpg') }}">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Spanduk Mini</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="container">
              <div class="col s12">
                <table class="striped bordered">
                <tbody>
                  <tr>
                    <td>Tidak ada minimum pembelian berikutnya</td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                  <tr>
                    <td>Whatsapp Group Support</td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                  <tr>
                    <td>Avatar untuk Social Media</td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                </tbody>
                </table>
                <br>
                <a class="waves-effect waves-light btn-large col s12">Daftar Sekarang</a>
              </div>
            </div>
          </div>
      </div>
    </li>
  </ul>
  <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Perbandingan Paket</div>
      <div class="collapsible-body">
        <div class="row">
            <div class="container">
              <div class="col s12">
                <table class="striped bordered">
                <thead>
                  <tr>
                      <th data-field="ket"></th>
                      <th data-field="paketa">Paket A</th>
                      <th data-field="paketb">Paket B</th>
                      <th data-field="paketc">Paket C</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tidak ada minimum pembelian berikutnya</td>
                    <td><i class="material-icons">done</i></td>
                    <td><i class="material-icons">done</i></td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                  <tr>
                    <td>Whatsapp Group Support</td>
                    <td><i class="material-icons">done</i></td>
                    <td><i class="material-icons">done</i></td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                  <tr>
                    <td>Avatar untuk Social Media</td>
                    <td><i class="material-icons">done</i></td>
                    <td><i class="material-icons">done</i></td>
                    <td><i class="material-icons">done</i></td>
                  </tr>
                </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </li>
  </ul>
  <div class="row">
    <a class="waves-effect waves-light btn-large col s12">Daftar Sekarang</a>
  </div>
  </div>
</div>
{{-- FOOTER --}}
<footer class="page-footer green accent-2">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="text-1">Zuryakids</h5>
        <p class="text-1 text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
      </div>
      <div class="col l6 s12">
        <h6 class="text-1"><strong>Ikuti Kami</strong></h6>
        <ul>
          <li><a class="text-1" href="#!"><i class="fa fa-facebook-square fa-3x fa-fw" aria-hidden="true" style="vertical-align: middle;"></i>&nbsp;Zuriyakids</a></li>
          <li><a class="text-1" href="https://www.instagram.com/zuriya.kids/"><i class="fa fa-instagram fa-3x fa-fw" aria-hidden="true" style="vertical-align: middle;"></i>&nbsp;Zuriyakids</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <h6 class="text-1 light">Copyright Zuryakids 2017</h6>
    </div>
  </div>
</footer>

@stop
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
      $('.slider').slider();
      $('.collapsible').collapsible();
    }); 
</script>
@stop
