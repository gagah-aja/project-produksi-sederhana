<?php

// app/Models/Stok.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = 'stok'; // Tabel 'stok', bukan 'stoks'
    protected $fillable = ['nama_barang', 'jumlah', 'satuan'];
}
