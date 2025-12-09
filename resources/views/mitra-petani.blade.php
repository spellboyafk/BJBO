<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitra Petani - FreshFruit</title>
    
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

        .hero-section {
            background: linear-gradient(135deg, #FFF4E6 0%, #FFE5B4 100%);
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -10%;
            right: -5%;
            width: 600px;
            height: 600px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
            color: #000;
        }

        .hero-content .highlight {
            color: var(--primary-color);
        }

        .hero-content p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 2rem;
        }

        .hero-image img {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.2));
        }

        .benefit-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #e9ecef;
            height: 100%;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            margin: 0 auto 1.5rem;
        }

        .btn-primary {
            background: var(--accent-color);
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #0b5ed7;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(13, 110, 253, 0.4);
        }

        .btn-outline-primary {
            border: 2px solid var(--accent-color);
            color: var(--accent-color);
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: var(--accent-color);
            color: white;
            transform: translateY(-2px);
        }

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

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .hero-section {
                padding: 3rem 0;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <div class="container-fluid px-4">
        <div class="row py-3 align-items-center">
            <div class="col-md-3">
                <a href="{{ url('/') }}" class="text-decoration-none">
                    <span class="logo-text">
                        <i class="bi bi-basket2-fill"></i> FreshFruit
                    </span>
                </a>
            </div>

            <div class="col-md-5">
                <form action="{{ route('buah.lokal') }}" method="get">
                    <div class="input-group search-bar rounded-pill overflow-hidden">
                        <input type="text" name="search" class="form-control border-0" 
                               placeholder="Cari buah favorit Anda...">
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <ul class="nav justify-content-end gap-3 mb-0">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-dark">
                            <i class="bi bi-house-door"></i> HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('buah.lokal') }}" class="nav-link text-dark">
                            <i class="bi bi-basket"></i> Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('mitra.petani') }}" class="nav-link text-dark active">
                            <i class="bi bi-people"></i> Mitra
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

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content">
                <h1>
                    Bergabung sebagai<br>
                    <span class="highlight">Mitra Petani</span><br>
                    FreshFruit
                </h1>
                <p class="lead">
                    Tingkatkan pendapatan dengan menjual hasil panen langsung ke konsumen.<br>
                    Harga adil, pembayaran tepat waktu, dan pasar yang lebih luas!
                </p>
                <div class="d-flex gap-3">
                    <a href="#daftar" class="btn btn-primary">
                        DAFTAR SEKARANG
                    </a>
                    <a href="#keuntungan" class="btn btn-outline-primary">
                        PELAJARI LEBIH LANJUT
                    </a>
                </div>
            </div>
            <div class="col-lg-6 hero-image text-center">
                <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=800" 
                     alt="Petani" 
                     class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5" id="keuntungan">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Keuntungan Menjadi Mitra Petani</h2>
            <p class="text-muted">Nikmati berbagai kemudahan dan keuntungan eksklusif</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-cash-stack"></i>
                    </div>
                    <h5>Harga Lebih Adil</h5>
                    <p>Dapatkan harga yang lebih baik tanpa perantara. Langsung dari petani ke konsumen.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <h5>Pembayaran Tepat Waktu</h5>
                    <p>Jaminan pembayaran tepat waktu setiap minggu, langsung ke rekening Anda.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h5>Akses Pasar Luas</h5>
                    <p>Jual hasil panen ke ribuan konsumen di berbagai kota di Indonesia.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="py-5 bg-light" id="daftar">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-lg rounded-4 p-4">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold">
                            <i class="bi bi-file-earmark-text text-primary"></i>
                            Formulir Pendaftaran Mitra Petani
                        </h3>
                        <p class="text-muted">Isi data dengan lengkap dan benar</p>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle-fill"></i> <strong>Berhasil!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-triangle-fill"></i> 
                        <strong>Terjadi kesalahan:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    <form action="{{ route('mitra.petani.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-person-fill text-primary"></i> Nama Lengkap *
                                </label>
                                <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" 
                                       placeholder="Masukkan nama lengkap" value="{{ old('nama_lengkap') }}" required>
                                @error('nama_lengkap')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-envelope-fill text-primary"></i> Email *
                                </label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                                       placeholder="email@example.com" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-phone-fill text-primary"></i> No. Telepon *
                                </label>
                                <input type="tel" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" 
                                       placeholder="08xx-xxxx-xxxx" value="{{ old('no_telepon') }}" required>
                                @error('no_telepon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-card-text text-primary"></i> No. KTP *
                                </label>
                                <input type="text" name="no_ktp" class="form-control @error('no_ktp') is-invalid @enderror" 
                                       placeholder="16 digit nomor KTP" value="{{ old('no_ktp') }}" maxlength="16" required>
                                <small class="text-muted">Masukkan 16 digit nomor KTP</small>
                                @error('no_ktp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-geo-alt-fill text-primary"></i> Provinsi *
                                </label>
                                <select name="provinsi" class="form-select @error('provinsi') is-invalid @enderror" required>
                                    <option value="">Pilih Provinsi</option>
                                    <option value="Jawa Barat" {{ old('provinsi') == 'Jawa Barat' ? 'selected' : '' }}>Jawa Barat</option>
                                    <option value="Jawa Tengah" {{ old('provinsi') == 'Jawa Tengah' ? 'selected' : '' }}>Jawa Tengah</option>
                                    <option value="Jawa Timur" {{ old('provinsi') == 'Jawa Timur' ? 'selected' : '' }}>Jawa Timur</option>
                                    <option value="Sumatera Utara" {{ old('provinsi') == 'Sumatera Utara' ? 'selected' : '' }}>Sumatera Utara</option>
                                    <option value="Kalimantan Barat" {{ old('provinsi') == 'Kalimantan Barat' ? 'selected' : '' }}>Kalimantan Barat</option>
                                </select>
                                @error('provinsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-map-fill text-primary"></i> Alamat Lahan *
                                </label>
                                <textarea name="alamat_lahan" class="form-control @error('alamat_lahan') is-invalid @enderror" 
                                          rows="3" placeholder="Alamat lengkap lokasi lahan pertanian" required>{{ old('alamat_lahan') }}</textarea>
                                @error('alamat_lahan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-bounding-box text-primary"></i> Luas Lahan (m²) *
                                </label>
                                <input type="number" name="luas_lahan" class="form-control @error('luas_lahan') is-invalid @enderror" 
                                       placeholder="Contoh: 2000" value="{{ old('luas_lahan') }}" min="1000" required>
                                <small class="text-muted">Minimal 1000 m²</small>
                                @error('luas_lahan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-apple text-primary"></i> Jenis Buah *
                                </label>
                                <select name="jenis_buah" class="form-select @error('jenis_buah') is-invalid @enderror" required>
                                    <option value="">Pilih Jenis Buah</option>
                                    <option value="Mangga" {{ old('jenis_buah') == 'Mangga' ? 'selected' : '' }}>Mangga</option>
                                    <option value="Jeruk" {{ old('jenis_buah') == 'Jeruk' ? 'selected' : '' }}>Jeruk</option>
                                    <option value="Apel" {{ old('jenis_buah') == 'Apel' ? 'selected' : '' }}>Apel</option>
                                    <option value="Pisang" {{ old('jenis_buah') == 'Pisang' ? 'selected' : '' }}>Pisang</option>
                                    <option value="Pepaya" {{ old('jenis_buah') == 'Pepaya' ? 'selected' : '' }}>Pepaya</option>
                                </select>
                                @error('jenis_buah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-box-seam text-primary"></i> Kapasitas Produksi Per Bulan (kg) *
                                </label>
                                <input type="number" name="kapasitas_produksi" class="form-control @error('kapasitas_produksi') is-invalid @enderror" 
                                       placeholder="Contoh: 500" value="{{ old('kapasitas_produksi') }}" min="100" required>
                                <small class="text-muted">Minimal 100 kg per bulan</small>
                                @error('kapasitas_produksi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-bank text-primary"></i> Informasi Rekening Bank *
                                </label>
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <select name="nama_bank" class="form-select @error('nama_bank') is-invalid @enderror" required>
                                            <option value="">Pilih Bank</option>
                                            <option value="BCA" {{ old('nama_bank') == 'BCA' ? 'selected' : '' }}>BCA</option>
                                            <option value="Mandiri" {{ old('nama_bank') == 'Mandiri' ? 'selected' : '' }}>Mandiri</option>
                                            <option value="BNI" {{ old('nama_bank') == 'BNI' ? 'selected' : '' }}>BNI</option>
                                            <option value="BRI" {{ old('nama_bank') == 'BRI' ? 'selected' : '' }}>BRI</option>
                                        </select>
                                        @error('nama_bank')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="no_rekening" class="form-control @error('no_rekening') is-invalid @enderror" 
                                               placeholder="Nomor Rekening" value="{{ old('no_rekening') }}" required>
                                        @error('no_rekening')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="atas_nama_rekening" class="form-control @error('atas_nama_rekening') is-invalid @enderror" 
                                               placeholder="Atas Nama" value="{{ old('atas_nama_rekening') }}" required>
                                        @error('atas_nama_rekening')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agree" required>
                                    <label class="form-check-label" for="agree">
                                        Saya menyetujui syarat dan ketentuan yang berlaku
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="bi bi-send-fill"></i> KIRIM PENDAFTARAN
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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
                <h5>Kemitraan</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('mitra.petani') }}" class="text-white-50 text-decoration-none">
                        <i class="bi bi-caret-right-fill"></i> Mitra Petani
                    </a></li>
                    <li class="mb-2"><a href="{{ route('mitra.toko') }}" class="text-white-50 text-decoration-none">
                        <i class="bi bi-caret-right-fill"></i> Mitra Toko
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
