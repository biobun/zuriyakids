@extends('includes.layout-agenzurya')
@section('title', 'Zuriyakids')
@section('description', 'Kaos Anak Muslim')
@section('content')
<div class="section grey lighten-3 bg1" style="margin-bottom: -25px" >
	<div class="row">
		<div class="container">
			<div class="col s12 center">
				<img src="{{ asset('images/bismillah.png') }}" class="responsive-img bismillah">
				<h4 class="center red-text">Yuk Bergabung!</h4>
				<h5 class="center red-text">Menjadi Agen Zuriya</h5>
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
				<span style="font-size: 55px">40%</span>
			</p>
		</div>
	</div>
</div>
<div class="section amber accent-1 dash" style="padding-bottom: 10px">
	<div class="row">
		<div class="col s12">
			<h5 class="center red-text">Dapatkan Reward untuk Agen Terbaik</h5>
		</div>
	</div>
</div>
<div class="section white dash">
	<div class="row">
		<div class="col s12" style="padding: 0px">
			<div class="image red-text center">
				<img src="{{ asset('images/reward-1.png') }}" class="responsive-img" style="margin-top: -13px">
				<h5 class="text1 center">umroh gratis 2018</h5>
				<h5 class="text2 center black-text" style="padding-top: 20px">Agen Terbaik 1</h5>
			</div>
		</div>
	</div>
</div>
<div class="section amber accent-1 dash">
	<div class="row">
		<div class="col s12" style="padding-bottom: 30px">
			<div class="image red-text center">
				<img src="{{ asset('images/rupiah.png') }}" class="responsive-img" style="margin-top: -15px">
				<h5 class="text3 center">Uang Tunai Rp.5 Juta</h5>
				<h5 class="text2 center black-text">Agen Terbaik 2 & 3</h5>
			</div>
		</div>
	</div>
</div>
<div class="section blue lighten-4 dash">
	<div class="row">
		<div class="col s12" style="padding-bottom: 30px">
			<div class="image red-text center">
				<img src="{{ asset('images/voucher.png') }}" class="responsive-img" style="margin-top: -15px">
				<h5 class="text3 center">Voucher senilai Rp.1 Juta</h5>
				<h5 class="text2 center black-text">Agen Terbaik 4 - 7</h5>
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
				<h4 style="line-height: 120%">Kenapa Harus Jadi Agen Zuriya??</h4>
			</div>
		</div>
	</div>
