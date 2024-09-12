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
        Schema::create('pm_ruangans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('penanggungjawab');
            $table->string('instansi');
            $table->string('jenis_kegiatan');
            $table->bigInteger('id_ruangan')->unsigned();
            $table->date('tanggal_peminjaman');
            $table->string('documentasi');
            $table->string('keterangan');

            $table->foreign('id_ruangan')->references('id')->on('ruangans')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pm_ruangans');
    }
};
