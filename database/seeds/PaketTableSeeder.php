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
        	['id'=>"AG".str_random(4), 'nama_paket'=>'Paket Agen 1', 'harga'=> 5000000, 'Keterangan'=>"lorem ipsum dor amet"],
        	['id'=>"AG".str_random(4), 'nama_paket'=>'Paket Agen 2', 'harga'=> 4000000, 'Keterangan'=>"lorem ipsum dor amet"],
        	['id'=>"AG".str_random(4), 'nama_paket'=>'Paket Agen 3', 'harga'=> 3000000, 'Keterangan'=>"lorem ipsum dor amet"],
        	['id'=>"RS".str_random(4), 'nama_paket'=>'Paket Reseller 1', 'harga'=>1000000, 'Keterangan'=>"lorem ipsum dor amet"],
        	['id'=>"RS".str_random(4), 'nama_paket'=>'Paket Reseller 2', 'harga'=>500000, 'Keterangan'=>"lorem ipsum dor amet"],
        	['id'=>"RS".str_random(4), 'nama_paket'=>'Paket Reseller 3', 'harga'=>300000, 'Keterangan'=>"lorem ipsum dor amet"],
        	]);
    }
}
