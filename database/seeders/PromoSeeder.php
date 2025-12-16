<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Promo;
use Carbon\Carbon;

class PromoSeeder extends Seeder
{
    public function run(): void
    {
        $promos = [
            [
                'judul' => 'Diskon Akhir Tahun 50%',
                'deskripsi' => 'Diskon besar-besaran akhir tahun! Belanja buah segar hemat hingga 50%',
                'kode_promo' => 'AKHIRTAHUN50',
                'tipe_diskon' => 'persentase',
                'nilai_diskon' => 50,
                'min_pembelian' => 100000,
                'max_diskon' => 50000,
                'kuota' => 100,
                'terpakai' => 15,
                'tanggal_mulai' => Carbon::now()->subDays(5),
                'tanggal_selesai' => Carbon::now()->addDays(25),
                'banner' => null,
                'is_active' => true
            ],
            [
                'judul' => 'Gratis Ongkir Min 200K',
                'deskripsi' => 'Free ongkir untuk pembelian minimal Rp 200.000',
                'kode_promo' => 'FREEONGKIR200',
                'tipe_diskon' => 'nominal',
                'nilai_diskon' => 25000,
                'min_pembelian' => 200000,
                'max_diskon' => null,
                'kuota' => 50,
                'terpakai' => 8,
                'tanggal_mulai' => Carbon::now()->subDays(10),
                'tanggal_selesai' => Carbon::now()->addDays(20),
                'banner' => null,
                'is_active' => true
            ],
            [
                'judul' => 'Flash Sale 30%',
                'deskripsi' => 'Flash sale spesial! Diskon 30% untuk semua buah impor',
                'kode_promo' => 'FLASHSALE30',
                'tipe_diskon' => 'persentase',
                'nilai_diskon' => 30,
                'min_pembelian' => 50000,
                'max_diskon' => 30000,
                'kuota' => 200,
                'terpakai' => 45,
                'tanggal_mulai' => Carbon::now()->subDays(2),
                'tanggal_selesai' => Carbon::now()->addDays(3),
                'banner' => null,
                'is_active' => true
            ],
            [
                'judul' => 'Member Baru Rp 20.000',
                'deskripsi' => 'Diskon Rp 20.000 untuk member baru tanpa minimal pembelian',
                'kode_promo' => 'NEWMEMBER20',
                'tipe_diskon' => 'nominal',
                'nilai_diskon' => 20000,
                'min_pembelian' => 0,
                'max_diskon' => null,
                'kuota' => 500,
                'terpakai' => 123,
                'tanggal_mulai' => Carbon::now()->subDays(30),
                'tanggal_selesai' => Carbon::now()->addDays(60),
                'banner' => null,
                'is_active' => true
            ],
            [
                'judul' => 'Weekend Sale 25%',
                'deskripsi' => 'Promo weekend! Diskon 25% untuk pembelian buah lokal',
                'kode_promo' => 'WEEKEND25',
                'tipe_diskon' => 'persentase',
                'nilai_diskon' => 25,
                'min_pembelian' => 75000,
                'max_diskon' => 40000,
                'kuota' => 150,
                'terpakai' => 67,
                'tanggal_mulai' => Carbon::now()->subDays(1),
                'tanggal_selesai' => Carbon::now()->addDays(7),
                'banner' => null,
                'is_active' => true
            ],
            [
                'judul' => 'Harbolnas Rp 50.000',
                'deskripsi' => 'Hari Belanja Online Nasional! Potongan langsung Rp 50.000',
                'kode_promo' => 'HARBOLNAS50',
                'tipe_diskon' => 'nominal',
                'nilai_diskon' => 50000,
                'min_pembelian' => 250000,
                'max_diskon' => null,
                'kuota' => 100,
                'terpakai' => 34,
                'tanggal_mulai' => Carbon::now()->subDays(7),
                'tanggal_selesai' => Carbon::now()->addDays(14),
                'banner' => null,
                'is_active' => true
            ],
            [
                'judul' => 'Promo Ramadan 40%',
                'deskripsi' => 'Berkah Ramadan! Diskon 40% untuk paket buah',
                'kode_promo' => 'RAMADAN40',
                'tipe_diskon' => 'persentase',
                'nilai_diskon' => 40,
                'min_pembelian' => 150000,
                'max_diskon' => 60000,
                'kuota' => 300,
                'terpakai' => 89,
                'tanggal_mulai' => Carbon::now()->addDays(30),
                'tanggal_selesai' => Carbon::now()->addDays(60),
                'banner' => null,
                'is_active' => true
            ],
            [
                'judul' => 'Cashback 15%',
                'deskripsi' => 'Dapatkan cashback 15% untuk pembelian pertama',
                'kode_promo' => 'CASHBACK15',
                'tipe_diskon' => 'persentase',
                'nilai_diskon' => 15,
                'min_pembelian' => 100000,
                'max_diskon' => 25000,
                'kuota' => 250,
                'terpakai' => 156,
                'tanggal_mulai' => Carbon::now()->subDays(15),
                'tanggal_selesai' => Carbon::now()->addDays(15),
                'banner' => null,
                'is_active' => true
            ],
            [
                'judul' => 'Promo Tengah Bulan',
                'deskripsi' => 'Promo spesial tengah bulan! Hemat hingga Rp 30.000',
                'kode_promo' => 'TENGAHBULAN30',
                'tipe_diskon' => 'nominal',
                'nilai_diskon' => 30000,
                'min_pembelian' => 180000,
                'max_diskon' => null,
                'kuota' => 80,
                'terpakai' => 23,
                'tanggal_mulai' => Carbon::now()->subDays(3),
                'tanggal_selesai' => Carbon::now()->addDays(10),
                'banner' => null,
                'is_active' => true
            ],
            [
                'judul' => 'Promo Expired (Test)',
                'deskripsi' => 'Promo yang sudah berakhir untuk testing',
                'kode_promo' => 'EXPIRED10',
                'tipe_diskon' => 'persentase',
                'nilai_diskon' => 10,
                'min_pembelian' => 50000,
                'max_diskon' => 15000,
                'kuota' => 50,
                'terpakai' => 50,
                'tanggal_mulai' => Carbon::now()->subDays(30),
                'tanggal_selesai' => Carbon::now()->subDays(5),
                'banner' => null,
                'is_active' => false
            ],
        ];

        foreach ($promos as $promo) {
            Promo::create($promo);
        }

        $this->command->info('✅ Berhasil menambahkan ' . count($promos) . ' data promo!');
    }
}
