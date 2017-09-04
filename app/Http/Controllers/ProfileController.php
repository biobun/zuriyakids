<?php 
namespace zuriyakids\Http\Controllers;
use Validator, Redirect, Hash;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use File;
use zuriyakids\Agen;
use zuriyakids\User;
use zuriyakids\Paket;
use zuriyakids\Reseller;
use zuriyakids\KonfirmasiPembayaran;
use Mail;
use DB;
	/**
	* 
	*/
	class ProfileController extends Controller
	{
		public function update(Request $request){
			$id_agen = Input::get('id_agen');
			$agen = Agen::find($id_agen);
			$user = User::where('email','like',$agen->email)->first();
			$inputImage = $request->input('profile');
			$rules = array(
					'username' => 'required|unique:agen,username,'.$id_agen,
					'handphone' => 'required',
					'nama' => 'required',
					'email'=> 'required|email|unique:agen,email,'.$id_agen,
			);
			$Validator = Validator::make(Input::all(), $rules);					
			if ($Validator->fails()) {
				return Redirect::back()->withInput()->withErrors($Validator);
			}
			if ($inputImage) {
				$file = array('image' => Input::file('image'));
				$rulesImage = array('image' => 'image|mimes:jpeg,jpg,png,gif|max:3000');
				$ValidatorImage = Validator::make($file,$rulesImage);
				if($ValidatorImage->fails()){
					return Redirect::back()->withInput()->withErrors($ValidatorImage);
				}else{
					if ($agen->image!=="avatar.png") {
						$deleteFile = 'images/profile/'.$agen->image; 
						File::delete($deleteFile);
					}
					$image = Input::file('image');
					$fileName = $image -> getClientOriginalName();
					$fullname = rand(11111,99999).'.'.$fileName.'.'.$image->getClientOriginalExtension();
					$path = public_path('images/profile/' . $fullname);
					$image = Image::make($image)->fit(200)->save($path);
					// $green = $image->move($destinationPath, $fullname);	
				}
			}else{
				$fullname = $agen->image;
			}
			if ($agen) {
				$agen->id = Input::get('id_agen');
				$agen->username = Input::get('username');
				$agen->email = Input::get('email');
				$agen->nama = Input::get('nama');
				$agen->handphone = Input::get('handphone');
				$agen->alamat = Input::get('alamat');
				$agen->kota = Input::get('kota');
				$agen->bbm = Input::get('bbm');
				$agen->image = $fullname;
				$user->username = Input::get('username');
				$user->email = Input::get('email');
				$agen->save();
				$user->save();
				return redirect::to('dashboard/profile')->withInput();
			}else{
				echo "salah";
			}
		}
	}
 ?>