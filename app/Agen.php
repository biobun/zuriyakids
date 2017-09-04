<?php 
namespace zuriyakids;
use Eloquent;

class Agen extends Eloquent{
	protected $table = 'agen';
	public $incrementing = false;

	public function resellers()
	{
		return $this->hasMany('zuriyakids\Reseller', 'agen_id');
	}

	public function getFirstResellerAttribute()
	{
		return $this->resellers()->first();
	}
	public function konfirmasipembayaran(){
		return $this->hasOne('zuriyakids\KonfirmasiPembayaran', 'agen_id');
	}
	public function paket(){
		return $this->belongsTo('zuriyakids\Paket');
	}
	public function user(){
		return $this->hasOne('zuriyakids\User','email','email');
	}
	public function transaksi(){
		return $this->hasMany('zuriyakids\transaksi', 'agen_id');
	}
}
	
?>