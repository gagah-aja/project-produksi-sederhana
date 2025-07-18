<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    /**
     * Ambil nilai pengaturan berdasarkan key.
     * Jika tidak ditemukan, akan mengembalikan nilai default.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function getValue($key, $default = null)
    {
        return static::where('key', $key)->value('value') ?? $default;
    }

    /**
     * Simpan atau perbarui nilai pengaturan berdasarkan key.
     *
     * @param string $key
     * @param mixed $value
     * @return \Illuminate\Database\Eloquent\Model
     */
    public static function setValue($key, $value)
    {
        return static::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }

    /**
     * Ambil semua pengaturan dalam bentuk array key => value.
     *
     * @return array
     */
    public static function allAsKeyValue()
    {
        return static::pluck('value', 'key')->toArray();
    }
}
