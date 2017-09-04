<?php

use Illuminate\Database\Seeder;

class PaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert([
        	['id'=>"AG001", 'nama_paket'=>'Paket Al-Aqsa', 'harga'=> 2799000, 'Keterangan'=>"Paket Agen 1//Al-Aqsa"],
        	['id'=>"AG002", 'nama_paket'=>'Paket An-Nabawi', 'harga'=> 5550000, 'Keterangan'=>"Paket Agen 2//An-Nabawi"],
        	['id'=>"AG003", 'nama_paket'=>'Paket Al-Haram', 'harga'=> 7950000, 'Keterangan'=>"Paket Agen 3//Al-Haram"],
        	['id'=>"RS001", 'nama_paket'=>'Paket Alif', 'harga'=>259000, 'Keterangan'=>"Paket Reseller 1//Alif"],
        	['id'=>"RS002", 'nama_paket'=>'Paket Lam', 'harga'=>554000, 'Keterangan'=>"Paket Reseller 2//Lam"],
        	['id'=>"RS003", 'nama_paket'=>'Paket Mim', 'harga'=>765000, 'Keterangan'=>"Paket Reseller 3//Mim"],
        	]);
    }
}
