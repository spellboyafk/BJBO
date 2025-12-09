<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuahLokal extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'harga_diskon',
        'diskon_persen',
        'gambar',
        'stok',
        'is_active'
    ];

    protected $casts = [
        'harga' => 'decimal:2',
        'harga_diskon' => 'decimal:2',
        'is_active' => 'boolean',
    ];
}