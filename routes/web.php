<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.agenzuriya1');
});
Route::get('/zuriyaagen', function () {
    return view('pages.agenzuriya1');
});

Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);

Route::get('/sukses{id_order}', array('as'=>'sukses','uses' => 'FrontController@sukses'));
Route::get('/resellersukses{id_reseller}', array('as'=>'sukses-reseller','uses' => 'FrontController@sukses_reseller'));
Route::get('/konfirmasi-pembayaran-sukses', array('uses' => 'FrontController@sukses_konfirmasi_pembayaran'));
Route::get('/reseller/{username}', array('uses' => 'FrontController@reseller'));

Route::get('/daftar/{paketpilih}', ['as' => 'daftar.paketpilih', 'uses' =>'RegistrationController@register']);
Route::post('/daftar/{paketpilih}', 'RegistrationController@store');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');

Route::get('/konfirmasipembayaran{id_order}', [ 'as'=>'konfirmasi_pembayaran', 'uses'=>'FrontController@konfirmasipembayaran']);
Route::post('/konfirmasipembayaran','KonfPembayaranController@insert');

Route::get('/logout', array('uses' =>'FrontController@logout'));

Route::get('{username}/daftarreseller/{paketpilih}', array(
	'uses'=> 'RegistrationController@reseller',
	'as' => 'daftarreseller'
	));
Route::get('/{username}', array('uses' => 'FrontController@username'));
Route::post('/{username}/daftarreseller/{paketpilih}', array('uses'=> 'RegistrationController@registerreseller'));
Route::get('/{username}/whatsapp', array('uses'=> 'FrontController@WhatsappAgen'));

Route::group(array('middleware'=>'auth'), function(){
	Route::get('/dashboard/home', 'RegistrationController@dashboard');
	Route::get('/dashboard/profile',array('uses' =>'DashboardController@profile'));
	Route::post('/dashboard/profile/update', 'ProfileController@update');
	
	Route::group(['middleware' => ['role:Admin']], function () {
		
		Route::get('/dashboard/stok-barang',array('uses' =>'DashboardController@stokbarang'));
		Route::post('/dashboard/stok-barang/update', 'BarangController@update');
		Route::get('/dashboard/stok-barang/edit/{kd_barang}', 'BarangController@edit');
		Route::post('/dashboard/stok-barang/tambah', 'BarangController@tambah');
		
		Route::get('/dashboard/konfirmasiagen',array('uses'=>'DashboardController@konfirmasipembayaran'));
		Route::get('/dashboard/konfirmasiagen/aktivasi/{id_order}',[
			'uses'=>'KonfPembayaranController@aktivasiagen',
			'as' =>'aktivasiagen'
			]);
		Route::get('/dashboard/konfirmasiagen/delete/{id_order}', [
			'uses'=>'KonfPembayaranController@delete',
			'as' => 'deletekonfirmasipembayaran'
			]);
		
		Route::get('/dashboard/agen/edit/{id_customer}',[
			'uses'=>'DashboardController@editcustomer',
			'as'=>'editcustomer'
			]);
		Route::post('dashboard/agen/edit/update', 'CustomerController@edit');
		
		Route::get('dashboard/agen', 'DashboardController@agen');
		Route::get('dashboard/reseller', 'DashboardController@reseller');
		Route::post('dashboard/home/update_status/{transaksi_id}',[
			'uses'=>'TransaksiController@UpdateStatus',
			'as'=>'updateStatusTransaksi'
			]);
		Route::get('dashboard/rank', 'DashboardController@rank');
	});
	Route::group(['middleware' => ['role:Agen']], function () {
		Route::get('dashboard/konfirmasireseller', 'DashboardController@konfirmasireseller');
		Route::get('dashboard/konfirmasireseller/{id_reseller}',[
			'uses'=>'KonfPembayaranController@aktivasireseller',
			'as' =>'aktivasireseller' 
			]);
	});
	Route::group(['middleware' => ['role:Agen|Reseller']], function () {
		Route::get('search/autocomplete', ['as' => 'search-autocomplete', 'uses'=> 'DashboardController@autocomplete']);
		Route::get('/infos/{id}', 'DashboardController@getInfo');
		Route::get('search/autoharga', ['as' => 'search-harga', 'uses'=> 'DashboardController@autoharga']);
		Route::get('dashboard/transaksi', 'DashboardController@transaksi');
		Route::get('dashboard/pesanan', 'DashboardController@pesanan');
		Route::get('dashboard/pesanan/{transaksi_id}', ['as'=> 'editpesanan', 'uses'=>'TransaksiController@EditOrder']);
		Route::get('dashboard/transaksi/OrderPesanan', 'TransaksiController@OrderPesanan');
		Route::post('dashboard/transaksi/add', 'TransaksiController@add');

	});
});