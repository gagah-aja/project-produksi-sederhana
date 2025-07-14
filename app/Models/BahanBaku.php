<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuBahanBaku extends Model
{
   public function menus()
{
    return $this->belongsToMany(Menu::class, 'menu_bahan_bakus')
                ->withPivot('jumlah', 'satuan')
                ->withTimestamps();
}

}
