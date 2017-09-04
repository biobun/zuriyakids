<?php 
namespace zuriyakids\Http\Controllers;

use zuriyakids\Http\Controllers\Controller;
use Auth, Session,Image;
use zuriyakids\Agen;
use zuriyakids\Reseller;
use zuriyakids\Barang;
use zuriyakids\KonfirmasiPembayaran;
use DB;
	class FrontController extends Controller{
		
		public function login(){
			return view('pages.login', array('page' => 'login'));
		}
		public function tentang(){
			return view('pages.tentang', array('page' => 'tentang'));	
		}
		public function produk(){
			return view('pages.produk', array('page' => 'produk'));	
		}
		public function kontak(){
			return view('pages.kontak', array('page' => 'kontak'));	
		}
		public function peluangbisnis(){
			return view('pages.peluang', array('page' => 'peluangbisnis'));	
		}
		public function agen(){
			return view('pages.agen', array('page' => 'agen'));	
		}
		public function agenzuriya(){
			return view('pages.agenzuriya', array('page' => 'agenzuriya'));	
		}
		public function sukses($id_order){
			$check = KonfirmasiPembayaran::where('id','=',$id_order)->get();
			if (count($check) > 0) {			
				$dataAgen = DB::table('agen')
								->join('paket','agen.paket_id','=','paket.id')
								->join('konfirmasi_pembayaran','agen.id','=','konfirmasi_pembayaran.agen_id')
								->where('konfirmasi_pembayaran.id','=',$id_order)
								->first();
				return view('pages.email_konf', array('page' => 'email_konf','dataagen'=>$dataAgen));
			}else{
				return view('pages.notfound');
			}
		}
		public function sukses_konfirmasi_pembayaran(){
			return view('pages.sukses-konfirmasi-pembayaran');	
		}
		public function sukses_reseller($id_reseller){
			$check = Agen::where('id','=',$id_reseller)->get();
			if (count($check) > 0) {			
				$dataReseller = DB::table('agen')
								->join('paket','agen.paket_id','=','paket.id')
								->where('agen.id','=',$id_reseller)
								->first();
				return view('pages.sukses-reseller',['reseller'=>$dataReseller]);	
			}else{
				return view('pages.notfound');
			}
		}
		public function konfirmasipembayaran($id_order){
			$check = KonfirmasiPembayaran::where('id','=',$id_order)->get();
			if (count($check) > 0) {
				$datakonfirmasi = DB::table('agen')
								->join('paket','agen.paket_id','=','paket.id')
								->join('konfirmasi_pembayaran','agen.id','=','konfirmasi_pembayaran.agen_id')
								->where('konfirmasi_pembayaran.id','=',$id_order)
								->first();
				return view('pages.konfirmasi-pembayaran', array('page' => 'konfirmasipembayaran', 'datakonfirmasi'=>$datakonfirmasi));	
			}else{
				return view('pages.notfound');
			}
		}
		public function WhatsappAgen($username){
			$dataAgen = Agen::where('username','=',$username)->first();
			return redirect('https://api.whatsapp.com/send?phone='.$dataAgen->handphone.'&text=Assalamualaikum%20'.$dataAgen->nama.'%20Saya%20Mau%20Daftar%20Menjadi%20Reseller%20Zuriya');
		}
		public function reseller($username){
			$reseller = Agen::where([
				['username', '=', $username],
				['status', '!=', 0]])
			->first();
			$barang = Barang::where([
				['id','like','zr%'],
				['nama_barang','like','%m']
				])->get();
			if ($reseller){
				return view('pages.userresellerzuriya', array('page' => 'userresellerzuriya', 'reseller'=>$reseller, 'barang'=>$barang));
			}
		}
		public function username($username){
			$agen= Agen::where([
				['username', '=', $username],
				['status', '=', 1]])
			->first();
			if ($agen){
				return view('pages.useragenzuriya', array('page' => 'useragenzuriya', 'agen'=>$agen));
			}else{
				return view('pages.notfound', array('page' => 'useragenzuriya'));
			}
		}
		public function logout(){
 			Auth::logout();
        	Session::flush();
        	return redirect('login');
		}
	}


 ?>