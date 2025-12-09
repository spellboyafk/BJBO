<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mitra_petanis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('no_telepon', 20);
            $table->string('no_ktp', 16)->unique();
            $table->string('provinsi');
            $table->text('alamat_lahan');
            $table->integer('luas_lahan'); // dalam m²
            $table->string('jenis_buah');
            $table->integer('kapasitas_produksi'); // kg per bulan
            $table->string('nama_bank');
            $table->string('no_rekening', 30);
            $table->string('atas_nama_rekening');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->text('catatan_admin')->nullable();
            $table->timestamp('tanggal_bergabung')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mitra_petanis');
    }
};