</div>
<div class="section grey lighten-3 dash">
	<div class="row">
		<div class="container">
			<div class="col s12 black-text">
				<span class="bulat">1</span><span class="head1">Desain</span> <p>Desain dengan konsep islami berdasarkan Alquran dan sunnah dengan desain yang keren, mengikuti selera anak zaman sekarang ðŸ™‚</p>
				<span class="bulat">2</span><span class="head1">Kualitas</span><p> Kualitas produk sudah tentu menjadi prioritas utama dalam brand Zuriya, dari pemilihan bahan sampai packaging premium dan exclusive</p>
				<span class="bulat">3</span><span class="head1">Kebutuhan Primer</span><p> Pakaian merupakan kebutuhan primer setiap individu, Insya Allah akan selalu laku sepanjang tahun, dan tidak mengenal expired seperti bisnis makanan ðŸ™‚
			</p>
			<span class="bulat">4</span><span class="head1">Berdakwah</span><p>Setiap agen mendapat kesempatan berbagi kebaikan atau berdakwah dengan media kaos islami zuriya</p>
			<span class="bulat">5</span><span class="head1">Full Online</span><p>Bisnis kaos Zuriya dapat dijalankan dengan full online, sehingga ibu-ibu dirumah dapat berbisnis dari rumah tanpa meninggalkan kewajiban dirumah tangga ðŸ™‚ (rumah ke urus, bisnis jalan teruus) hehe</p>
			<span class="bulat">6</span><span class="head1">Dapat Ilmu Bisnis</span><p>Setiap agen zuriya akan mendapatkan fasilitas pembelajaran tentang bisnis online</p>
			<span class="bulat">7</span><span class="head1">Dapat Website</span><p>Setiap agen zuriya akan mendapatkan fasilitas untuk berjualan online seperti website, marketing tools seperti gambar2 untuk promosi di media sosial</p>
			<span class="bulat">8</span><span class="head1">Gratis Ongkir</span><p>Pendaftaran Agen sampai dengan 12 Mei 2017 akan dapat fasilitas Gratis ongkos kirim dari Zuriyakids</p>
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
<div class="section dash grey lighten-3" id="paket">
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
								<span style="font-size: 18px">Paket Al-Aqsa</span>
								<p class="center" style="font-size: 14px;margin: 0 0 0 50px; line-height: 20px"><strike>Rp.3.561.000</strike><br><span class="red-text center" style="font-size: 18px;"><strong>Rp.2.799.000</strong></span></p>
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
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">40 Total Kaos</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/name-card.png') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">1 Box Kartu Nama</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/spanduk.png') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">1 Spanduk</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/katalog.jpg') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">80 Katalog</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/kertas-kado.jpg') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">20 Kertas Kado</span>
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
											<tr>
												<td>Zuriya Belajar Bisnis Online ecourse</td>
												<td><i class="material-icons">done</i></td>
											</tr>
											<tr>
												<td>Website Agen Resmi</td>
												<td><i class="material-icons">done</i></td>
											</tr>
											<tr>
												<td>Website Zuriyastore</td>
												<td><i class="material-icons">done</i></td>
											</tr>
										</tbody>
									</table>
									<br>
									<a class="waves-light btn-large col s12 red" href="{{ route('daftar.paketpilih',['paketpilih'=>'Paket Al-Aqsa'])}}">Daftar Sekarang</a>
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
								<span style="font-size: 15px">Paket An-Nabawi</span>
								<p class="center" style="font-size: 16px;margin: 0 0 0 50px; line-height: 20px"><strike>Rp.8.217.000</strike><br><span class="red-text center strong" style="font-size: 18px;"><strong>Rp.5.550.000</strong></span></p>
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
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">90 Total Kaos</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/name-card.png') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">2 Box Kartu Nama</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/spanduk.png') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">1 Spanduk</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/katalog.jpg') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium;margin-left: -10px">200 Katalog</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/kertas-kado.jpg') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">50 Kertas Kado</span>
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
											<tr>
												<td>Zuriya Belajar Bisnis Online ecourse</td>
												<td><i class="material-icons">done</i></td>
											</tr>
											<tr>
												<td>Website Agen Resmi</td>
												<td><i class="material-icons">done</i></td>
											</tr>
											<tr>
												<td>Website Zuriyastore</td>
												<td><i class="material-icons">done</i></td>
											</tr>
										</tbody>
									</table>
									<br>
									<a class="waves-light btn-large col s12 red" href="{{ route('daftar.paketpilih',['paketpilih'=>'Paket An-Nabawi'])}}">Daftar Sekarang</a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
			<ul class="collapsible montserrat popout" data-collapsible="expandable">
				<li>
					<div class="collapsible-header red white-text">
						<div class="row" style="margin-bottom: 15px">
							<div class="col s10 center">
								<i class="material-icons">star</i>
								<span style="font-size: 16px">Paket Al-Haram</span>
								<p class="center" style="font-size: 14px;margin: 0 0 0 50px; line-height: 20px"><strike>Rp.12.076.000</strike><br><span class="center strong yellow-text" style="font-size: 18px;"><strong>Rp.7.950.000</strong></span></p>
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
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">130 Total Kaos</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/name-card.png') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">2 Box Kartu Nama</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/spanduk.png') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">1 Spanduk</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/katalog.jpg') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium;margin-left: -10px">250 Katalog</span>
										</div>
									</div>
								</div>
								<div class="col s6">
									<div class="card">
										<div class="card-image waves-block waves-light">
											<img class="activator" src="{{ URL::asset('images/kertas-kado.jpg') }}">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4" style="font-size: medium">80 Kertas Kado</span>
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
											<tr>
												<td>Zuriya Belajar Bisnis Online ecourse</td>
												<td><i class="material-icons">done</i></td>
											</tr>
											<tr>
												<td>Website Agen Resmi</td>
												<td><i class="material-icons">done</i></td>
											</tr>
											<tr>
												<td>Website Zuriyastore</td>
												<td><i class="material-icons">done</i></td>
											</tr>
											<tr>
												<td>Facebook Ads</td>
												<td>Rp. 300.000</td>
											</tr>
										</tbody>
									</table>
									<br>
									<a class="waves-light btn-large col s12 red" href="{{ route('daftar.paketpilih',['paketpilih'=>'Paket Al-Haram'])}}">Daftar Sekarang</a>
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
												<th style="width:30%" data-field="paketa">Paket Al-Aqsa</th>
												<th style="width:30%" data-field="paketb">Paket An-Nabawi</th>
												<th style="width:30%" data-field="paketc">Paket AL-Haram</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td width="70px">Total Kaos</td>
												<td>40</td>
												<td>90</td>
												<td>130</td>
											</tr>
											<tr>
												<td width="70px">Kartu Nama</td>
												<td>1 Box</td>
												<td>2 Box</td>
												<td>2 Box</td>
											</tr>
											<tr>
												<td width="70px">Spanduk</td>
												<td>1</td>
												<td>1</td>
												<td>1</td>
											</tr>
											<tr>
												<td width="70px">Kertas Kado</td>
												<td>20</td>
												<td>50</td>
												<td>80</td>
											</tr>
											<tr>
												<td width="70px">Katalog</td>
												<td>80</td>
												<td>200</td>
												<td>250</td>
											</tr>
											<tr>
												<td width="70px">Tidak ada minimum pembelian berikutnya</td>
												<td><i class="material-icons">done</i></td>
												<td><i class="material-icons">done</i></td>
												<td><i class="material-icons">done</i></td>
											</tr>
											<tr>
												<td width="70px">Tidak ada minimum pembelian berikutnya</td>
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
												<td>Zuriya Belajar Online ecourse</td>
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
											<tr>
												<td>Website Agen Resmi</td>
												<td><i class="material-icons">done</i></td>
												<td><i class="material-icons">done</i></td>
												<td><i class="material-icons">done</i></td>
											</tr>
											<tr>
												<td>Website Zuriyastore</td>
												<td><i class="material-icons">done</i></td>
												<td><i class="material-icons">done</i></td>
												<td><i class="material-icons">done</i></td>
											</tr>
											<tr>
												<td>Facebook Ads</td>
												<td> - </td>
												<td> - </td>
												<td>Rp. 300.000</td>
											</tr>
											<tr>
												<td></td>
												<td><a href="{{ route('daftar.paketpilih',['paketpilih'=>'Paket Al-Aqsa'])}}" class="btn center" id="btn-small">Daftar</a></td>
												<td><a href="{{ route('daftar.paketpilih',['paketpilih'=>'Paket An-Nabawi'])}}" class="btn center" id="btn-small">Daftar</a></td>
												<td><a href="{{ route('daftar.paketpilih',['paketpilih'=>'Paket Al-Haram'])}}" class="btn center" id="btn-small">Daftar</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							{{-- 								</div> --}}
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</div>
<div class="section grey lighten-3" style="margin-top: -30px;padding-bottom: 30px">
<div class="row">
	<div class="container">
		<div class="col s12 montserrat center red-text strong" style="font-weight: bold">
			<div id="clockdiv">
				<div>
					<span class="days"></span>
					<div class="smalltext">Hari</div>
				</div>
				<div>
					<span class="hours"></span>
					<div class="smalltext">Jam</div>
				</div>
				<div>
					<span class="minutes"></span>
					<div class="smalltext">Menit</div>
				</div>
				<div>
					<span class="seconds"></span>
					<div class="smalltext">Detik</div>
				</div>
			</div>
			<p>Harga paket dapat berubah sewaktu-waktu.<br/>
			Pendaftaran akan segera ditutup setelah kuota terpenuhi</p>
			<p><strong style="font-size: larger">INGAT!</strong> Anda akan bersaing dengan ratusan ribu orang yang melihat peluang ini,
				jangan sia-sia kan. Daftar sekarang juga atau Anda rela menunggu mungkin sekian bulan
				untuk pendaftaran gelombang berikutnya.
			</p>
			<p>Yuk Segera Mendaftar...</p>
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
		<a href="https://api.whatsapp.com/send?phone=6287878567807&text=Assalamualaikum%20zuriya%20Saya%20Mau%20Daftar%20Agen" class="btn green waves-effect left">Whatsapp</a>
	</div>
