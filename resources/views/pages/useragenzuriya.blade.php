@extends('includes.layout-agenzurya')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
{{-- NAVIGASI BAR --}}
<nav>
    <div class="nav-wrapper white">
        <a href="#" class="brand-logo center"><img src="{{ URL::asset('images/logo1.png')}}" width="65px"></a>
    </div>
</nav>
<div class="section grey lighten-3 bg1" style="margin-bottom: -25px" >
    <div class="row">
        <div class="container">
            <div class="col s12 center">
                <img src="{{ asset('images/bismillah.png') }}" class="responsive-img bismillah">
                <h4 class="center red-text">Yuk Bergabung!</h4>
                <h5 class="center red-text">Menjadi Reseller Zuriya</h5>
                <h6 class="center blink_me">(Kuota sangat terbatas)</h6>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 0px;">
        <div class="col s7">
            <img src="{{ asset('images/agen1.png') }}" class="right" width="230px">
        </div>
        <div class="col s5 left">
            <p class="red-text" style="font-size: 18px;line-height: 1.5">
                Keuntungan <br/>
                <span style="font-size: 14px">Sampai Dengan </span><br/>
                <span style="font-size: 55px">25%</span>
            </p>
        </div>
    </div>
</div>
<div class="section amber accent-1 dash" style="padding-bottom: 10px">
    <div class="row">
        <div class="col s12">
            <h5 class="center red-text">Dapatkan Reward untuk Reseller Terbaik</h5>
        </div>
    </div>
</div>
<div class="section white dash">
    <div class="row">
        <div class="col s12">
            <div class="image red-text center">
                <img src="{{ asset('images/singapore.png') }}" class="responsive-img" style="margin-top: -15px">
                <h5 class="text4 center">Jalan jalan ke Singapura</h5>
                <h5 class="text2 center black-text">Reseller Terbaik 1</h5>
            </div>
        </div>
    </div>
</div>
<div class="section amber accent-1 dash">
    <div class="row">
        <div class="col s12">
            <div class="image red-text center">
                <img src="{{ asset('images/rupiah.png') }}" class="responsive-img" style="margin-top: -15px">
                <h5 class="text3 center">Uang Tunai Rp.1 Juta</h5>
                <h5 class="text2 center black-text">Reseller Terbaik 2 & 3</h5>
            </div>
        </div>
    </div>
</div>
<div class="section blue lighten-4 dash">
    <div class="row">
        <div class="col s12">
            <div class="image red-text center">
                <img src="{{ asset('images/voucher-500.png') }}" class="responsive-img" style="margin-top: -15px">
                <h5 class="text3 center">Voucher Zuriyakids 500rb</h5>
                <h5 class="text2 center black-text">Reseller Terbaik 4, 5 & 6</h5>
            </div>
        </div>
    </div>
</div>
<div class="section grey lighten-3 dash" style="padding-bottom: 0">
    <div class="row" style="margin-bottom: 0">
        <div class="container">
            <div class="col s6 push-s4 black-text">
                <img src="{{ asset('images/kenapa.png') }}" class="center" width="200px">
            </div>
            <div class="col s4 pull-s6 black-text">
                <h4 style="line-height: 120%">Kenapa Harus Jadi Reseller Zuriya??</h4>
            </div>
        </div>
    </div>
