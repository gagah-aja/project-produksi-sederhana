<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProsesProduksi extends Model
{
    use HasFactory;

    protected $table = 'proses_produksi';

    protected $fillable = [
        'menu_id',
        'jumlah_produksi',
        'tanggal',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function detail()
    {
        return $this->hasMany(DetailProduksi::class);
    }
}
