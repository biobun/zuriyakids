<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAgenAndKonfirmasiPembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agen', function (Blueprint $table) {
            $table->string('id');
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('handphone');
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->char('paket_id', 6);
            $table->string('agen_id');
            $table->string('bbm')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status');
            $table->timestamps();
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
        Schema::dropIfExists('agen');
    }
}
