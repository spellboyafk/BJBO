@extends('layouts.app')
@section('title', 'Dashboard')

@section('page_header')
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        <div>
            <h4 class="mb-1">Dashboard</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>

        {{-- Filter tanggal (opsional) --}}
        <form method="GET" class="d-flex gap-2">
            <input type="date" name="from" class="form-control" value="{{ request('from') }}">
            <input type="date" name="to" class="form-control" value="{{ request('to') }}">
            <button class="btn btn-primary">Filter</button>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">Reset</a>
        </form>
    </div>
@endsection

@section('content')
    <div class="container-fluid px-0">

        {{-- Alerts penting --}}
        @if(($stokRendah?->count() ?? 0) > 0)
            <div class="alert alert-warning d-flex justify-content-between align-items-center">
                <div>
                    <strong>Perhatian:</strong> Ada {{ $stokRendah->count() }} produk stok rendah.
                </div>
                <a class="btn btn-sm btn-warning" href="#">
                    Lihat Produk
                </a>
            </div>
        @endif

        {{-- KPI Cards (lebih konsisten) --}}
        <div class="row g-3">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted mb-1">Transaksi Hari Ini</p>
                                <h3 class="mb-0">{{ $transaksiHariIni }}</h3>
                            </div>
                            <i class="bx bx-receipt fs-1 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted mb-1">Pendapatan</p>
                                <h3 class="mb-0">Rp {{ number_format($pendapatan) }}</h3>
                            </div>
                            <i class="bx bx-line-chart fs-1 text-success"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted mb-1">Produk Terlaris</p>
                                <h5 class="mb-0">{{ $produkTerlaris }}</h5>
                            </div>
                            <i class="bx bx-crown fs-1 text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted mb-1">Pembeli Baru</p>
                                <h3 class="mb-0">{{ $pembeliBaru }}</h3>
                            </div>
                            <i class="bx bx-user-plus fs-1 text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Chart + Quick Actions --}}
        <div class="row g-3 mt-1">
            <div class="col-12 col-xl-8">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Pendapatan (7 hari terakhir)</h5>
                    </div>
                    <div class="card-body">
                        <div id="revenueChart" style="min-height: 260px;"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="mb-0">Quick Actions</h5>
                    </div>
                    <div class="card-body d-grid gap-2">
                        <a class="btn btn-primary" href="#">
                            <i class="bx bx-plus"></i> Tambah Transaksi
                        </a>
                        <a class="btn btn-outline-primary" href="{{ route('products.index') }}" class="menu-link">
                            <i class="bx bx-package"></i> Tambah Produk
                        </a>
                        <a class="btn btn-outline-secondary" href="#">
                            <i class="bx bx-list-check"></i> Kelola Pesanan
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Ringkasan status pesanan + tabel pesanan terbaru --}}
        <div class="row g-3 mt-1">
            <div class="col-12 col-lg-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="mb-0">Status Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Pending</span><strong>{{ $pending }}</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Dikirim</span><strong>{{ $dikirim }}</strong>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Bermasalah</span><strong>{{ $gagal }}</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Pesanan Terbaru</h5>
                        <a class="btn btn-sm btn-outline-primary" href="#">Lihat semua</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pembeli</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($pesananTerbaru as $p)
                                        <tr>
                                            <td>#{{ $p->id }}</td>

                                            <td>User ID: {{ $p->user_id }}</td>

                                            <td>Rp {{ number_format($p->total) }}</td>

                                            <td>
                                                <span class="badge 
                                                {{ $p->status === 'paid' ? 'bg-success' : 'bg-secondary' }}">
                                                    {{ ucfirst($p->status) }}
                                                </span>
                                            </td>

                                            <td>{{ $p->created_at->format('d M Y H:i') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">
                                                Belum ada pesanan
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script>
        // Contoh ApexCharts (butuh data dari controller)
        const revenueLabels = @json($revenueLabels);
        const revenueSeries = @json($revenueSeries);

        if (document.querySelector("#revenueChart")) {
            const chart = new ApexCharts(document.querySelector("#revenueChart"), {
                chart: { type: 'area', height: 260, toolbar: { show: false } },
                series: [{ name: 'Pendapatan', data: revenueSeries }],
                xaxis: { categories: revenueLabels },
                dataLabels: { enabled: false },
                stroke: { curve: 'smooth' }
            });
            chart.render();
        }
    </script>
@endpush