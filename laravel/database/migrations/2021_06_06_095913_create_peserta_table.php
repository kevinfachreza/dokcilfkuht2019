<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('peserta_1_nama')->nullable();
            $table->string('peserta_1_gender')->nullable();
            $table->string('peserta_1_kelas')->nullable();
            $table->string('peserta_1_telp')->nullable();
            $table->string('peserta_1_telp_wali')->nullable();
            $table->string('peserta_2_nama')->nullable();
            $table->string('peserta_2_gender')->nullable();
            $table->string('peserta_2_kelas')->nullable();
            $table->string('peserta_2_telp')->nullable();
            $table->string('peserta_2_telp_wali')->nullable();
            $table->string('sekolah_nama')->nullable();
            $table->string('sekolah_alamat')->nullable();
            $table->string('sekolah_kota')->nullable();
            $table->string('sekolah_telp')->nullable();
            $table->string('cara_pembayaran')->nullable();
            $table->string('lo_nama')->nullable();
            $table->string('slug')->nullable();
            
            $table->softDeletes();

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
        Schema::dropIfExists('peserta');
    }
}
