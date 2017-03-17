<?php 
namespace App\Http\Controllers;
use Auth, Validator, Redirect, Hash, Session;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Barang;
use App\Agen;
use App\KonfirmasiPembayaran;
use App\Role;
use App\Permission;
use App\User;
use App\Reseller;
use DB;
	/**
	* 
	*/
	class DashboardController extends Controller
	{
		public function __construct()
	    {
	        $this->middleware('auth');
	    }
		public function profile(){
			return view('pages.profile', array('page' => 'profile'));
		}
		public function stokbarang(){
			$barang = Barang::all();
			return view('pages.stok-barang')->with('barang', $barang);
		}
		public function konfirmasipembayaran(){
			$konfirmasi_pembayaran = KonfirmasiPembayaran::all();
			return view('pages.konfirmasi-agen')->with('konfirmasi_pembayaran_agen', $konfirmasi_pembayaran);
		}
		public function agen(){
			$agen = Agen::all();
			return view('pages.d-agen')->with('agen',$agen);
		}
		public function reseller(){
			$reseller = Reseller::all();
			return view('pages.reseller')->with('reseller',$reseller);
		}
		public function transaksi(){
			// $reseller = Reseller::all();
			return view('pages.transaksi');
		}
	}
?>