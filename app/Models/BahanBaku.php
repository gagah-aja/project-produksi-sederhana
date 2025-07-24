<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class BahanBaku extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'stok', 'satuan'];

    /**
     * Relasi: Bahan Baku digunakan oleh banyak menu melalui tabel pivot.
     */
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_bahan_bakus')
                    ->withPivot('jumlah', 'satuan')
                    ->withTimestamps();
    }

    /**
     * Cek apakah stok bahan baku cukup untuk jumlah tertentu.
     */
    public function isStokCukup($jumlah)
    {
        return $this->stok >= $jumlah;
    }
}
