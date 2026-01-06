<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin BJBO',
            'email' => 'admin@bjbo.com',
            'password' => Hash::make('admin123'),
            'email_verified_at' => now(),
        ]);

        // Customer Test
        User::create([
            'name' => 'Customer Test',
            'email' => 'customer@bjbo.com',
            'password' => Hash::make('customer123'),
            'email_verified_at' => now(),
        ]);

        // User Biasa
        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        $this->command->info('✅ Berhasil menambahkan ' . User::count() . ' user!');
    }
}
