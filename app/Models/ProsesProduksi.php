<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;
use App\Models\DetailProduksi;

class ProsesProduksi extends Model
{
    use HasFactory;

    protected $table = 'proses_produksi';

    protected $fillable = [
        'menu_id',
        'jumlah_produksi',
        'tanggal',
    ];

    /**
     * Relasi: Proses produksi milik satu menu.
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    /**
     * Relasi: Proses produksi memiliki banyak detail produksi.
     */
    public function detail()
    {
        return $this->hasMany(DetailProduksi::class);
    }
}
