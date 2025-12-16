<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Spesial - BJBO</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        /* Promo Card Styling */
        .promo-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            position: relative;
        }

        .promo-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .promo-banner {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .promo-card:hover .promo-banner {
            transform: scale(1.1);
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 250px;
            background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.3) 100%);
        }

        .promo-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
            color: white;
            padding: 0.7rem 1.3rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.3rem;
            box-shadow: 0 5px 20px rgba(255,107,107,0.5);
            z-index: 10;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .kode-promo {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 1rem;
            border-radius: 15px;
            font-size: 1.4rem;
            font-weight: 700;
            letter-spacing: 3px;
            text-align: center;
            margin: 1.5rem 0;
            border: 3px dashed rgba(255,255,255,0.5);
            position: relative;
            overflow: hidden;
        }

        .kode-promo::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .copy-btn {
            cursor: pointer;
            transition: all 0.3s;
            font-size: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .copy-btn:hover {
            transform: scale(1.3) rotate(10deg);
        }

        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            top: -100px;
            right: -100px;
        }

        .page-header h1 {
            color: white;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.2);
        }

        .page-header p {
            color: rgba(255,255,255,0.9);
            font-size: 1.2rem;
        }

        .info-badge {
            background: #f8f9fa;
            padding: 0.5rem 1rem;
            border-radius: 30px;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 0.5rem;
            font-size: 0.9rem;
            border: 1px solid #e9ecef;
        }

        .promo-content {
            padding: 1.5rem;
        }

        .promo-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 1rem;
            line-height: 1.4;
        }

        .promo-description {
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .validity-info {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 0.8rem;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .empty-state {
            padding: 5rem 0;
        }

        .empty-state i {
            font-size: 5rem;
            opacity: 0.3;
        }

        /* Filter Section */
        .filter-section {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
        }

        .stats-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1.5rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(102,126,234,0.3);
        }

        .stats-card h3 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stats-card p {
            margin: 0;
            opacity: 0.9;
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <div class="container-fluid px-4 py-3">
        <div class="row align-items-center">
            <div class="col-md-3">
                <a href="{{ url('/') }}" class="navbar-brand text-decoration-none">
                    <h4 class="fw-bold mb-0" style="color: #667eea;">
                        <i class="bi bi-basket2-fill"></i> BJBO
                    </h4>
                </a>
            </div>
            <div class="col-md-9">
                <ul class="nav justify-content-end gap-3 mb-0">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">
                            <i class="bi bi-house-door"></i> HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('buah.lokal') }}" class="nav-link">
                            <i class="bi bi-basket"></i> Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('promo') }}" class="nav-link active" style="color: #667eea; font-weight: 600;">
                            <i class="bi bi-tags-fill"></i> Promo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('mitra.petani') }}" class="nav-link">
                            <i class="bi bi-people"></i> Mitra
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Page Header -->
<section class="page-header">
    <div class="container text-center">
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown">
            <i class="bi bi-tags-fill"></i> Promo Spesial Hari Ini!
        </h1>
        <p class="lead animate__animated animate__fadeInUp">
            Dapatkan penawaran terbaik untuk buah segar berkualitas premium
        </p>
        <div class="mt-4">
            <span class="badge bg-light text-dark fs-5 px-4 py-2">
                <i class="bi bi-gift-fill text-danger"></i> {{ $promos->count() }} Promo Aktif
            </span>
        </div>
    </div>
</section>

<!-- Stats Section -->
@if($promos->isNotEmpty())
<section class="py-4 bg-light">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-4">
                <div class="stats-card">
                    <h3><i class="bi bi-percent"></i> {{ $promos->count() }}</h3>
                    <p>Promo Tersedia</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                    <h3><i class="bi bi-clock-history"></i> Baru</h3>
                    <p>Update Setiap Hari</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                    <h3><i class="bi bi-trophy-fill"></i> Hemat</h3>
                    <p>Hingga 50%</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Promo List -->
