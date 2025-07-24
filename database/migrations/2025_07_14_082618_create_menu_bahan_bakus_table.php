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
        Schema::create('menu_bahan_bakus', function (Blueprint $table) {
            $table->id();
            
            // Relasi ke tabel menus
            $table->foreignId('menu_id')
                  ->constrained('menus')
                  ->onDelete('cascade');
            
            // Relasi ke tabel bahan_bakus
            $table->foreignId('bahan_baku_id')
                  ->constrained('bahan_bakus')
                  ->onDelete('cascade');
            
            // Jumlah bahan baku yang dibutuhkan per satuan menu
            $table->float('jumlah');
            
            // Satuan bahan baku (opsional, jika tidak konsisten antar menu)
            $table->string('satuan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_bahan_bakus');
    }
};
