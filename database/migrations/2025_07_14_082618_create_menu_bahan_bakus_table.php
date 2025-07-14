<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void {
        Schema::create('menu_bahan_bakus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained('menus')->onDelete('cascade');
            $table->foreignId('bahan_baku_id')->constrained('bahan_bakus')->onDelete('cascade');
            $table->float('jumlah'); // contoh: 2.5 (kg, butir, liter)
            $table->string('satuan'); // contoh: kg, butir
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('menu_bahan_bakus');
    }
};
