@extends('layouts.app')

@section('title', 'Buah Lokal | BJBO')

@section('content')
<style>
    body {
        background-color: #f5f5f5;
    }

    .container-lokal {
        width: 90%;
        margin: auto;
        padding: 20px;
    }

    .container-lokal h1 {
        text-align: center;
        color: #2e7d32;
    }

    .buah-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 30px;
    }

    .card {
        background-color: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 15px;
    }

    .card-body h3 {
        margin: 0;
        color: #388e3c;
    }

    .card-body p {
        font-size: 14px;
        color: #555;
    }

    .harga {
        font-weight: bold;
        color: #d32f2f;
        margin-top: 10px;
    }

    .btn-keranjang {
        display: block;
        text-align: center;
        margin-top: 15px;
        padding: 10px;
        background-color: #43a047;
        color: white;
        text-decoration: none;
        border-radius: 8px;
    }

    .btn-keranjang:hover {
        background-color: #2e7d32;
    }
</style>

<div class="container-lokal">
    <h1>🍃 Buah Lokal Bengkalis</h1>

    <div class="buah-grid">

        <!-- Durian -->
        <div class="card">
            <img src="https://images.unsplash.com/photo-1604909053194-6d62d9797c13" alt="Durian Bengkalis">
            <div class="card-body">
                <h3>Durian Bengkalis</h3>
                <p>Harum, legit, manis — khas Bengkalis! 🤤</p>
                <div class="harga">Rp 55.000 / buah</div>
                <a href="#" class="btn-keranjang">Tambah ke Keranjang 🛒</a>
            </div>
        </div>

        <!-- Manggis -->
        <div class="card">
            <img src="https://images.unsplash.com/photo-1625225233840-7f8fb3cffa50" alt="Manggis">
            <div class="card-body">
                <h3>Manggis</h3>
                <p>Si ratu buah tropis, juicy banget 💜</p>
                <div class="harga">Rp 25.000 / kg</div>
                <a href="#" class="btn-keranjang">Tambah ke Keranjang 🛒</a>
            </div>
        </div>

        <!-- Rambutan -->
        <div class="card">
            <img src="https://images.unsplash.com/photo-1595435934240-d9223e75b3c9" alt="Rambutan">
            <div class="card-body">
                <h3>Rambutan</h3>
                <p>Segar, manis, cocok buat ngemil 🍓✨</p>
                <div class="harga">Rp 15.000 / kg</div>
                <a href="#" class="btn-keranjang">Tambah ke Keranjang 🛒</a>
            </div>
        </div>

    </div>
</div>
@endsection
