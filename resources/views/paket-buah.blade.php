<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Buah - FreshFruit</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-color: #28a745;
            --secondary-color: #218838;
            --accent-color: #ff6b35;
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

        /* Banner Styling */
        .hero-banner {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        .hero-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .hero-banner h1 {
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .hero-banner p {
            color: rgba(255,255,255,0.95);
        }

        /* Package Card */
        .package-card {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
            border: none;
        }

        .package-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15) !important;
        }

        .package-card img {
            transition: transform 0.5s ease;
            height: 280px;
            object-fit: cover;
        }

        .package-card:hover img {
            transform: scale(1.1);
        }

        .package-badge {
            font-size: 0.75rem;
            padding: 0.4rem 0.8rem;
            border-radius: 50px;
            font-weight: 600;
            backdrop-filter: blur(10px);
        }

        .package-price {
            color: var(--primary-color);
            font-size: 1.75rem;
            font-weight: 700;
        }

        .package-includes {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 1rem;
        }

        /* Buttons */
        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
        }

        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: var(--primary-color);
            border-color: var(--primary-color);
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

        /* Feature Icons */
        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-banner {
                padding: 2rem 0;
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
                               placeholder="Cari buah favorit Anda..." 
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
                        <a href="{{ route('buah.lokal') }}" class="nav-link text-dark">
                            <i class="bi bi-basket"></i> Buah Lokal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('buah.impor') }}" class="nav-link text-dark">
                            <i class="bi bi-globe"></i> Buah Impor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('paket.buah') }}" class="nav-link text-dark active">
                            <i class="bi bi-box-seam"></i> Paket Buah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark position-relative">
                            <i class="bi bi-cart3"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                0
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Hero Banner -->
<section class="hero-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="bi bi-box2-heart-fill"></i> Paket Buah Segar
                </h1>
                <p class="lead fs-5">
                    Hemat lebih banyak dengan paket buah pilihan kami. Segar, sehat, dan ekonomis!
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-4 bg-white border-bottom">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-3">
                <div class="feature-icon mx-auto">
                    <i class="bi bi-check-circle-fill"></i>
                </div>
                <h6 class="fw-bold">100% Fresh</h6>
                <p class="text-muted small mb-0">Buah segar pilihan</p>
            </div>
            <div class="col-md-3">
                <div class="feature-icon mx-auto">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h6 class="fw-bold">Kualitas Terjamin</h6>
                <p class="text-muted small mb-0">Inspeksi ketat</p>
            </div>
            <div class="col-md-3">
                <div class="feature-icon mx-auto">
                    <i class="bi bi-truck"></i>
                </div>
                <h6 class="fw-bold">Gratis Ongkir</h6>
                <p class="text-muted small mb-0">Min. pembelian paket</p>
            </div>
            <div class="col-md-3">
                <div class="feature-icon mx-auto">
                    <i class="bi bi-piggy-bank-fill"></i>
                </div>
                <h6 class="fw-bold">Hemat 20%</h6>
                <p class="text-muted small mb-0">Dibanding beli satuan</p>
            </div>
        </div>
    </div>
</section>

