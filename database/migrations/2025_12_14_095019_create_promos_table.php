<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('kode_promo')->unique();
            $table->enum('tipe_diskon', ['persentase', 'nominal']); // % atau Rp
            $table->decimal('nilai_diskon', 10, 2); // 10, 20, 50000, dll
            $table->decimal('min_pembelian', 10, 2)->default(0); // Minimal pembelian
            $table->decimal('max_diskon', 10, 2)->nullable(); // Maksimal potongan (untuk %)
            $table->integer('kuota')->nullable(); // Jumlah pengguna yang bisa pakai
            $table->integer('terpakai')->default(0); // Sudah dipakai berapa kali
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('banner')->nullable(); // Gambar banner promo
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
