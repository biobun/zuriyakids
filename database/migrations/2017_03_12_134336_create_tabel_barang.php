<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
        $table->string('id');
        $table->string('nama_barang');
        $table->decimal('harga_ecer');
        $table->decimal('harga_reseller');
        $table->decimal('harga_agen');
        $table->string('stok');
        $table->primary('id');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
