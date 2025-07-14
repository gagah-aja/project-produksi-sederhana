<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'proses_produksi_id',
        'bahan_baku_id',
        'jumlah_digunakan',
    ];

    public function prosesProduksi()
    {
        return $this->belongsTo(ProsesProduksi::class);
    }

    public function bahanBaku()
    {
        return $this->belongsTo(BahanBaku::class);
    }
}