</div>
<div class="section grey lighten-3 dash">
    <div class="row">
        <div class="container">
            <div class="col s12 black-text">
                <span class="bulat">1</span><span class="head1">Desain</span> <p>Desain dengan konsep islami berdasarkan Alquran dan sunnah dengan desain yang keren, mengikuti selera anak zaman sekarang 🙂</p>
                <span class="bulat">2</span><span class="head1">Kualitas</span><p> Kualitas produk sudah tentu menjadi prioritas utama dalam brand Zuriya, dari pemilihan bahan sampai packaging premium dan exclusive</p>
                <span class="bulat">3</span><span class="head1">Kebutuhan Primer</span><p> Pakaian merupakan kebutuhan primer setiap individu, Insya Allah akan selalu laku sepanjang tahun, dan tidak mengenal expired seperti bisnis makanan 🙂
            </p>
            <span class="bulat">4</span><span class="head1">Berdakwah</span><p>Setiap reseller mendapat kesempatan berbagi kebaikan atau berdakwah dengan media kaos islami zuriya</p>
            <span class="bulat">5</span><span class="head1">Full Online</span><p>Bisnis kaos Zuriya dapat dijalankan dengan full online, sehingga ibu-ibu dirumah dapat berbisnis dari rumah tanpa meninggalkan kewajiban dirumah tangga 🙂 (rumah ke urus, bisnis jalan teruus) hehe</p>
            <span class="bulat">6</span><span class="head1">Dapat Ilmu Bisnis</span><p>Setiap reseller zuriya akan mendapatkan fasilitas pembelajaran tentang bisnis online</p>
            <span class="bulat">7</span><span class="head1">Dapat Website</span><p>Setiap reseller zuriya akan mendapatkan fasilitas untuk berjualan online seperti website, marketing tools seperti gambar2 untuk promosi di media sosial</p>            
            <span class="bulat">8</span><span class="head1">Bisa Dropship</span><p>Reseller terdaftar mendapatkan fasilitas dropship. Yaitu pesanan reseller dapat langsung dikirim ke pelanggan.</p>
            <p>dan masih banyak lagi keuntungannya deh...</p>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/44ixFU1G5p4" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="section dash">
<div class="container">
    <h4>Produk Kami</h4>
    <div class="carousel carousel-slider center" data-indicators="false" style="
        height: 250px">
        <a class="carousel-item" href="#"><img src="{{asset('images/produk/1.jpg') }}"></a>
        <a class="carousel-item" href="#"><img src="{{asset('images/produk/2.jpg') }}"></a>
        <a class="carousel-item" href="#"><img src="{{asset('images/produk/3.jpg') }}"></a>
        <a class="carousel-item" href="#"><img src="{{asset('images/produk/4.jpg') }}"></a>
        <a class="carousel-item" href="#"><img src="{{asset('images/produk/5.jpg') }}"></a>
        <a class="carousel-item" href="#"><img src="{{asset('images/produk/6.jpg') }}"></a>
        <a class="carousel-item" href="#"><img src="{{asset('images/produk/7.jpg') }}"></a>
    </div>
</div>
</div>
<div class="section dash">
<div class="row">
    <div class="container">
        <h4 class="red-text">Size Chart</h4>
        <div class="col s12 l6">
            <img src="{{ asset('images/chart/1.jpg') }}" class="responsive-img chart">
        </div>
        <div class="col s12 l6">
            <img src="{{ asset('images/chart/2.jpg') }}" class="responsive-img chart">
        </div>
        <div class="col s12 l6">
            <img src="{{ asset('images/chart/3.jpg') }}" class="responsive-img chart">
        </div>
        <div class="col s12 l6">
            <img src="{{ asset('images/chart/4.jpg') }}" class="responsive-img chart">
        </div>
    </div>
</div>
</div>
<div class="section dash" style="padding-bottom: 20px;">
<div class="row">
    <div class="container center">
        <h4 style="text-align: left;">Testimoni Customer</h4>
        <img src="{{ asset('images/testimoni.png') }}" class="responsive-img">
    </div>
