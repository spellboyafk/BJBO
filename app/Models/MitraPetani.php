<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraPetani extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'no_telepon',
        'no_ktp',
        'provinsi',
        'alamat_lahan',
        'luas_lahan',
        'jenis_buah',
        'kapasitas_produksi',
        'nama_bank',
        'no_rekening',
        'atas_nama_rekening',
        'status',
        'catatan_admin',
        'tanggal_bergabung'
    ];

    protected $casts = [
        'tanggal_bergabung' => 'datetime',
    ];

    // Accessor untuk status badge
    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            'pending' => '<span class="badge bg-warning">Pending</span>',
            'approved' => '<span class="badge bg-success">Approved</span>',
            'rejected' => '<span class="badge bg-danger">Rejected</span>',
            default => '<span class="badge bg-secondary">Unknown</span>',
        };
    }
}
