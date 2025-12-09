<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buah Lokal - FreshFruit</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-color: #28a745;
            --secondary-color: #218838;
            --accent-color: #0d6efd;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        /* Header Styling */
        header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo-text {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.5rem;
        }

        .search-bar {
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .search-bar:focus-within {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(40, 167, 69, 0.15);
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        /* Hero Banner - GRADIENT KUNING SEPERTI HOMEPAGE */
        .hero-banner {
            background: linear-gradient(135deg, #FFF4E6 0%, #FFE5B4 100%);
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }

        .hero-banner::before {
            content: '';
            position: absolute;
            top: -10%;
            right: -5%;
            width: 600px;
            height: 600px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
        }

        .hero-banner h1 {
            color: #000;
            text-shadow: none;
            font-weight: 700;
        }

        .hero-banner .highlight {
            color: var(--accent-color);
        }

        .hero-banner p {
            color: #666;
        }

        /* Filter Section */
        .filter-section {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .filter-section .form-label {
            color: #495057;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(40, 167, 69, 0.15);
        }

        /* Badge Styling */
        .filter-badge {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        /* Product Card */
        .product-item {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
        }

        .product-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15) !important;
        }

        .product-item img {
            transition: transform 0.5s ease;
        }

        .product-item:hover img {
            transform: scale(1.1);
        }

        .product-badge {
            font-size: 0.75rem;
            padding: 0.4rem 0.8rem;
            border-radius: 50px;
            font-weight: 600;
            backdrop-filter: blur(10px);
        }

        .price-original {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 0.875rem;
        }

        .price-discount {
            color: var(--primary-color);
            font-size: 1.5rem;
            font-weight: 700;
        }

        .savings {
            background: #d4edda;
            color: #155724;
            padding: 0.25rem 0.5rem;
            border-radius: 5px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* Buttons */
        .btn-primary {
            background: var(--accent-color);
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #0b5ed7;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
        }

        .btn-outline-primary {
            border: 2px solid var(--accent-color);
            color: var(--accent-color);
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
            transform: translateY(-2px);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #212529 0%, #343a40 100%);
            margin-top: 4rem;
        }

        footer h5 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        footer a {
            transition: all 0.3s ease;
            display: inline-block;
        }

        footer a:hover {
            color: var(--primary-color) !important;
            transform: translateX(5px);
        }

        /* Empty State */
        .empty-state {
            padding: 4rem 2rem;
            text-align: center;
        }

        .empty-state i {
            font-size: 5rem;
            color: #6c757d;
            opacity: 0.5;
        }

        /* Pagination */
        .pagination {
            gap: 0.5rem;
        }

        .page-link {
            border-radius: 10px;
            border: none;
            color: var(--primary-color);
            font-weight: 600;
            padding: 0.6rem 1rem;
        }

        .page-link:hover {
            background: var(--primary-color);
            color: white;
        }

        .page-item.active .page-link {
            background: var(--primary-color);
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-banner {
                padding: 3rem 0;
            }
            
            .filter-section {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <div class="container-fluid px-4">
        <div class="row py-3 align-items-center">
            <!-- Logo -->
            <div class="col-md-3">
                <a href="{{ url('/') }}" class="text-decoration-none">
                    <span class="logo-text">
                        <i class="bi bi-basket2-fill"></i> FreshFruit
                    </span>
                </a>
            </div>

            <!-- Search Bar -->
            <div class="col-md-5">
                <form action="{{ route('buah.lokal') }}" method="get">
                    <div class="input-group search-bar rounded-pill overflow-hidden">
                        <input type="text" name="search" class="form-control border-0" 
                               placeholder="Cari buah lokal favorit Anda..." 
                               value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Navigation -->
            <div class="col-md-4">
                <ul class="nav justify-content-end gap-3 mb-0">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-dark">
                            <i class="bi bi-house-door"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('buah.lokal') }}" class="nav-link text-dark active">
                            <i class="bi bi-basket"></i> Buah Lokal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('buah.impor') }}" class="nav-link text-dark">
                            <i class="bi bi-globe"></i> Buah Impor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('paket.buah') }}" class="nav-link text-dark">
                            <i class="bi bi-box-seam"></i> Paket
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark position-relative">
                            <i class="bi bi-cart3"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Hero Banner - BACKGROUND KUNING -->
