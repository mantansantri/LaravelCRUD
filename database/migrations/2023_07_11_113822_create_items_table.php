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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('kode_item');
            $table->bigInteger('jenis');
            $table->bigInteger('kategori');
            $table->bigInteger('satuan');
            $table->bigInteger('merk');
            $table->string('nama_item');
            $table->string('keterangan');
            $table->bigInteger('lokasi');
            $table->string('gambar');
            $table->string('harga_jual');
            $table->string('waktu_update');
            $table->string('upah_peracik');
            $table->string('aturan_pakai');
            $table->string('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
