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
            --accent-color: #0d6efd;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

    

        .logo-text {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.5rem;
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

        @media (max-width: 768px) {
            .hero-banner {
                padding: 3rem 0;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
      <div class="container-fluid">
        <div class="row py-3 border-bottom">
          
          <div class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
            <div class="d-flex align-items-center my-3 my-sm-0">
              <a href="index.html">
                <img src="{{ asset('images/logo-bjbo.png') }}" alt="logo" class="img-fluid">
              </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar">
              <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#menu"></use></svg>
            </button>
          </div>
          
          <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-4">
            <div class="search-bar row bg-light p-2 rounded-4">
              <div class="col-md-4 d-none d-md-block">
                <select class="form-select border-0 bg-transparent">
                  <option>All Categories</option>
                  <option>Groceries</option>
                  <option>Drinks</option>
                  <option>Chocolates</option>
                </select>
              </div>
              <div class="col-11 col-md-7">
                <form id="search-form" class="text-center" action="index.html" method="post">
                  <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 20,000 products">
                </form>
              </div>
              <div class="col-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"/></svg>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <ul class="navbar-nav list-unstyled d-flex flex-row gap-3 gap-lg-5 justify-content-center flex-wrap align-items-center mb-0 fw-bold text-uppercase text-dark">
              <li class="nav-item active">
                <a href="index.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pe-3" role="button" id="pages" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu border-0 p-3 rounded-0 shadow" aria-labelledby="pages">
                  <li><a href="index.html" class="dropdown-item">About Us </a></li>
                  <li><a href="index.html" class="dropdown-item">Shop </a></li>
                  <li><a href="index.html" class="dropdown-item">Single Product </a></li>
                  <li><a href="index.html" class="dropdown-item">Cart </a></li>
                  <li><a href="index.html" class="dropdown-item">Checkout </a></li>
                  <li><a href="index.html" class="dropdown-item">Blog </a></li>
                  <li><a href="index.html" class="dropdown-item">Single Post </a></li>
                  <li><a href="index.html" class="dropdown-item">Styles </a></li>
                  <li><a href="index.html" class="dropdown-item">Contact </a></li>
                  <li><a href="index.html" class="dropdown-item">Thank You </a></li>
                  <li><a href="index.html" class="dropdown-item">My Account </a></li>
                  <li><a href="index.html" class="dropdown-item">404 Error </a></li>
                </ul>
              </li>
            </ul>
          </div>
          
          <div class="col-sm-8 col-lg-2 d-flex gap-5 align-items-center justify-content-center justify-content-sm-end">
            <ul class="d-flex justify-content-end list-unstyled m-0">
              <li>
                <a href="#" class="p-2 mx-1">
                  <svg width="24" height="24"><use xlink:href="#user"></use></svg>
                </a>
              </li>
              <li>
                <a href="#" class="p-2 mx-1">
                  <svg width="24" height="24"><use xlink:href="#wishlist"></use></svg>
                </a>
              </li>
              <li>
                <a href="#" class="p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                  <svg width="24" height="24"><use xlink:href="#shopping-bag"></use></svg>
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </header>

<!-- Hero Section -->
     <section style="background-image: url('images/banner-1.jpg');background-repeat: no-repeat;background-size: cover;">
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-6 pt-5 mt-5">
            <h2 class="display-1 ls-1"><span class="fw-bold text-primary">Belanja Buah</span> Segar <span class="fw-bold">Lebih Mudah</span></h2>
            <p class="fs-4">Kami Antar Sampai Rumah!</p>
            <div class="d-flex gap-3">
              <a href="#" class="btn btn-primary text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Mulai Berbelanja</a>
              <a href="#" class="btn btn-dark text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Gabung Sekarang</a>
            </div>
            <div class="row my-5">
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">14k+</p></div>
                  <div class="col"><p class="text-uppercase lh-sm mb-0">Product Varieties</p></div>
                </div>
              </div>
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">50k+</p></div>
                  <div class="col"><p class="text-uppercase lh-sm mb-0">Happy Customers</p></div>
                </div>
              </div>
              <div class="col">
                <div class="row text-dark">
                  <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">10+</p></div>
                  <div class="col"><p class="text-uppercase lh-sm mb-0">Store Locations</p></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 justify-content-center">
          <div class="col">
            <div class="card border-0 bg-primary rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60"><use xlink:href="#fresh"></use></svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">Langsung dari Kebunnya</h5>
                    <p class="card-text">Kami menghadirkan buah-buahan segar yang dipetik langsung dari kebunnya. Tanpa perantara, tanpa lama di gudang—hanya kesegaran asli yang sampai ke tangan Anda.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 bg-secondary rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60"><use xlink:href="#organic"></use></svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">100% Organic</h5>
                    <p class="card-text">Setiap buah ditanam dengan perhatian penuh, tanpa pestisida kimia dan tanpa bahan tambahan sintetis. Anda mendapatkan produk yang alami, sehat, dan aman untuk keluarga.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 bg-danger rounded-0 p-4 text-light">
              <div class="row">
                <div class="col-md-3 text-center">
                  <svg width="60" height="60"><use xlink:href="#delivery"></use></svg>
                </div>
                <div class="col-md-9">
                  <div class="card-body p-0">
                    <h5 class="text-light">Gratis Ongkir ke Rumah Anda</h5>
                    <p class="card-text">Belanja buah jadi lebih mudah—cukup pesan, kami antar langsung ke rumah Anda tanpa biaya tambahan. Praktis, cepat, dan nyaman.</p>
                  </div>
                </div>
              </div>
            </div>
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
                <h6 class="fw-bold">Hemat 30%</h6>
                <p class="text-muted small mb-0">Dibanding beli satuan</p>
            </div>
        </div>
    </div>
</section>

<!-- Packages Section -->
<section class="py-5" id="packages">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">
                <i class="bi bi-star-fill text-warning"></i> Pilihan Paket Buah
            </h2>
            <p class="text-muted">Pilih paket yang sesuai dengan kebutuhan keluarga Anda</p>
        </div>

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
    </div>
</section>

<footer class="footer bg-dark text-light pt-5 pb-3">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6">
                <h5 class="footer-title mb-4">BJBO - Bengkalis Jual Buah Online</h5>
                <p class="footer-text">Platform belanja buah dan sayuran segar terpercaya di Bengkalis. Kami menghubungkan konsumen dengan toko-toko lokal terbaik.</p>
                
                <div class="social-links mt-4">
                    <a href="#" class="social-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM12 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zM18.406 5.961c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <h5 class="footer-title mb-4">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Belanja</a></li>
                    <li><a href="#">Promo</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6">
                <h5 class="footer-title mb-4">Untuk Mitra</h5>
                <ul class="footer-links">
                    <li><a href="#">Daftar Mitra</a></li>
                    <li><a href="#">Login Mitra</a></li>
                    <li><a href="#">Syarat & Ketentuan</a></li>
                    <li><a href="#">Panduan Mitra</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5 class="footer-title mb-4">Hubungi Kami</h5>
                <ul class="footer-contact">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Jl. Antang Kalang No. 123<br>Bengkalis, Riau 28711</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>+62 812-3456-7890</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>info@bjbo.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="payment-shipping-section mt-5 pt-4 border-top border-secondary">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h6 class="text-light mb-3">Metode Pembayaran</h6>
                    <div class="payment-methods">
                        <span class="payment-badge">BCA</span>
                        <span class="payment-badge">Mandiri</span>
                        <span class="payment-badge">BNI</span>
                        <span class="payment-badge">GoPay</span>
                        <span class="payment-badge">OVO</span>
                        <span class="payment-badge">DANA</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6 class="text-light mb-3">Jasa Pengiriman</h6>
                    <div class="shipping-methods">
                        <span class="shipping-badge">JNE</span>
                        <span class="shipping-badge">J&T</span>
                        <span class="shipping-badge">SiCepat</span>
                        <span class="shipping-badge">Grab</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom mt-4 pt-4 border-top border-secondary text-center">
            <p class="mb-2">&copy; 2024 BJBO - Bengkalis Jual Buah Online. All Rights Reserved.</p>
            <p class="footer-links-inline mb-0">
                <a href="#">Kebijakan Privasi</a> | 
                <a href="#">Syarat & Ketentuan</a> | 
                <a href="#">Kebijakan Pengembalian</a>
            </p>
        </div>
    </div>
</footer>

<style>
<style>
/* ========================================================================= */
/* --- PERBAIKAN LEBAR PENUH & RESET (BARU DITAMBAHKAN) --- */
/* ========================================================================= */

/* 1. Mencegah lebar berlebih dari elemen lain dan menghilangkan margin browser */
body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    /* KUNCI PERBAIKAN: Menyembunyikan horizontal scroll yang menyebabkan celah */
    overflow-x: hidden; 
}

/* 2. Memastikan box-sizing konsisten */
*, *::before, *::after {
    box-sizing: border-box;
}

/* ========================================================================= */
/* --- GAYA FOOTER YANG ADA (DIOptimalkan) --- */
/* ========================================================================= */

.footer {
    /* Mengembalikan persentase normal pada linear-gradient (opsional, tapi disarankan) */
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
}

.footer-title {
    color: #fff;
    font-weight: 700;
    font-size: 1.1rem;
    position: relative;
    padding-bottom: 10px;
}

.footer-title:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 3px;
    background: #0d6efd;
}

.footer-text {
    color: #b8b8b8;
    line-height: 1.8;
    font-size: 0.95rem;
}

.social-links {
    display: flex;
    gap: 1rem;
}

.social-link {
    width: 40px;
    height: 40px;
    color: #fff;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s;
}

.social-link:hover {
    background: #0d6efd;
    color: #fff;
    transform: translateY(-3px);
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 0.75rem;
}

.footer-links a {
    color: #b8b8b8;
    text-decoration: none;
    font-size: 0.95rem;
    transition: all 0.3s;
}

.footer-links a:hover {
    color: #0d6efd;
    padding-left: 5px;
}

.footer-contact {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-contact li {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
    color: #b8b8b8;
    font-size: 0.95rem;
}

.footer-contact svg {
    flex-shrink: 0;
    margin-top: 3px;
    color: #0d6efd;
}

.payment-methods,
.shipping-methods {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
}

.payment-badge,
.shipping-badge {
    color: #fff;
    background: rgba(255, 255, 255, 0.1);
    padding: 0.5rem 1rem;
    border-radius: 6px;
    font-size: 0.85rem;
    font-weight: 600;
    transition: all 0.3s;
}

.payment-badge:hover,
.shipping-badge:hover {
    background: rgba(255, 255, 255, 0.2);
}

.footer-bottom {
    color: #888;
    font-size: 0.9rem;
}

.footer-links-inline a {
    color: #888;
    text-decoration: none;
    margin: 0 0.5rem;
    transition: color 0.3s;
}

.footer-links-inline a:hover {
    color: #0d6efd;
}

/* Media Queries */
@media (max-width: 768px) {
    .footer-title:after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .col-md-6 {
        text-align: center;
    }
    
    .social-links {
        justify-content: center;
    }
    
    .payment-methods,
    .shipping-methods {
        justify-content: center;
    }
}
</style><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
