<?php
namespace zuriyakids\Http\Controllers;
use Auth, Validator, Redirect, Hash, Session, File, DB;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image as Image;
use zuriyakids\KonfirmasiPembayaran;
use zuriyakids\Agen;
use zuriyakids\User;
use zuriyakids\Role;
use Mail;
	/**
	*
	*/
	class KonfPembayaranController extends Controller
	{
		public function insert(){
			if (KonfirmasiPembayaran::where('id', '=', Input::get('id_order'))->exists()){
				$rules = array(
				'jumlah' => 'required',
				'no_rekening' => 'required',
				'nama_rekening' => 'required',
				);
				$validation = Validator::make(Input::all(), $rules);
				if ($validation->fails()) {
					return Redirect::back()->with('error','Semua data harus diisi'); 
				}
				$file = array('image' => Input::file('image'));
				$rules = array('image' => 'required|image|mimes:jpeg,jpg,png,gif,|max:3000');
				$Validator = Validator::make($file, $rules);
				if ($Validator->fails()) {
					return Redirect::back()->with('error','File gambar tidak sesuai');
				}
				else{
					$image = Input::file('image');
					if (Input::file('image')->isValid()) {
						$destinationPath = 'uploads';
						$fileName = $image -> getClientOriginalName();
						$fullname = rand(11111,99999).'.'.$fileName.'.'.$image->getClientOriginalExtension();
						$green = $image->move($destinationPath, $fullname);
						Image::make($green) -> resize('110','170')->save('uploads/thumbs/'.$fullname);
						DB::table('konfirmasi_pembayaran')
						->where('id',Input::get('id_order'))
						->update([
							'no_rekening' => Input::get('no_rekening'),
							'jumlah' => Input::get('jumlah'),
							'nama_rekening' => Input::get('nama_rekening'),
							'bukti_transfer' => $fullname,
							]);
							return redirect()->to('konfirmasi-pembayaran-sukses');
					}
					else{
						return Redirect::back()->with('error','Upload File is not Valid');
					}
				}
			}
			else{
				return Redirect::back()->with('error','Nomor Order tidak tersedia');
			}
		}
		public function aktivasiagen($id_order){
			$status = DB::table('agen')
				->join('konfirmasi_pembayaran','agen.id','=','konfirmasi_pembayaran.agen_id')
				->where('konfirmasi_pembayaran.id','=',$id_order)
				->update(['status'=>1]);
			if ($status) {
				$konfirmasi = KonfirmasiPembayaran::find($id_order);
				$aktivasiUser =  $konfirmasi['agen_id'];

				$agen = agen::find($aktivasiUser)->toArray();
				$role = Role::where('name','=','Agen')->first();
				$aktivasi = new User;
				$aktivasi->email = $agen['email'];
				$aktivasi->username = $agen['username'];
				$aktivasi->password = $agen['password'];
				$aktivasi->save();
				$aktivasi->attachRole($role);
				$aktivasi->save();
				$agenSend = Agen::find($aktivasiUser)->toArray();
				Mail::send('emails.activations', $agenSend, function($message) use($agen){
	                $message->to($agen['email']);
	                $message->subject('Zuryakids - Konfirmasi Aktivasi Telah Berhasil');
            	});
				return Redirect::to('dashboard/konfirmasiagen')->with('success','Aktivasi Berhasil');
			}
				return Redirect::to('dashboard/konfirmasiagen')->with('error','Aktivasi Gagal');
		}
		public function delete($id_order){
			$KonfPembayaran = KonfirmasiPembayaran::find($id_order);
			if ($KonfPembayaran) {
				File::delete('uploads'.'/'.$KonfPembayaran->bukti_transfer);
				File::delete('uploads/thumbs'.'/'.$KonfPembayaran->bukti_transfer);
				$KonfPembayaran->delete();
				return Redirect::to('dashboard/konfirmasiagen')->withInput();
			}
		}
		public function aktivasireseller($id_reseller){
			$status = DB::table('agen')
				->where('agen.id','=',$id_reseller)
				->update(['status'=>2]);
			if ($status) {
				$role = Role::where('name','=','Reseller')->first();
				$reseller = agen::where('id','=',$id_reseller)->first();

				$aktivasiReseller = new User;
				$aktivasiReseller->email = $reseller['email'];
				$aktivasiReseller->username = $reseller['username'];
				$aktivasiReseller->password = $reseller['password'];
				$aktivasiReseller->save();
				$aktivasiReseller->attachRole($role);
				$aktivasiReseller->save();
			}
			return Redirect::to('dashboard/konfirmasireseller');
		}
	}
?>