</div>
</div>
{{-- PAKET --}}
<v class="section dash grey lighten-3" id="paket">
<div class="row">
    <div class="container">
        <h4>Paket</h4>
        <div class="col s12">
            <ul class="collapsible montserrat popout" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header amber lighten-3">
                        <div class="row" style="margin-bottom: 15px">
                            <div class="col s10 center">
                                <i class="material-icons">star</i>
                                <h5>Paket Alif</h5>
                                <p class="center red-text" style="font-size: 20px;font-weight:bold;margin: 0 0 0 50px; line-height: 20px">Rp 259.000</p>
                            </div>
                            <div class="col s1">
                                <i class="material-icons" style="font-size: 25px">keyboard_arrow_down</i>
                            </div>
                        </div>
                    </div>
                    <div class="collapsible-body white">
                        <div class="row">
                            <div class="container">
                                <div class="col s6">
                                    <div class="card">
                                        <div class="card-image waves-block waves-light">
                                            <img class="" src="{{ URL::asset('images/kaos.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4" style="font-size: medium">4 Kaos</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s6">
                                    <div class="card">
                                        <div class="card-image waves-block waves-light">
                                            <img class="activator" src="{{ URL::asset('images/name-card.png') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4" style="font-size: medium">Katalog</span>
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
                                                <td>Free 4 Kaos (2 Small dan 2 Medium)</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Free Katalog</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Free website akun Zuriya</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Tidak ada minimal belanja</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Dropship</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Free materi marketing online dasar</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Berlaku seumur hidup</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <a class="waves-light btn-large col s12 blue" href="{{ route('daftarreseller',['paketpilih'=>'Paket Alif','username'=>$agen->username]) }}">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="collapsible montserrat popout" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header green lighten-2">
                        <div class="row" style="margin-bottom: 15px">
                            <div class="col s10 center">
                                <i class="material-icons">star</i>
                                <h5>Paket Lam</h5>
                                <p class="center red-text" style="font-size: 20px;font-weight:bold;margin: 0 0 0 50px; line-height: 20px">Rp 554.000</p>
                            </div>
                            <div class="col s1">
                                <i class="material-icons" style="font-size: 25px">keyboard_arrow_down</i>
                            </div>
                        </div>
                    </div>
                    <div class="collapsible-body white">
                        <div class="row">
                            <div class="container">
                                <div class="col s6">
                                    <div class="card">
                                        <div class="card-image waves-block waves-light">
                                            <img class="" src="{{ URL::asset('images/kaos.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4" style="font-size: medium">8 Kaos</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s6">
                                    <div class="card">
                                        <div class="card-image waves-block waves-light">
                                            <img class="activator" src="{{ URL::asset('images/name-card.png') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4" style="font-size: medium">Katalog</span>
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
                                                <td>Free 8 Kaos (2S, 2M, 2L dan 2 XL)</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Free Katalog</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Free website akun Zuriya</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Tidak ada minimal belanja</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Dropship</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Free materi marketing online dasar</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Berlaku seumur hidup</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <a class="waves-light btn-large col s12 blue" href="{{ route('daftarreseller',['paketpilih'=>'Paket Lam','username'=>$agen->username]) }}">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="collapsible montserrat popout" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header red">
                        <div class="row" style="margin-bottom: 15px">
                            <div class="col s10 center white-text">
                                <i class="material-icons">star</i>
                                <h5>Paket Mim</h5>
                                <p class="center" style="font-size: 20px;font-weight:bold;margin: 0 0 0 50px; line-height: 20px">Rp 765.000</p>
                            </div>
                            <div class="col s1">
                                <i class="material-icons" style="font-size: 25px">keyboard_arrow_down</i>
                            </div>
                        </div>
                    </div>
                    <div class="collapsible-body white">
                        <div class="row">
                            <div class="container">
                                <div class="col s6">
                                    <div class="card">
                                        <div class="card-image waves-block waves-light">
                                            <img class="" src="{{ URL::asset('images/kaos.jpg') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4" style="font-size: medium">12 Kaos</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s6">
                                    <div class="card">
                                        <div class="card-image waves-block waves-light">
                                            <img class="activator" src="{{ URL::asset('images/name-card.png') }}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4" style="font-size: medium">Katalog</span>
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
                                                <td>Free 12 Kaos (2XS, 2S, 3M, 3L dan 2 XL)</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Free Katalog</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Free website akun Zuriya</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Tidak ada minimal belanja</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Dropship</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Free materi marketing online dasar</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Berlaku seumur hidup</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Bisa memilih model kaos</td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <a class="waves-light btn-large col s12 blue" href="{{ route('daftarreseller',['paketpilih'=>'Paket Mim','username'=>$agen->username]) }}">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="collapsible popout montserrat" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>Perbandingan Paket</div>
                    <div class="collapsible-body white">
                        <div class="row">
                            {{-- <div class="container"> --}}
                                <div class="col s12">
                                    <table class="striped bordered centered" style="font-size: 12px">
                                        <thead>
                                            <tr>
                                                <th style="width:30%" data-field="ket"></th>
                                                <th style="width:30%" data-field="paketa">Paket Alif</th>
                                                <th style="width:30%" data-field="paketb">Paket Lam</th>
                                                <th style="width:30%" data-field="paketc">Paket Mim</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="70px">Free Kaos</td>
                                                <td>4</td>
                                                <td>8</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td width="70px">Katalog</td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td width="70px">Website akun Zuriya</td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Tidak ada minimal belanja</td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Dropship</td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Free marketing online dasar</td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Berlaku seumur hidup</td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td>Bisa memilih model kaos</td>
                                                <td><i class="material-icons"> - </i></td>
                                                <td><i class="material-icons"> - </i></td>
                                                <td><i class="material-icons">done</i></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><a href="{{ route('daftarreseller',['paketpilih'=>'Paket Alif','username'=>$agen->username]) }}" class="btn center" id="btn-small">Daftar</a></td>
                                                <td><a href="{{ route('daftarreseller',['paketpilih'=>'Paket Lam','username'=>$agen->username]) }}" class="btn center" id="btn-small">Daftar</a></td>
                                                <td><a href="{{ route('daftarreseller',['paketpilih'=>'Paket Mim','username'=>$agen->username]) }}" class="btn center" id="btn-small">Daftar</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            {{--                                </div> --}}
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="footer">
    <div class="row jarak-atas">
        <div class="col s6">
            <a href="#paket" class="btn red waves-effect right">Daftar Sekarang</a>
        </div>
        <div class="col s6">
            <a href="https://api.whatsapp.com/send?phone={{ $agen->handphone }}&text=Assalamualaikum%20{{ $agen->nama }}%20Saya%20Mau%20Daftar%20Reseller" class="btn green waves-effect left">Whatsapp</a>
        </div>
    </div>
