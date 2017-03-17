<?php 
namespace App;
use Eloquent;

class Agen extends Eloquent{
	protected $table = 'agen';
	// protected $primaryKey = 'id_agen';
	public $incrementing = false;

	public function resellers()
	{
		return $this->hasMany('App\Reseller', 'agen_id');
	}

	public function getFirstResellerAttribute()
	{
		return $this->resellers()->first();
	}
	public function konfirmasipembayaran(){
		return $this->hasOne('App\KonfirmasiPembayaran', 'agen_id');
	}
	public function paket(){
		return $this->belongsTo('App\Paket','paket_id');
	}

}
	
?>