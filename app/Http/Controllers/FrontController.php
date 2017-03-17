<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth, Session;
use App\Agen;

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
		public function konfirmasi_email(){
			return view('pages.email_konf', array('page' => 'email_konf'));	
		}
		public function agenzurya(){
			return view('pages.agenzurya', array('page' => 'agenzurya'));	
		}
		public function konfirmasipembayaran(){
			return view('pages.konfirmasi-pembayaran', array('page' => 'konfirmasipembayaran'));	
		}
		public function username($username){
			$agen= Agen::where([
				['username', '=', $username],
				['status', '=', 1]])
			->first();
			if ($agen){
				return view('pages.agenzurya', array('page' => 'agenzurya'));
			}
		}
		public function logout(){
 			Auth::logout();
        	Session::flush();
        	return redirect('login');
		}
	}


 ?>