</div>
</div>
@section('js')
<script>
// google-analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98335508-1', 'auto');
  ga('send', 'pageview');

//facebook
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '678897648917577'); // Insert your pixel ID here.
fbq('track', 'PageView');

$(function(){ $('.carousel.carousel-slider').carousel({full_width:true,});
	autoplay()
	function autoplay() {
		$('.carousel').carousel('next');
		setTimeout(autoplay, 4500);
	}
});
function getTimeRemaining(endtime) {
	var t = Date.parse(endtime) - Date.parse(new Date());
	var seconds = Math.floor((t / 1000) % 60);
	var minutes = Math.floor((t / 1000 / 60) % 60);
	var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	var days = Math.floor(t / (1000 * 60 * 60 * 24));
	return {
		'total': t,
		'days': days,
		'hours': hours,
		'minutes': minutes,
		'seconds': seconds
	};
}
function initializeClock(id, endtime) {
	var clock = document.getElementById(id);
	var daysSpan = clock.querySelector('.days');
	var hoursSpan = clock.querySelector('.hours');
	var minutesSpan = clock.querySelector('.minutes');
	var secondsSpan = clock.querySelector('.seconds');
	function updateClock() {
		var t = getTimeRemaining(endtime);
		daysSpan.innerHTML = t.days;
		hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
		minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
		secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
		if (t.total <= 0) {
			clearInterval(timeinterval);
		}
	}
	updateClock();
	var timeinterval = setInterval(updateClock, 1000);
}
var deadline = 'May 12 2017';
initializeClock('clockdiv', deadline);

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
@endsection