@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

    <div class="container">

        <h1>Selamat Datang, Admin</h1>

        {{-- Snapshot Bisnis --}}
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card p-3">
                    <h5>Transaksi Hari Ini</h5>
                    <h3>{{ $transaksiHariIni }}</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <h5>Pendapatan</h5>
                    <h3>Rp {{ number_format($pendapatan) }}</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <h5>Produk Terlaris</h5>
                    <p>{{ $produkTerlaris }}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <h5>Pembeli Baru</h5>
                    <h3>{{ $pembeliBaru }}</h3>
                </div>
            </div>
        </div>

        {{-- Stok --}}
        <div class="mt-4">
            <h4>Monitoring Stok</h4>
            <ul>
                @foreach($stokRendah as $item)
                    <li>{{ $item->nama }} - Sisa {{ $item->stok }}</li>
                @endforeach
            </ul>
        </div>

        {{-- Pesanan --}}
        <div class="mt-4">
            <h4>Status Pesanan</h4>
            <p>Pending: {{ $pending }}</p>
            <p>Dikirim: {{ $dikirim }}</p>
            <p>Bermasalah: {{ $gagal }}</p>
        </div>

    </div>

@endsection