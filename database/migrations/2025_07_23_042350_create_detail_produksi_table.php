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
        Schema::create('detail_produksi', function (Blueprint $table) {
            $table->id();
            Schema::create('produksi_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produksi_id')->constrained();
            $table->foreignId('bahan_baku_id')->constrained();
            $table->integer('jumlah_dipakai');
            $table->timestamps();

            // Relasi ke tabel proses_produksi
            $table->foreignId('proses_produksi_id')
                  ->constrained('proses_produksi')
                  ->onDelete('cascade');

            // Relasi ke tabel bahan_bakus
            $table->foreignId('bahan_baku_id')
                  ->constrained('bahan_bakus')
                  ->onDelete('cascade');

            // Jumlah bahan baku yang digunakan
            $table->float('jumlah_terpakai');

            // Satuan bahan baku
            $table->string('satuan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_produksi');
    }
};
