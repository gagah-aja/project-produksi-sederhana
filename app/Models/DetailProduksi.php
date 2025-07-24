<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProsesProduksi;
use App\Models\BahanBaku;

class DetailProduksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'proses_produksi_id',
        'bahan_baku_id',
        'jumlah_digunakan',
    ];

    /**
     * Relasi: Detail produksi milik satu proses produksi.
     */
    public function prosesProduksi()
    {
        return $this->belongsTo(ProsesProduksi::class);
    }

    /**
     * Relasi: Detail produksi berisi satu bahan baku yang digunakan.
     */
    public function bahanBaku()
    {
        return $this->belongsTo(BahanBaku::class);
    }
}
