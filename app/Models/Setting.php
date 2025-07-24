<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = ['key', 'value'];

    /**
     * Ambil nilai pengaturan berdasarkan key.
     */
    public static function getValue(string $key, $default = null)
    {
        return static::where('key', $key)->value('value') ?? $default;
    }

    /**
     * Simpan atau perbarui nilai pengaturan berdasarkan key.
     */
    public static function setValue(string $key, $value)
    {
        return static::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }

    /**
     * Ambil semua pengaturan dalam bentuk array key => value.
     */
    public static function allAsKeyValue(): array
    {
        return static::pluck('value', 'key')->toArray();
    }
}
