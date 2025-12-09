@extends('layouts.bjbo')
@section('title', 'Mitra Toko') 
{{-- ganti layouts.app sesuai layout utama kamu (misal: layouts.master) --}}

@section('content')

<style>
    .mitra-header {
        background: #FDE68A;
        padding: 60px 0;
        text-align: center;
    }

    .mitra-header h1 {
        font-size: 40px;
        color: #1e40af;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .mitra-header p {
        font-size: 18px;
        color: #444;
    }

    .mitra-container {
        max-width: 1200px;
        margin: 50px auto;
        padding: 0 20px;
    }

    .mitra-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    .mitra-card {
        background: #ffffff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        transition: 0.3s;
    }

    .mitra-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 18px rgba(0,0,0,0.15);
    }

    .mitra-card img {
        width: 100%;
        height: 190px;
        object-fit: cover;
    }

    .mitra-card-body {
        padding: 18px;
    }

    .mitra-card-body h3 {
        font-size: 20px;
        margin-bottom: 8px;
        font-weight: bold;
        color: #1a1a1a;
    }

    .mitra-card-body p {
        margin-bottom: 5px;
        font-size: 14px;
        color: #555;
    }

    .btn-detail {
        margin-top: 12px;
        display: inline-block;
        padding: 10px 20px;
        background: #1e40af;
        color: #fff;
        text-decoration: none;
        border-radius: 8px;
        font-size: 14px;
        transition: 0.3s;
    }

    .btn-detail:hover {
        background: #1e3a8a;
    }
</style>


{{-- HEADER HALAMAN --}}
<div class="mitra-header">
    <h1>Mitra Toko BJBO</h1>
    <p>Daftar mitra toko buah pilihan yang bekerja sama dengan BJBO</p>
</div>

{{-- CONTAINER --}}
<div class="mitra-container">
    <div class="mitra-grid">

        {{-- DATA DUMMY – bisa diganti database nanti --}}
        @php
            $mitras = [
                [
                    "name" => "Toko Buah Segar Jaya",
                    "address" => "Jl. Diponegoro No.12 Bengkalis",
                    "image" => "images/toko1.jpg",
                    "products" => 24
                ],
                [
                    "name" => "Mitra Buah Nusantara",
                    "address" => "Jl. Pasar Bengkalis",
                    "image" => "images/toko2.jpg",
                    "products" => 15
                ],
                [
                    "name" => "Fresh Mart Buah",
                    "address" => "Jl. Kelapa Gading Bengkalis",
                    "image" => "images/toko3.jpg",
                    "products" => 32
                ]
            ];
        @endphp

        @foreach ($mitras as $m)
        <div class="mitra-card">
            <img src="{{ asset($m['image']) }}" alt="Foto Mitra">

            <div class="mitra-card-body">
                <h3>{{ $m['name'] }}</h3>
                <p><strong>Alamat:</strong> {{ $m['address'] }}</p>
                <p><strong>Jumlah Produk:</strong> {{ $m['products'] }} item</p>

                <a href="#" class="btn-detail">Lihat Detail</a>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
