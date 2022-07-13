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
        Schema::create('kepsek', function (Blueprint $table) {
            $table->increments('kepsek_id'); 
            $table->string('nip_kepsek', 50); 
            $table->string('nama_kepsek', 100); 
            $table->string('alamat_kepsek', 100); 
            $table->string('no_hp_kepsek'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kepsek');
    }
};
