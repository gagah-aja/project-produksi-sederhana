<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
    protected $fillable = ['nama'];

   public function bahanBaku()
{
    return $this->belongsToMany(BahanBaku::class, 'menu_bahan_bakus')
                ->withPivot('jumlah', 'satuan')
                ->withTimestamps();
}



    public function produksis() {
        return $this->hasMany(Produksi::class);
    }
}

