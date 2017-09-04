<?php 
namespace zuriyakids\Http\Controllers;
use Auth, Validator, Redirect, Hash, Session;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use zuriyakids\Barang;
use zuriyakids\Agen;
use zuriyakids\KonfirmasiPembayaran;
use zuriyakids\Role;
use zuriyakids\Permission;
use zuriyakids\User;
use zuriyakids\Reseller;
use zuriyakids\Transaksi;
use zuriyakids\TransaksiDetail;
use DB;
use Response;
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
			$konfirmasi_pembayaran = DB::table('agen')
									->join('konfirmasi_pembayaran','agen.id','=','konfirmasi_pembayaran.agen_id')
									->orderBy('status','asc')
									->get();
			return view('pages.konfirmasi-agen')->with('konfirmasi_pembayaran_agen', $konfirmasi_pembayaran);
		}
		public function konfirmasireseller(){
			$user = Auth::user()->Agen->id;
			$konfirmasireseller = DB::table('agen')->where('agen_id','=',$user)->orderBy('status','asc')->get();
			return view('pages.konfirmasi-reseller')->with('konfirmasi_reseller', $konfirmasireseller);
		}
		public function agen(){
			$agen = DB::table('agen')->where('id','LIKE','AG%')->where('status','=',1)->orderBy('status','desc')->get();
			return view('pages.d-agen')->with('agen',$agen);
		}
		public function reseller(){
			$reseller = Agen::where('id','like','RS%')->orderBy('status','desc')->get();
			return view('pages.reseller')->with('reseller',$reseller);
		}
		public function editcustomer($id_customer){
			$customer = Agen::where('id','=',$id_customer)->first();
			return view('pages.edit-customer')->with('customer',$customer);
		}
		public function transaksi(){
			$barang = barang::all();
			return view('pages.transaksi')->with('barang',$barang);
		}
		public function autocomplete(){
			$term = Input::get('term');
			$results = array();
			$queries = DB::table('barang')
					->where('id','LIKE','%'.$term.'%')
					->get();
			foreach ($queries as $query) {
				$results[] = ['id'=>$query->id,'value'=>$query->id];
			}
			return Response::json($results);	
		}
		public function getInfo($id)
			{
			  $fill = DB::table('barang')->where('id', $id)->pluck('harga');

			  return Response::json(['success'=>true, 'info'=>$fill]);
			}
		public function autoharga(){
			$term = Input::get('pesanan');
			return Response::json($term);
		}
		public function pesanan(){
			$user = Auth::user()->Agen->id;
			$transaksi = transaksi::where('agen_id','=',$user)->orderBy('status','desc')->get();
			$transaksiDetail = DB::table('transaksi')
						->join('transaksi-detail', 'transaksi.id','=','transaksi-detail.transaksi_id')
						->where('transaksi.agen_id','=',$user)
						->get();
			return view('pages.pesanan', array(
				'transaksi'=> $transaksi,
				'transaksiDetail'=> $transaksiDetail
			));
		}
		public function rank(){
			// Select agen.id, agen.nama, sum(transaksi.total) FROM agen, transaksi Where agen.id = transaksi.agen_id GROUP By agen.id, agen.nama
			$agenTerbaik = DB::table('agen')
						->join('transaksi','transaksi.agen_id','=','agen.id')
						->select('agen.id','agen.nama', DB::raw('sum(transaksi.total) as transaksitotal'))
						->where('transaksi.status','=', 4)
						->groupBy('agen.id','agen.nama')
						->orderBy('transaksitotal','desc')
						->get();
			return view('pages.ranking',array('agenTerbaik'=>$agenTerbaik));
		}
	}
?>