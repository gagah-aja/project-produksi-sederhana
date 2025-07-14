<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{

    public function menus()
{
    return $this->belongsToMany(Menu::class, 'menu_bahan_bakus')
                ->withPivot('jumlah', 'satuan')
                ->withTimestamps();
}

    use HasFactory;

    protected $fillable = ['nama', 'stok', 'satuan'];
}
