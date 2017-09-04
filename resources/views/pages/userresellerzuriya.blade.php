@extends('includes.layout-agenzurya')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
{{-- NAVIGASI BAR --}}
<nav class="z-depth-0">
    <div class="nav-wrapper white">
        <a href="#" class="brand-logo center"><img src="{{ URL::asset('images/logo1.png')}}" width="65px"></a>
    </div>
</nav>
{{-- MAIN --}}
<main>
<div class="section teal lighten-3 dash-white" style="padding: 10px 0 0 0">
    <div class="container">
        <div class="row" style="margin: 0">
            <div class="col s12 l12">
                <h5 class="center-align white-text">Assalamualaikum, Yuk Order Produk Zuriya Disni</h5>
            </div>
            <div class="col s12 l12 center">
                <img src="{{ asset('images/reseller1.png') }}" class="center responsive-img" style="margin-bottom: -6px">
            </div>
        </div>
    </div>
</div>
<div class="section amber lighten-3 dash-white" style="padding: 10px 0 0 0">
    <div class="container">
        <div class="row" style="margin: 0">
            <div class="col s12 center l12">
                <img src="{{ asset('images/reseller/4.png') }}" class="center responsive-img">
            </div>
            <div class="col s12 l12">
                <h5 class="center-align white-text">Islam is way of life</h5>
            </div>
        </div>
    </div>
</div>
<div class="section blue lighten-4 dash-white" style="padding: 10px 0 0 0">
    <div class="container">
        <div class="row" style="margin: 0">
            <div class="col s12 l12 center">
                <img src="{{ asset('images/reseller/1.png') }}" class="center responsive-img">
            </div>
            <div class="col s12 l12">
                <h5 class="center-align white-text">Love Rasullullah</h5>
            </div>
        </div>
    </div>
</div>
<div class="section grey lighten-1 dash-white" style="padding: 10px 0 0 0">
    <div class="container">
        <div class="row" style="margin: 0">
            <div class="col s12 center l12">
                <img src="{{ asset('images/reseller/2.png') }}" class="center responsive-img">
            </div>
            <div class="col s12 l12">
                <h5 class="center-align white-text">Do you hear Adzan??</h5>
            </div>
        </div>
    </div>
</div>
<div class="section green lighten-3 dash-white" style="padding: 10px 0 0 0">
    <div class="container">
        <div class="row" style="margin: 0">
            <div class="col s12 center l12">
                <img src="{{ asset('images/reseller/3.png') }}" class="center responsive-img">
            </div>
            <div class="col s12 l12">
                <h5 class="center-align white-text">Jannah is our goal</h5>
            </div>
        </div>
    </div>
</div>
<div class="section orange lighten-4 dash-white" style="padding: 10px 0 0 0">
    <div class="container">
        <div class="row" style="margin: 0">
            <div class="col s12 center l12">
                <img src="{{ asset('images/reseller/7.png') }}" class="center responsive-img">
            </div>
            <div class="col s12 l12">
                <h5 class="center-align white-text">AlQuran is Guidance for mandkind </h5>
            </div>
        </div>
    </div>
</div>
<div class="section light-blue lighten-4 dash-white" style="padding: 10px 0 0 0">
    <div class="container">
        <div class="row" style="margin: 0">
            <div class="col s12 center l12">
                <img src="{{ asset('images/reseller/6.png') }}" class="center responsive-img">
            </div>
            <div class="col s10 l12 offset-s1">
                <h5 class="center-align white-text">Everyday with Akhlaq Al Karimah</h5>
            </div>
        </div>
    </div>
</div>
<div class="section amber lighten-3 dash-white" style="padding: 0px">
    <div class="container">
        <div class="row" style="margin: 0">
            <div class="col s12 center l12">
                <h4 class="center-align white-text">Family Series</h4>
            </div>
            <div class="col s12 l12">
                <img src="{{ asset('images/reseller/family.png') }}" class="center family">
            </div>
        </div>
    </div>
