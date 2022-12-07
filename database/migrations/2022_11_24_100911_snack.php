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
        Schema::create('snack', function (Blueprint $table) {
            $table->string('kategori_snack');
            $table->string('nama_snack')->unique();
            $table->string('harga');
            $table->text('deskripsi_snack'); 
            // untuk gambar nanti
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