<section class="hero-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-3">
                    <span class="highlight">Buah Lokal</span> Pilihan<br>
                    Segar dari <span class="highlight">Petani</span> Indonesia
                </h1>
                <p class="lead fs-5 mb-4">
                    Langsung dari kebun ke rumah Anda.<br>
                    100% segar, organik, dan berkualitas tinggi!
                </p>
                <div class="d-flex gap-3">
                    <a href="#products" class="btn btn-primary">
                        BELANJA SEKARANG
                    </a>
                    <a href="{{ route('paket.buah') }}" class="btn btn-outline-primary">
                        LIHAT PAKET HEMAT
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?w=800" 
                     alt="Buah Lokal" 
                     class="img-fluid"
                     style="filter: drop-shadow(0 20px 40px rgba(0,0,0,0.15)); max-height: 400px;">
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-5" id="products">
    <div class="container">
        <div class="filter-section mb-4">
            <form action="{{ route('buah.lokal') }}" method="GET">
                <div class="row g-3">
                    <!-- Search -->
                    <div class="col-md-3">
                        <label class="form-label">
                            <i class="bi bi-search text-primary"></i> Pencarian
                        </label>
                        <input type="text" name="search" class="form-control" 
                               placeholder="Cari nama buah..." 
                               value="{{ request('search') }}">
                    </div>

                    <!-- Min Price -->
                    <div class="col-md-2">
                        <label class="form-label">
                            <i class="bi bi-cash text-success"></i> Harga Min
                        </label>
                        <input type="number" name="harga_min" class="form-control" 
                               placeholder="10,000" 
                               value="{{ request('harga_min') }}">
                    </div>

                    <!-- Max Price -->
                    <div class="col-md-2">
                        <label class="form-label">
                            <i class="bi bi-cash-stack text-success"></i> Harga Max
                        </label>
                        <input type="number" name="harga_max" class="form-control" 
                               placeholder="100,000" 
                               value="{{ request('harga_max') }}">
                    </div>

                    <!-- Stock Filter -->
                    <div class="col-md-2">
                        <label class="form-label">
                            <i class="bi bi-box-seam text-info"></i> Ketersediaan
                        </label>
                        <select name="stok" class="form-select">
                            <option value="">Semua Stok</option>
                            <option value="tersedia" {{ request('stok') == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                            <option value="habis" {{ request('stok') == 'habis' ? 'selected' : '' }}>Habis</option>
                        </select>
                    </div>

                    <!-- Discount -->
                    <div class="col-md-2">
                        <label class="form-label d-block">
                            <i class="bi bi-tag text-danger"></i> Promo
                        </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="diskon" value="1" 
                                   id="filterDiskon" {{ request('diskon') ? 'checked' : '' }}>
                            <label class="form-check-label fw-semibold" for="filterDiskon">
                                Ada Diskon
                            </label>
                        </div>
                    </div>

                    <!-- Filter Button -->
                    <div class="col-md-1">
                        <label class="form-label d-block">&nbsp;</label>
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-funnel-fill"></i>
                        </button>
                    </div>
                </div>

                <!-- Reset Button -->
                <div class="row mt-3">
                    <div class="col-12">
                        <a href="{{ route('buah.lokal') }}" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-arrow-counterclockwise"></i> Reset Filter
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <!-- Active Filters -->
        @if(request()->hasAny(['search', 'harga_min', 'harga_max', 'stok', 'diskon']))
        <div class="mb-4">
            <div class="d-flex gap-2 align-items-center flex-wrap">
                <span class="fw-semibold text-muted">
                    <i class="bi bi-funnel"></i> Filter Aktif:
                </span>
                
                @if(request('search'))
                    <span class="badge bg-primary filter-badge">
                        <i class="bi bi-search"></i> "{{ request('search') }}"
                        <a href="{{ route('buah.lokal', request()->except('search')) }}" 
                           class="text-white text-decoration-none ms-2 fs-5">×</a>
                    </span>
                @endif

                @if(request('harga_min'))
                    <span class="badge bg-success filter-badge">
                        Min: Rp {{ number_format(request('harga_min'), 0, ',', '.') }}
                        <a href="{{ route('buah.lokal', request()->except('harga_min')) }}" 
                           class="text-white text-decoration-none ms-2 fs-5">×</a>
                    </span>
                @endif

                @if(request('harga_max'))
                    <span class="badge bg-success filter-badge">
                        Max: Rp {{ number_format(request('harga_max'), 0, ',', '.') }}
                        <a href="{{ route('buah.lokal', request()->except('harga_max')) }}" 
                           class="text-white text-decoration-none ms-2 fs-5">×</a>
                    </span>
                @endif

                @if(request('diskon'))
                    <span class="badge bg-danger filter-badge">
                        <i class="bi bi-percent"></i> Diskon
                        <a href="{{ route('buah.lokal', request()->except('diskon')) }}" 
                           class="text-white text-decoration-none ms-2 fs-5">×</a>
                    </span>
                @endif

                @if(request('stok'))
                    <span class="badge bg-warning text-dark filter-badge">
                        Stok: {{ ucfirst(request('stok')) }}
                        <a href="{{ route('buah.lokal', request()->except('stok')) }}" 
                           class="text-dark text-decoration-none ms-2 fs-5">×</a>
                    </span>
                @endif
            </div>
        </div>
        @endif

        <!-- Results & Sorting -->
        <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white rounded-3 shadow-sm">
            <div>
                <h5 class="mb-0">
                    <i class="bi bi-basket2 text-primary"></i>
                    <strong class="text-primary">{{ $buahLokals->total() }}</strong> Produk Ditemukan
                </h5>
            </div>
            <div>
                <form action="{{ route('buah.lokal') }}" method="GET" class="d-flex align-items-center gap-2">
                    @foreach(request()->except('sort') as $key => $value)
                        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                    @endforeach

                    <label class="mb-0 text-muted fw-semibold">
                        <i class="bi bi-sort-down"></i> Urutkan:
                    </label>
                    <select name="sort" class="form-select form-select-sm" style="width: 220px;" onchange="this.form.submit()">
                        <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Terbaru</option>
                        <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Harga Terendah</option>
                        <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Harga Tertinggi</option>
                        <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Nama A-Z</option>
                        <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Nama Z-A</option>
                        <option value="discount" {{ request('sort') == 'discount' ? 'selected' : '' }}>Diskon Terbesar</option>
                    </select>
                </form>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @forelse($buahLokals as $buah)
            <div class="col">
                <div class="card product-item border-0 shadow-sm">
                    <!-- Image -->
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <a href="{{ route('buah.lokal.show', $buah->id) }}">
                            @if($buah->gambar)
                                <img src="{{ asset('storage/' . $buah->gambar) }}" 
                                     alt="{{ $buah->nama }}" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;">
                            @else
                                <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center">
                                    <i class="bi bi-image text-muted" style="font-size: 4rem;"></i>
                                </div>
                            @endif
                        </a>
                        
                        <!-- Badges -->
                        @if($buah->diskon_persen > 0)
                        <span class="badge bg-danger product-badge position-absolute top-0 end-0 m-2">
                            <i class="bi bi-lightning-fill"></i> -{{ $buah->diskon_persen }}%
                        </span>
                        @endif

                        @if($buah->stok < 10 && $buah->stok > 0)
                        <span class="badge bg-warning text-dark product-badge position-absolute top-0 start-0 m-2">
                            <i class="bi bi-hourglass-split"></i> {{ $buah->stok }} tersisa
                        </span>
                        @elseif($buah->stok == 0)
                        <span class="badge bg-secondary product-badge position-absolute top-0 start-0 m-2">
                            <i class="bi bi-x-circle-fill"></i> Habis
                        </span>
                        @endif
                    </div>

                    <!-- Card Body -->
                    <div class="card-body d-flex flex-column p-3">
                        <h6 class="fw-bold mb-2" style="min-height: 40px;">{{ $buah->nama }}</h6>
                        <p class="text-muted small mb-3" style="min-height: 40px;">
                            {{ Str::limit($buah->deskripsi, 50) }}
                        </p>

                        <!-- Price -->
                        <div class="mb-3">
                            @if($buah->harga_diskon)
                                <div class="price-original mb-1">
                                    Rp {{ number_format($buah->harga, 0, ',', '.') }}
                                </div>
                                <div class="price-discount mb-2">
                                    Rp {{ number_format($buah->harga_diskon, 0, ',', '.') }}
                                </div>
                                <span class="savings">
                                    <i class="bi bi-piggy-bank-fill"></i>
                                    Hemat Rp {{ number_format($buah->harga - $buah->harga_diskon, 0, ',', '.') }}
                                </span>
                            @else
                                <div class="price-discount">
                                    Rp {{ number_format($buah->harga, 0, ',', '.') }}
                                </div>
                            @endif
                        </div>

                        <!-- Stock -->
                        <div class="mb-3">
                            <small class="text-muted">
                                <i class="bi bi-box-seam-fill"></i> Stok: 
                                <strong class="{{ $buah->stok > 10 ? 'text-success' : ($buah->stok > 0 ? 'text-warning' : 'text-danger') }}">
                                    {{ $buah->stok }} unit
                                </strong>
                            </small>
                        </div>

                        <!-- Buttons -->
                        <div class="mt-auto">
                            <div class="d-grid gap-2">
                                <a href="{{ route('buah.lokal.show', $buah->id) }}" 
                                   class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-eye-fill"></i> Lihat Detail
                                </a>
                                @if($buah->stok > 0)
                                    <button class="btn btn-primary btn-sm">
                                        <i class="bi bi-cart-plus-fill"></i> Tambah Keranjang
                                    </button>
                                @else
                                    <button class="btn btn-secondary btn-sm" disabled>
                                        <i class="bi bi-x-circle-fill"></i> Stok Habis
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="empty-state">
                    <i class="bi bi-inbox"></i>
                    <h3 class="mt-4 mb-3">Produk Tidak Ditemukan</h3>
                    <p class="text-muted mb-4">
                        Maaf, tidak ada produk yang sesuai dengan kriteria pencarian Anda.<br>
                        Coba ubah filter atau kata kunci pencarian.
                    </p>
                    <a href="{{ route('buah.lokal') }}" class="btn btn-primary">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset & Lihat Semua Produk
                    </a>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($buahLokals->hasPages())
        <div class="mt-5">
            <div class="d-flex justify-content-center">
                {{ $buahLokals->links('pagination::bootstrap-5') }}
            </div>
        </div>
        @endif
    </div>
</section>

<!-- Footer -->
<footer class="text-light pt-5 pb-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <h5><i class="bi bi-basket2-fill"></i> FreshFruit</h5>
                <p class="text-white-50">
                    Platform e-commerce terpercaya untuk buah segar berkualitas 
                    langsung dari petani lokal Indonesia.
                </p>
                <div class="d-flex gap-3 mt-3">
                    <a href="#" class="text-white-50 fs-4"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white-50 fs-4"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white-50 fs-4"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white-50 fs-4"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <h5>Kategori</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('buah.lokal') }}" class="text-white-50 text-decoration-none">
                        <i class="bi bi-caret-right-fill"></i> Buah Lokal
                    </a></li>
                    <li class="mb-2"><a href="{{ route('buah.impor') }}" class="text-white-50 text-decoration-none">
                        <i class="bi bi-caret-right-fill"></i> Buah Impor
                    </a></li>
                    <li class="mb-2"><a href="{{ route('paket.buah') }}" class="text-white-50 text-decoration-none">
                        <i class="bi bi-caret-right-fill"></i> Paket Buah
                    </a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Informasi</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">
                        <i class="bi bi-caret-right-fill"></i> Tentang Kami
                    </a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">
                        <i class="bi bi-caret-right-fill"></i> Cara Belanja
                    </a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">
                        <i class="bi bi-caret-right-fill"></i> Kebijakan Privasi
                    </a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Kontak Kami</h5>
                <ul class="list-unstyled text-white-50">
                    <li class="mb-2">
                        <i class="bi bi-geo-alt-fill text-success"></i>
                        Jakarta, Indonesia
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-envelope-fill text-success"></i>
                        info@freshfruit.com
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-telephone-fill text-success"></i>
                        0812-3456-7890
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-4 bg-white opacity-25">
        <div class="text-center text-white-50">
            <p class="mb-0">
                &copy; 2025 FreshFruit. All Rights Reserved. Made with 
                <i class="bi bi-heart-fill text-danger"></i> in Indonesia
            </p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
