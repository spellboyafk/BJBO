<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BuahImpor;

class BuahImporSeeder extends Seeder
{
    public function run(): void
    {
        $buahImpor = [
            [
                'nama' => 'Apel Fuji Import',
                'deskripsi' => 'Apel Fuji import dari Jepang, manis dan renyah',
                'harga' => 45000,
                'satuan' => 'kg',
                'stok' => 50,
                'negara_asal' => 'Jepang',
                'gambar' => null,
                'is_active' => true
            ],
            [
                'nama' => 'Jeruk Mandarin',
                'deskripsi' => 'Jeruk mandarin import dari China, tanpa biji',
                'harga' => 35000,
                'satuan' => 'kg',
                'stok' => 40,
                'negara_asal' => 'China',
                'gambar' => null,
                'is_active' => true
            ],
            [
                'nama' => 'Anggur Red Globe',
                'deskripsi' => 'Anggur merah import dari Amerika, besar dan manis',
                'harga' => 75000,
                'satuan' => 'kg',
                'stok' => 30,
                'negara_asal' => 'Amerika',
                'gambar' => null,
                'is_active' => true
            ],
            [
                'nama' => 'Kiwi Zespri',
                'deskripsi' => 'Kiwi hijau import dari Selandia Baru, kaya vitamin C',
                'harga' => 55000,
                'satuan' => 'kg',
                'stok' => 25,
                'negara_asal' => 'Selandia Baru',
                'gambar' => null,
                'is_active' => true
            ],
            [
                'nama' => 'Stroberi USA',
                'deskripsi' => 'Stroberi segar import dari Amerika, manis dan besar',
                'harga' => 85000,
                'satuan' => 'pack',
                'stok' => 20,
                'negara_asal' => 'Amerika',
                'gambar' => null,
                'is_active' => true
            ],
            [
                'nama' => 'Blueberry',
                'deskripsi' => 'Blueberry fresh import dari Australia',
                'harga' => 95000,
                'satuan' => 'pack',
                'stok' => 15,
                'negara_asal' => 'Australia',
                'gambar' => null,
                'is_active' => true
            ],
        ];

        foreach ($buahImpor as $buah) {
            BuahImpor::create($buah);
        }
    }
}
