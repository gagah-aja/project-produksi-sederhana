<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['nama', 'makanan', 'jumlah', 'tanggal'];

}
