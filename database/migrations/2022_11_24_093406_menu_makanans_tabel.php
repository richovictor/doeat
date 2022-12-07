<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_makanans', function (Blueprint $table) {
            $table->string('kategori_makanan');
            $table->string('nama_makanan')->unique();
            $table->string('harga');
            $table->text('deskripsi_makanan'); 
            $table->string('foto_produk');
            $table->id();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
