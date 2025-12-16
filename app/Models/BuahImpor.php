<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // ✅ Harus ada Eloquent

class BuahImpor extends Model
{
    use HasFactory;

    protected $table = 'buah_impor';

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'satuan',
        'stok',
        'negara_asal',
        'gambar',
        'is_active'
    ];

    protected $casts = [
        'harga' => 'decimal:2',
        'is_active' => 'boolean',
    ];
}