<section class="py-5">
    <div class="container">
        @if($promos->isEmpty())
            <div class="empty-state text-center">
                <i class="bi bi-inbox display-1 text-muted"></i>
                <h3 class="mt-4 text-muted">Belum Ada Promo Aktif</h3>
                <p class="text-muted">Pantau terus halaman ini untuk mendapatkan promo menarik!</p>
                <a href="{{ route('buah.lokal') }}" class="btn btn-primary btn-lg mt-3">
                    <i class="bi bi-basket"></i> Lihat Produk
                </a>
            </div>
        @else
            <div class="row g-4">
                @foreach($promos as $promo)
                <div class="col-md-6 col-lg-4">
                    <div class="promo-card">
                        <div class="position-relative">
                            @if($promo->banner)
                                <img src="{{ asset($promo->banner) }}" alt="{{ $promo->judul }}" class="promo-banner">
                            @else
                                <div class="promo-banner d-flex align-items-center justify-content-center" 
                                     style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                    <i class="bi bi-gift display-1 text-white"></i>
                                </div>
                            @endif
                            <div class="banner-overlay"></div>
                            <div class="promo-badge">
                                {{ $promo->diskon_label ?? $promo->diskon_persentase . '%' }}
                            </div>
                        </div>

                        <div class="promo-content">
                            <h5 class="promo-title">{{ $promo->judul }}</h5>
                            <p class="promo-description">{{ $promo->deskripsi }}</p>

                            <div class="kode-promo">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>{{ $promo->kode_promo }}</span>
                                    <i class="bi bi-clipboard-check copy-btn" 
                                       onclick="copyKode('{{ $promo->kode_promo }}')" 
                                       title="Salin kode"></i>
                                </div>
                            </div>

                            <div class="validity-info">
                                <small class="d-block fw-bold">
                                    <i class="bi bi-calendar-check text-warning"></i> 
                                    Berlaku: {{ $promo->tanggal_mulai->format('d M Y') }} - {{ $promo->tanggal_selesai->format('d M Y') }}
                                </small>
                            </div>

                            <div class="d-flex flex-wrap gap-2">
                                @if($promo->min_pembelian > 0)
                                <span class="info-badge">
                                    <i class="bi bi-cart-check text-success"></i> 
                                    Min. Rp {{ number_format($promo->min_pembelian, 0, ',', '.') }}
                                </span>
                                @endif

                                @if($promo->kuota)
                                <span class="info-badge">
                                    <i class="bi bi-people text-primary"></i> 
                                    Sisa {{ $promo->kuota - ($promo->terpakai ?? 0) }}
                                </span>
                                @endif
                            </div>

                            <button class="btn btn-primary w-100 mt-3" onclick="gunakanPromo('{{ $promo->kode_promo }}')">
                                <i class="bi bi-bag-check"></i> Gunakan Promo
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container text-center text-white">
        <h2 class="fw-bold mb-3">Jangan Lewatkan Promo Menarik Lainnya!</h2>
        <p class="lead mb-4">Daftar sekarang dan dapatkan notifikasi promo terbaru</p>
        <a href="{{ route('buah.lokal') }}" class="btn btn-light btn-lg px-5">
            <i class="bi bi-bell-fill"></i> Aktifkan Notifikasi
        </a>
    </div>
</section>

<!-- Footer -->
<footer class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">
                    <i class="bi bi-basket2-fill"></i> BJBO
                </h5>
                <p>Platform jual beli buah online terpercaya di Bengkalis</p>
            </div>
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">Menu Cepat</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-white-50">Home</a></li>
                    <li><a href="{{ route('buah.lokal') }}" class="text-white-50">Produk</a></li>
                    <li><a href="{{ route('promo') }}" class="text-white-50">Promo</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">Hubungi Kami</h5>
                <p class="text-white-50">
                    <i class="bi bi-envelope"></i> info@bjbo.com<br>
                    <i class="bi bi-phone"></i> +62 812-3456-7890
                </p>
            </div>
        </div>
        <hr class="my-4 bg-white">
        <div class="text-center text-white-50">
            <p class="mb-0">© 2025 BJBO. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<script>
function copyKode(kode) {
    navigator.clipboard.writeText(kode).then(function() {
        // Tampilkan toast/notification
        alert('✅ Kode promo "' + kode + '" berhasil disalin!\n\nGunakan kode ini saat checkout untuk mendapatkan diskon.');
    }, function() {
        alert('❌ Gagal menyalin kode. Silakan salin manual: ' + kode);
    });
}

function gunakanPromo(kode) {
    // Redirect ke halaman produk dengan kode promo
    window.location.href = '{{ route("buah.lokal") }}?promo=' + kode;
}
</script>

<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
