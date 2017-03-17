<?php 
namespace App;
use Eloquent;

class KonfirmasiPembayaran extends Eloquent{
	protected $table = 'konfirmasi_pembayaran';
	public $incrementing = false;

	public function agen(){
		return $this->belongsTo('App\Agen','id');
	}
}
	
?>