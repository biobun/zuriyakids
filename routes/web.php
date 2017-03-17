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
    return view('pages.home');
});
Route::get('/konfirmasiemail', 'FrontController@konfirmasi_email');
Route::get('/tentangkami', 'FrontController@tentang');
Route::get('/produk', 'FrontController@produk');
Route::get('/kontak', 'FrontController@kontak');
Route::get('/peluangbisnis', 'FrontController@peluangbisnis');
Route::get('/agen', 'FrontController@agen');
// Route::get('/agenzurya','FrontController@agenzurya');

Route::get('/daftar', 'RegistrationController@register');
Route::post('/daftar', 'RegistrationController@store');
Route::get('/{username}/daftarreseller', array('uses'=> 'RegistrationController@reseller'));
Route::post('/{username}/daftarreseller', array('uses'=> 'RegistrationController@registerreseller'));

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');

Route::get('/konfirmasipembayaran','FrontController@konfirmasipembayaran');
Route::post('/konfirmasipembayaran','KonfPembayaranController@insert');

Route::get('/logout', array('uses' =>'FrontController@logout'));
Route::get('/{username}', array('uses' => 'FrontController@username'));

Route::group(array('middleware'=>'auth'), function(){
	Route::get('/dashboard/home', 'RegistrationController@dashboard');
	Route::get('/dashboard/profile',array('uses' =>'DashboardController@profile'));
	Route::post('/dashboard/profile/update', 'UpdateData@profile');
	
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
		Route::get('/dashboard/konfirmasiagen/delete/{id_order}', 'KonfPembayaranController@delete');
		
		Route::get('dashboard/agen', 'DashboardController@agen');
		Route::get('dashboard/reseller', 'DashboardController@reseller');
		Route::get('dashboard/transaksi', 'DashboardController@transaksi');
	});
});
