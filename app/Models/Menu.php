<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BahanBaku;
use App\Models\ProsesProduksi;

class Menu extends Model
{
    protected $fillable = ['nama'];

    /**
     * Relasi: Menu memiliki banyak bahan baku melalui tabel pivot.
     */
    public function bahanBaku()
    {
        return $this->belongsToMany(BahanBaku::class, 'menu_bahan_bakus')
                    ->withPivot('jumlah', 'satuan')
                    ->withTimestamps();
    }

    /**
     * Relasi: Menu digunakan dalam banyak proses produksi.
     */
    public function prosesProduksi()
    {
        return $this->hasMany(ProsesProduksi::class, 'menu_id');
    }
}