</div>
{{-- FOOTER --}}
<footer class="page-footer green accent-2 montserrat" style="margin-top:auto">
    <div class="container">
        <div class="row">
            <div class="col l12 s12 center-align">
                <h5><strong>Agen Resmi Zuriyakids</strong></h5>
                <span class="nav-title ">Anda akan mendaftar Reseller melalui Agen:</span>
                <div class="row"></div>
                <div class="row">
                    <div class="col s6 l6 right-align">
                        {!! Html::image('images/profile/'. $agen->image, 'profile image', array('class'=>'circle z-depth-0 responsive-img', 'width'=>200)) !!}
                    </div>
                    <div class="col s6 l6 left-align ">
                        <h5><strong> {{ $agen->nama }} </strong></h5>
                        <p>Email: {{ $agen->email }}</p>
                        <p>Whatsapp: {{ $agen->handphone }}</p>
                        <p>BBM: {{ $agen->bbm }}</p>
                    </div>
                </div>
                <h6 class="text-1"><strong>Ikuti Kami</strong></h6>
                <a class="text-1 center-align" href="#!"><i class="fa fa-facebook-square fa-2x fa-fw" aria-hidden="true" style="color:white"></i></a>
                <a class="text-1" href="https://www.instagram.com/zuriya.kids/"><i class="fa fa-instagram fa-2x fa-fw" aria-hidden="true" style="color:white"></i></a>
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
$(function(){ $('.carousel.carousel-slider').carousel({full_width:true,});
    autoplay()
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 4500);
    }
});
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>
@stop