</div>
<div class="section dash-white white">
    <div class="container">
    <h4>Jumpsuit</h4>
        <div class="row">
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR061.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Love Rasulullah</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR062.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Hafizh Junior</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR063.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Grow Healthy</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR064.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Usamah Bin Zaid</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR065.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Muhammad Al Fatih</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR066.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">The Next Hafizh</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR067.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Always Remember to Smile</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR068.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">No Day Without Quran</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR069.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Grow with Quran</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR070.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Khalid bin Walid</p>
            </div>
        </div>
        <h4>Kaos</h4>
        <div class="row">
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR11.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Do You Hear Adzan</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR12.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Islam Way of Life</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR13.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Jannah Is Our Goal</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR14.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Alquran is Guidance</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR15.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Akhlaq Alkarimah</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR16.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Birrul Walidain</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR17.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Must Do Everyday</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR051.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Love Rasulullah</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR052.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Hafizh Junior</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR053.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Grow Healthy</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR054.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Usamah bin Zaid</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR055.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Muhammad Al Fatih</p>
            </div>
        </div>
        <h4>Raglan</h4>
        <div class="row">
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR056.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">The Next Hafizh Grow with Quran</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR057.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Always Remember to Smile</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR058.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">No Day Without Quran</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR059.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Grow with Quran and Sunnah</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/ZR060.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Khalid bin Walid</p>
            </div>
        </div>
        <h4>Kaos Lengan Panjang</h4>
        <div class="row">
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/PR11.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Do You Hear Adzan</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/PR12.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Islam is Way of Life</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/PR13.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Jannah is Our Goal</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/PR14.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Alquran is Guidance</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/PR15.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Akhlaq Karimah</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/PR16.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Birrul Walidain</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/PR17.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Must Do Everyday</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/PR18.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">I Love Read Quran</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/PR51.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Love Rasulullah</p>
            </div>
            <div class="col s6 l4">
                <img src="{{ asset('images/reseller/PR52.png') }}" class="responsive-img  materialboxed">
                <p class="center-align">Hafizh Junior</p>
            </div>
        </div>
    </div>
    <div class="container">
        <hr style="margin-bottom: 30px">
        <div class="row">
            <div class="col s12 l6">
                <img src="{{ asset('images/chart/1.jpg') }}" class="responsive-img materialboxed" style="margin-bottom: 20px">
            </div>
            <div class="col s12 l6">
                <img src="{{ asset('images/chart/2.jpg') }}" class="responsive-img materialboxed" style="margin-bottom: 20px">
            </div>
            <div class="col s12 l6">
                <img src="{{ asset('images/chart/3.jpg') }}" class="responsive-img materialboxed" style="margin-bottom: 20px">
            </div>
            <div class="col s12 l6">
                <img src="{{ asset('images/chart/4.jpg') }}" class="responsive-img materialboxed" style="margin-bottom: 20px">
            </div>
        </div>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col s12 l4 offset-l4">
        <div class="card blue-grey darken-1 montserrat">
            <div class="card-content white-text">
                <span class="card-title"><h5 class="center-align">Hubungi Sekarang Juga</h5></span>
                <div class="row">
                    <div class="col l6 s6 offset-s3">
                        {!! Html::image('images/profile/'. $reseller->image, 'profile image', array('class'=>'circle z-depth-0 responsive-img activator')) !!}
                    </div>
                    <div class="col l6 s12 center-align-hp">
                        <h5 class=""><strong> {{ $reseller->nama }} </strong></h5>
                        <p>Email: {{ $reseller->email }}</p>
                        <p>Whatsapp: {{ $reseller->handphone }}</p>
                        <p style="padding-bottom: 10px">BBM: {{ $reseller->BBM }}</p>
                        <div class="col l12 s6" style="margin-bottom: 10px">  
                            <a href="https://api.whatsapp.com/send?phone={{ $reseller->handphone }}&text=Assalamualaikum%20{{ $reseller->nama }}%20Saya%20Mau%20Tanya%20Produk%20Zuriya" class="btn green inherit">Whatsapp</a>
                        </div>
                        <div class="col l12 s6">
                            <a href="https://api.whatsapp.com/send?phone={{ $reseller->handphone }}&text=Assalamualaikum%20{{ $reseller->nama }}%20Saya%20Mau%20Tanya%20Produk%20Zuriya" class="btn yellow inherit black-text">BBM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<footer class="page-footer blue-grey darken-1">
    <div class="container">
        <div class="row">
            <h6 class="white-text center-align">Selamat Berbelanja, Salam Peduli dan Berbagi dari kami, Wassalammu'alaikum</h6>
        </div>
    </div>
</footer>
<div class="footer">
<div class="row jarak-atas">
    <div class="col s6">
        <a href="https://api.whatsapp.com/send?phone={{ $reseller->handphone }}&text=Assalamualaikum%20{{ $reseller->nama }}%20Saya%20Mau%20Tanya%20Produk%20Zuriya" class="btn yellow black-text" style="margin-left: 60px">BBM</a>
    </div>
    <div class="col s6">
        <a href="https://api.whatsapp.com/send?phone={{ $reseller->handphone }}&text=Assalamualaikum%20{{ $reseller->nama }}%20Saya%20Mau%20Tanya%20Produk%20Zuriya" class="btn green ">Whatsapp</a>
    </div>
</div>
</div>
@stop
@section('js')
<script type="text/javascript">
 $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>
@stop