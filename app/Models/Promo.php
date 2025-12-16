<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'kode_promo',
        'tipe_diskon',
        'nilai_diskon',
        'min_pembelian',
        'max_diskon',
        'kuota',
        'terpakai',
        'tanggal_mulai',
        'tanggal_selesai',
        'banner',
        'is_active'
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
        'nilai_diskon' => 'decimal:2',
        'min_pembelian' => 'decimal:2',
        'max_diskon' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    // Cek apakah promo masih valid
    public function isValid()
    {
        $today = Carbon::today();
        
        return $this->is_active && 
               $today->between($this->tanggal_mulai, $this->tanggal_selesai) &&
               ($this->kuota === null || $this->terpakai < $this->kuota);
    }

    // Hitung nilai diskon
    public function hitungDiskon($totalBelanja)
    {
        if (!$this->isValid()) {
            return 0;
        }

        if ($totalBelanja < $this->min_pembelian) {
            return 0;
        }

        if ($this->tipe_diskon === 'persentase') {
            $diskon = ($totalBelanja * $this->nilai_diskon) / 100;
            
            // Batasi dengan max_diskon jika ada
            if ($this->max_diskon && $diskon > $this->max_diskon) {
                return $this->max_diskon;
            }
            
            return $diskon;
        }

        // Tipe nominal
        return $this->nilai_diskon;
    }

    // Accessor untuk label diskon
    public function getDiskonLabelAttribute()
    {
        if ($this->tipe_diskon === 'persentase') {
            return number_format($this->nilai_diskon, 0) . '%';
        }
        
        return 'Rp ' . number_format($this->nilai_diskon, 0, ',', '.');
    }

    // Accessor untuk status badge
    public function getStatusBadgeAttribute()
    {
        if (!$this->is_active) {
            return '<span class="badge bg-secondary">Nonaktif</span>';
        }

        $today = Carbon::today();
        
        if ($today->lt($this->tanggal_mulai)) {
            return '<span class="badge bg-info">Akan Datang</span>';
        }
        
        if ($today->gt($this->tanggal_selesai)) {
            return '<span class="badge bg-dark">Berakhir</span>';
        }

        if ($this->kuota && $this->terpakai >= $this->kuota) {
            return '<span class="badge bg-warning">Kuota Habis</span>';
        }

        return '<span class="badge bg-success">Aktif</span>';
    }

    // Scope untuk promo aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true)
                    ->where('tanggal_mulai', '<=', Carbon::today())
                    ->where('tanggal_selesai', '>=', Carbon::today())
                    ->where(function($q) {
                        $q->whereNull('kuota')
                          ->orWhereRaw('terpakai < kuota');
                    });
    }

    // Scope untuk pencarian
    public function scopeSearch($query, $search)
    {
        return $query->where(function($q) use ($search) {
            $q->where('judul', 'like', "%{$search}%")
              ->orWhere('kode_promo', 'like', "%{$search}%")
              ->orWhere('deskripsi', 'like', "%{$search}%");
        });
    }
}
