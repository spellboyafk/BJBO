<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // ← Tambahkan baris ini
use Carbon\Carbon;  // Optional, untuk tanggal

class BuahLokalSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('buah_lokals')->insert([
            [
                'nama' => 'Jeruk Pontianak',
                'deskripsi' => 'Jeruk manis dari Pontianak, Kalimantan Barat',
                'harga' => 25000,
                'harga_diskon' => 20000,
                'diskon_persen' => 20,
                'stok' => 100,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Mangga Gedong Gincu',
                'deskripsi' => 'Mangga manis khas Majalengka',
                'harga' => 35000,
                'harga_diskon' => null,
                'diskon_persen' => 0,
                'stok' => 50,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Salak Pondoh',
                'deskripsi' => 'Salak manis dari Yogyakarta',
                'harga' => 30000,
                'harga_diskon' => 25000,
                'diskon_persen' => 17,
                'stok' => 75,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
