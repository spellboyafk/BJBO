<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buah Impor - BJBO</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>

<!-- Header -->
<header>
    <div class="container-fluid px-4 py-3">
        <div class="row align-items-center">
            <div class="col-md-3">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h4 class="fw-bold mb-0" style="color: #667eea;">
                        <i class="bi bi-basket2-fill"></i> BJBO
                    </h4>
                </a>
            </div>
            <div class="col-md-9">
                <ul class="nav justify-content-end gap-3 mb-0">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('buah.lokal') }}" class="nav-link">Buah Lokal</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('buah.impor') }}" class="nav-link active" style="color: #667eea; font-weight: 600;">Buah Impor</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('promo') }}" class="nav-link">Promo</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-5 fw-bold mb-3">
                    <i class="bi bi-globe text-primary"></i> Buah Impor Premium
                </h1>
                <p class="lead text-muted">Pilihan buah import berkualitas dari berbagai negara</p>
            </div>
        </div>
    </div>
</section>

<!-- Product List -->
<section class="pb-5">
    <div class="container">
        <div class="row g-4">
            @foreach($buahImpor as $buah)
<div class="col-md-6 col-lg-4">
    <div class="card h-100 shadow-sm border-0">
        <div class="position-relative">
            @if($buah->gambar)
                <img src="{{ asset('storage/' . $buah->gambar) }}" 
                     class="card-img-top" 
                     alt="{{ $buah->nama }}"
                     style="height: 250px; object-fit: cover;">
            @else
                <img src="{{ asset('images/no-image.jpg') }}" 
                     class="card-img-top" 
                     alt="No Image"
                     style="height: 250px; object-fit: cover;">
            @endif
            <span class="badge bg-info position-absolute top-0 end-0 m-3">
                <i class="bi bi-globe"></i> {{ $buah->negara_asal }}
            </span>
        </div>
        <div class="card-body">
            <h5 class="card-title fw-bold">{{ $buah->nama }}</h5>
            <p class="card-text text-muted">{{ $buah->deskripsi }}</p>
            
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="h4 text-primary mb-0">
                    Rp {{ number_format($buah->harga, 0, ',', '.') }}
                </span>
                <span class="text-muted">/ {{ $buah->satuan }}</span>
            </div>

            <div class="mb-3">
                <small class="text-muted">
                    <i class="bi bi-box-seam"></i> Stok: {{ $buah->stok }} {{ $buah->satuan }}
                </small>
            </div>

            <div class="d-grid gap-2">
                <a href="{{ route('buah.impor.show', $buah->id) }}" class="btn btn-outline-primary">
                    <i class="bi bi-eye"></i> Lihat Detail
                </a>
                <button class="btn btn-primary">
                    <i class="bi bi-cart-plus"></i> Tambah ke Keranjang
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach

        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-5">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="text-muted">© 2025 BJBO. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
