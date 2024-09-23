<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pm__ruangans', function (Blueprint $table) {
            $table->id();
            $table->string('penanggungjawab');
            $table->string('instansi');
            $table->string('jenis_kegiatan');
            $table->bigInteger('id_ruangan')->unsigned();
            $table->foreign('id_ruangan')->references('id')->on('ruangans')->ondelete('cascade');
            $table->string('tanggal_peminjaman');
            $table->string('keterangan');
            $table->string('cover'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pm__ruangans');
    }
};