<!-- Packages Section -->
<section class="py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">
                <i class="bi bi-star-fill text-warning"></i> Pilihan Paket Buah
            </h2>
            <p class="text-muted">Pilih paket yang sesuai dengan kebutuhan keluarga Anda</p>
        </div>

        <!-- Packages Grid -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Package 1 -->
            <div class="col">
                <div class="card package-card shadow-sm">
                    <div class="position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?w=600" 
                             alt="Paket Sehat" class="w-100">
                        <span class="badge bg-success package-badge position-absolute top-0 end-0 m-3">
                            <i class="bi bi-star-fill"></i> Populer
                        </span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-2">
                            <i class="bi bi-heart-pulse text-danger"></i> Paket Sehat
                        </h4>
                        <p class="text-muted mb-3">Cocok untuk konsumsi harian keluarga kecil</p>
                        
                        <div class="package-includes mb-4">
                            <h6 class="fw-bold mb-3">
                                <i class="bi bi-box-seam text-primary"></i> Isi Paket:
                            </h6>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success"></i> 1 kg Apel Fuji
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success"></i> 1 sisir Pisang Cavendish
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success"></i> 1 kg Jeruk Medan
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill text-success"></i> Bonus: 2 Pir Segar
                                </li>
                            </ul>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <small class="text-muted text-decoration-line-through d-block">Rp 50.000</small>
                                <div class="package-price">Rp 35.000</div>
                            </div>
                            <span class="badge bg-danger">Hemat 30%</span>
                        </div>

                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary">
                                <i class="bi bi-cart-plus-fill"></i> Pesan Sekarang
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-eye"></i> Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Package 2 -->
            <div class="col">
                <div class="card package-card shadow-sm">
                    <div class="position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1559181567-c3190ca9959b?w=600" 
                             alt="Paket Tropis" class="w-100">
                        <span class="badge bg-warning text-dark package-badge position-absolute top-0 end-0 m-3">
                            <i class="bi bi-fire"></i> Best Seller
                        </span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-2">
                            <i class="bi bi-sun-fill text-warning"></i> Paket Tropis
                        </h4>
                        <p class="text-muted mb-3">Nikmati kesegaran buah tropis Indonesia</p>
                        
                        <div class="package-includes mb-4">
                            <h6 class="fw-bold mb-3">
                                <i class="bi bi-box-seam text-primary"></i> Isi Paket:
                            </h6>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success"></i> 1 buah Mangga Harum Manis
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success"></i> 1/2 buah Nanas Madu
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success"></i> 2 kg Semangka Merah
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill text-success"></i> Bonus: 3 Jeruk Lokal
                                </li>
                            </ul>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <small class="text-muted text-decoration-line-through d-block">Rp 65.000</small>
                                <div class="package-price">Rp 45.000</div>
                            </div>
                            <span class="badge bg-danger">Hemat 31%</span>
                        </div>

                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary">
                                <i class="bi bi-cart-plus-fill"></i> Pesan Sekarang
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-eye"></i> Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Package 3 -->
            <div class="col">
                <div class="card package-card shadow-sm">
                    <div class="position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1619566636858-adf3ef46400b?w=600" 
                             alt="Paket Keluarga" class="w-100">
                        <span class="badge bg-primary package-badge position-absolute top-0 end-0 m-3">
                            <i class="bi bi-people-fill"></i> Family
                        </span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-2">
                            <i class="bi bi-house-heart-fill text-primary"></i> Paket Keluarga
                        </h4>
                        <p class="text-muted mb-3">Paket lengkap untuk keluarga besar</p>
                        
                        <div class="package-includes mb-4">
                            <h6 class="fw-bold mb-3">
                                <i class="bi bi-box-seam text-primary"></i> Isi Paket:
                            </h6>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success"></i> 2 kg Apel Mix
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success"></i> 500g Anggur Hijau
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success"></i> 1 kg Jeruk Import
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success"></i> 1 kg Pir Tionghoa
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill text-success"></i> Bonus: Free Delivery
                                </li>
                            </ul>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <small class="text-muted text-decoration-line-through d-block">Rp 100.000</small>
                                <div class="package-price">Rp 70.000</div>
                            </div>
                            <span class="badge bg-danger">Hemat 30%</span>
                        </div>

                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary">
                                <i class="bi bi-cart-plus-fill"></i> Pesan Sekarang
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-eye"></i> Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="row mt-5 pt-5 border-top">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold">
                    <i class="bi bi-award-fill text-warning"></i> Kenapa Pilih Paket Buah Kami?
                </h3>
            </div>
            <div class="col-md-4 text-center">
                <div class="feature-icon mx-auto">
                    <i class="bi bi-cash-coin"></i>
                </div>
                <h5 class="fw-bold mb-2">Harga Lebih Murah</h5>
                <p class="text-muted">Hemat hingga 30% dibanding beli buah satuan</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="feature-icon mx-auto">
                    <i class="bi bi-clock-history"></i>
                </div>
                <h5 class="fw-bold mb-2">Praktis & Efisien</h5>
                <p class="text-muted">Tidak perlu repot pilih-pilih, sudah dalam satu paket</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="feature-icon mx-auto">
                    <i class="bi bi-gift-fill"></i>
                </div>
                <h5 class="fw-bold mb-2">Bonus Menarik</h5>
                <p class="text-muted">Setiap paket dilengkapi dengan bonus buah gratis</p>
            </div>
        </div>
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
