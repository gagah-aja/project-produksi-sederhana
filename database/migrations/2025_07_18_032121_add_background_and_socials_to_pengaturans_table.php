<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tambahkan kolom baru ke tabel pengaturans.
     */
    public function up(): void
    {
        Schema::table('pengaturans', function (Blueprint $table) {
            $table->string('background')->nullable()->after('logo');
            $table->string('instagram')->nullable()->after('alamat');
            $table->string('facebook')->nullable()->after('instagram');
            $table->string('twitter')->nullable()->after('facebook');
        });
    }

    /**
     * Hapus kolom jika migrasi di-rollback.
     */
    public function down(): void
    {
        Schema::table('pengaturans', function (Blueprint $table) {
            $table->dropColumn(['background', 'instagram', 'facebook', 'twitter']);
        });
    }
};
