<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BJBO - Bengkalis Jual Buah Online</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
<style>
/* --- Gaya yang Sudah Ada (Tidak Diubah) --- */
    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    
    header {
        background: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.08);
    }
    
    .navbar-nav .nav-link {
        color: #333;
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        transition: color 0.3s;
    }
    
    .navbar-nav .nav-link:hover {
        color: #0d6efd;
    }
    
    .search-bar {
        background: #f8f9fa;
        border-radius: 1rem;
    }
    
    .search-bar select,
    .search-bar input {
        border: 0;
        background: transparent;
    }
    
    .search-bar select:focus,
    .search-bar input:focus {
        outline: none;
        box-shadow: none;
    }
    
    .hero-section {
        background: linear-gradient(135deg, #ffd89b 0%, #ffc960 100%);
        min-height: 600px;
        position: relative;
        overflow: hidden;
        padding: 4rem 0;
    }
    
    .hero-content {
        position: relative;
        z-index: 2;
    }
    
    .hero-title {
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1rem;
    }
    
    .hero-title .primary-text {
        color: #0d6efd;
    }
    
    .hero-title .secondary-text {
        color: #333;
    }
    
    .hero-subtitle {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 2rem;
    }
    
    .btn-primary-custom {
        background: #0d6efd;
        color: white;
        padding: 1rem 2.5rem;
        font-size: 1.1rem;
        font-weight: 600;
        border: none;
        border-radius: 8px;
        margin-right: 1rem;
        transition: all 0.3s;
    }
    
    .btn-primary-custom:hover {
        background: #0b5ed7;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(13, 110, 253, 0.4);
    }
    
    .btn-secondary-custom {
        background: #333;
        color: white;
        padding: 1rem 2.5rem;
        font-size: 1.1rem;
        font-weight: 600;
        border: none;
        border-radius: 8px;
        transition: all 0.3s;
    }
    
    .btn-secondary-custom:hover {
        background: #555;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }
    
    .hero-image {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 50%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .fruit-image {
        max-width: 80%;
        height: auto;
        filter: drop-shadow(0 10px 30px rgba(0,0,0,0.2));
    }
    
    .navbar-toggler {
        border: none;
        padding: 0.5rem;
    }
    
    .navbar-toggler:focus {
        box-shadow: none;
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        .hero-image {
            position: relative;
            width: 100%;
            margin-top: 2rem;
        }
    }
    
    /* Partners Section Styles */
    .partners-section {
        background: #f8f9fa;
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 1rem;
    }
    
    .section-subtitle {
        font-size: 1.1rem;
        color: #666;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .benefit-card {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
        height: 100%;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    
    .benefit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }
    
    .benefit-icon {
        margin-bottom: 1.5rem;
    }
    
    .benefit-card h4 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 1rem;
    }
    
    .benefit-card p {
        color: #666;
        line-height: 1.6;
    }
    
    .requirements-card {
        background: white;
        padding: 2.5rem;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    
    .requirements-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .requirements-list li {
        padding: 1rem 0;
        border-bottom: 1px solid #e9ecef;
        display: flex;
        align-items: center;
        gap: 1rem;
        font-size: 1.05rem;
        color: #333;
    }
    
    .requirements-list li:last-child {
        border-bottom: none;
    }
    
    .process-step {
        text-align: center;
        padding: 1.5rem;
    }
    
    .step-number {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #0d6efd, #0b5ed7);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0 auto 1.5rem;
    }
    
    .process-step h5 {
        font-size: 1.2rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 0.75rem;
    }
    
    .process-step p {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    
    .cta-section {
        background: white;
        padding: 3rem 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    
    .cta-section h3 {
        font-size: 2rem;
        font-weight: 700;
        color: #333;
    }
    
    .cta-section p {
        font-size: 1.1rem;
        color: #666;
    }

/* --------------------------------------------------------------------------------------------------- */
/* --- TAMBAHAN CSS UNTUK PERBAIKAN LAYOUT KARTU MITRA (Mulai dari sini) --- */
/* --------------------------------------------------------------------------------------------------- */

.partner-store-card {
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    overflow: hidden; 
    margin-bottom: 25px; 
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    /* Penting: Mengubah Kartu menjadi Flex Container Vertikal */
    display: flex; 
    flex-direction: column; 
    height: 100%; 
}

/* --- Pengaturan Foto --- */
.store-image {
    /* Tinggi foto yang seragam di bagian atas kartu */
    height: 200px; 
    width: 100%;
    overflow: hidden;
}

.store-image img {
    width: 100%;
    height: 100%;
    /* Memastikan gambar terpotong rapi tanpa terdistorsi */
    object-fit: cover; 
    transition: transform 0.3s ease;
}

.partner-store-card:hover .store-image img {
    transform: scale(1.05);
}

/* --- Styling Informasi Toko --- */
.store-info {
    padding: 15px 20px;
    /* Memungkinkan bagian info memenuhi sisa ruang vertikal */
    flex-grow: 1; 
    display: flex;
    flex-direction: column;
}

.store-name {
    font-size: 1.35em;
    color: #38761d; /* Menggunakan warna hijau untuk kontras */
    margin-top: 0;
    margin-bottom: 5px;
}

.store-rating {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.stars {
    color: gold; 
    font-size: 1.1em;
    margin-right: 5px;
}

.rating-text {
    font-size: 0.9em;
    color: #666;
}

.store-description {
    font-size: 0.9em;
    color: #555;
    margin-bottom: 15px;
}

/* Styling Alamat dan Kontak */
.store-address,
.store-contact {
    display: flex;
    align-items: center;
    font-size: 0.85em;
    color: #777;
    margin-bottom: 8px;
}

.store-address svg,
.store-contact svg {
    margin-right: 8px;
    /* Mengatur warna ikon agar serasi */
    stroke: #0d6efd; 
}
.store-contact svg path{
    fill: #0d6efd;
    stroke: none;
}


/* --- Styling Tombol Aksi --- */
.store-actions {
    margin-top: auto; /* Mendorong tombol ke bagian bawah kartu */
    padding-top: 10px;
    border-top: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    gap: 10px;
}

.btn-visit-store,
.btn-whatsapp {
    text-align: center;
    padding: 8px 12px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    flex: 1;
    transition: background-color 0.2s;
    font-size: 0.9em;
}

.btn-visit-store {
    background-color: #f7f7f7;
    color: #0d6efd;
    border: 1px solid #0d6efd;
}

.btn-visit-store:hover {
    background-color: #e9e9e9;
}

.btn-whatsapp {
    background-color: #25d366; /* Hijau WhatsApp */
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-whatsapp svg {
    margin-right: 5px;
    fill: white;
}

.btn-whatsapp:hover {
    background-color: #128c7e;
}

/* --- Responsiveness Tambahan untuk Tombol --- */
@media (max-width: 576px) {
    .store-actions {
        flex-direction: column; 
    }
}

/* --------------------------------------------------------------------------------------------------- */
/* --- Selesai Tambahan CSS --- */
/* --------------------------------------------------------------------------------------------------- */

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
                <img src="{{ asset('images/logo.svg') }}" alt="logo" class="img-fluid">
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

    <!-- Shop Partners Section -->
    <section class="partners-section py-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="section-title">Mitra Toko Kami</h2>
                <p class="section-subtitle">Bergabunglah dengan ratusan toko yang telah mempercayai BJBO untuk meningkatkan penjualan mereka</p>
            </div>

            <!-- Benefits Cards -->
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0d6efd" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <h4>Operasional 24/7</h4>
                        <p>Platform kami aktif sepanjang waktu, memungkinkan pelanggan berbelanja kapan saja</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0d6efd" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h4>Jangkauan Luas</h4>
                        <p>Akses ke ribuan pelanggan potensial di seluruh Bengkalis dan sekitarnya</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0d6efd" stroke-width="2">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <h4>Komisi Kompetitif</h4>
                        <p>Sistem komisi yang adil dan transparan dengan pembayaran tepat waktu</p>
                    </div>
                </div>
            </div>

            <!-- Partner Requirements -->
            <div class="requirements-section mb-5">
                <h3 class="text-center mb-4">Persyaratan Mitra</h3>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="requirements-card">
                            <ul class="requirements-list">
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#27ae60" stroke="#27ae60" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    Memiliki izin usaha atau SIUP yang masih berlaku
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#27ae60" stroke="#27ae60" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    Menyediakan produk buah dan sayuran segar berkualitas
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#27ae60" stroke="#27ae60" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    Memiliki lokasi toko fisik di wilayah Bengkalis
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#27ae60" stroke="#27ae60" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    Bersedia mengikuti standar kualitas dan layanan BJBO
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#27ae60" stroke="#27ae60" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    Memiliki kemampuan untuk memproses pesanan online
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Registration Process -->
            <div class="process-section mb-5">
                <h3 class="text-center mb-4">Cara Bergabung</h3>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <h5>Daftar Online</h5>
                            <p>Isi formulir pendaftaran mitra dengan data lengkap toko Anda</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="process-step">
                            <div class="step-number">2</div>
                            <h5>Verifikasi</h5>
                            <p>Tim kami akan melakukan verifikasi dokumen dan kunjungan toko</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="process-step">
                            <div class="step-number">3</div>
                            <h5>Pelatihan</h5>
                            <p>Dapatkan pelatihan gratis penggunaan sistem dan standar layanan</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="process-step">
                            <div class="step-number">4</div>
                            <h5>Mulai Jualan</h5>
                            <p>Toko Anda aktif dan siap menerima pesanan dari pelanggan</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Partner Stores Display -->
            <div class="partner-stores-section mb-5">
                <h3 class="text-center mb-5">Toko Mitra Kami</h3>
                <div class="row g-4">
                    <!-- Partner Store 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="partner-store-card">
                            <div class="store-image">
                                <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?w=400&h=300&fit=crop" alt="Toko Buah Segar Jaya">
                            </div>
                            <div class="store-info">
                                <h4 class="store-name">Toko Buah Segar Jaya</h4>
                                <div class="store-rating">
                                    <span class="stars">★★★★★</span>
                                    <span class="rating-text">4.8 (120 ulasan)</span>
                                </div>
                                <p class="store-description">Menyediakan buah-buahan segar premium dan organik pilihan dengan harga terjangkau</p>
                                <div class="store-address">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <span>Jl. Antang Kalang No. 45, Bengkalis</span>
                                </div>
                                <div class="store-contact">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <span>+62 812-3456-7890</span>
                                </div>
                                <div class="store-actions">
                                    <a href="#" class="btn-visit-store">Kunjungi Toko</a>
                                    <a href="https://wa.me/6281234567890" class="btn-whatsapp" target="_blank">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                        WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Partner Store 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="partner-store-card">
                            <div class="store-image">
                                <img src="https://images.unsplash.com/photo-1488459716781-31db52582fe9?w=400&h=300&fit=crop" alt="Fresh Market Bengkalis">
                            </div>
                            <div class="store-info">
                                <h4 class="store-name">Fresh Market Bengkalis</h4>
                                <div class="store-rating">
                                    <span class="stars">★★★★★</span>
                                    <span class="rating-text">4.9 (95 ulasan)</span>
                                </div>
                                <p class="store-description">Pusat buah dan sayuran segar dengan berbagai pilihan produk lokal dan impor</p>
                                <div class="store-address">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <span>Jl. Sudirman No. 123, Bengkalis</span>
                                </div>
                                <div class="store-contact">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <span>+62 813-5678-9012</span>
                                </div>
                                <div class="store-actions">
                                    <a href="#" class="btn-visit-store">Kunjungi Toko</a>
                                    <a href="https://wa.me/6281356789012" class="btn-whatsapp" target="_blank">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                        WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Partner Store 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="partner-store-card">
                            <div class="store-image">
                                <img src="data:image/jpeg;base64,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" alt="Pasar Organik Sehat">
                            </div>
                            <div class="store-info">
                                <h4 class="store-name">Pasar Organik Sehat</h4>
                                <div class="store-rating">
                                    <span class="stars">★★★★☆</span>
                                    <span class="rating-text">4.7 (78 ulasan)</span>
                                </div>
                                <p class="store-description">Spesialis produk organik dan buah-buahan bebas pestisida untuk hidup lebih sehat</p>
                                <div class="store-address">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <span>Jl. Kartini No. 67, Bengkalis</span>
                                </div>
                                <div class="store-contact">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <span>+62 814-7890-1234</span>
                                </div>
                                <div class="store-actions">
                                    <a href="#" class="btn-visit-store">Kunjungi Toko</a>
                                    <a href="https://wa.me/6281478901234" class="btn-whatsapp" target="_blank">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                        WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Partner Store 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="partner-store-card">
                            <div class="store-image">
                                <img src="https://images.unsplash.com/photo-1578916171728-46686eac8d58?w=400&h=300&fit=crop" alt="Toko Buah Makmur">
                            </div>
                            <div class="store-info">
                                <h4 class="store-name">Toko Buah Makmur</h4>
                                <div class="store-rating">
                                    <span class="stars">★★★★★</span>
                                    <span class="rating-text">4.8 (156 ulasan)</span>
                                </div>
                                <p class="store-description">Toko buah terlengkap dengan harga grosir untuk kebutuhan rumah tangga dan usaha</p>
                                <div class="store-address">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <span>Jl. Pasar Raya No. 89, Bengkalis</span>
                                </div>
                                <div class="store-contact">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <span>+62 815-2345-6789</span>
                                </div>
                                <div class="store-actions">
                                    <a href="#" class="btn-visit-store">Kunjungi Toko</a>
                                    <a href="https://wa.me/6281523456789" class="btn-whatsapp" target="_blank">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                        WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Partner Store 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="partner-store-card">
                            <div class="store-image">
                                <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?w=400&h=300&fit=crop" alt="Sayur Buah Sejahtera">
                            </div>
                            <div class="store-info">
                                <h4 class="store-name">Sayur Buah Sejahtera</h4>
                                <div class="store-rating">
                                    <span class="stars">★★★★★</span>
                                    <span class="rating-text">4.9 (203 ulasan)</span>
                                </div>
                                <p class="store-description">Menyediakan buah dan sayuran segar langsung dari petani lokal setiap hari</p>
                                <div class="store-address">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <span>Jl. Senggoro No. 34, Bengkalis</span>
                                </div>
                                <div class="store-contact">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <span>+62 816-6789-0123</span>
                                </div>
                                <div class="store-actions">
                                    <a href="#" class="btn-visit-store">Kunjungi Toko</a>
                                    <a href="https://wa.me/6281667890123" class="btn-whatsapp" target="_blank">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                        WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Partner Store 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="partner-store-card">
                            <div class="store-image">
                                <img src="data:image/jpeg;base64,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" alt="Buah Tropis Nusantara">
                            </div>
                            <div class="store-info">
                                <h4 class="store-name">Toko Buah Sijabat</h4>
                                <div class="store-rating">
                                    <span class="stars">★★★★★</span>
                                    <span class="rating-text">4.9 (809 ulasan)</span>
                                </div>
                                <p class="store-description">Menyediakan buah dan sayuran segar langsung dari petani lokal setiap hari</p>
                                <div class="store-address">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <span>Jl. Awang Mahmuda (Kos Raden) No. 34, Bengkalis</span>
                                </div>
                                <div class="store-contact">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <span>+62 816-6789-0123</span>
                                </div>
                                <div class="store-actions">
                                    <a href="#" class="btn-visit-store">Kunjungi Toko</a>
                                    <a href="https://wa.me/6281667890123" class="btn-whatsapp" target="_blank">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                        WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

    <!-- Offcanvas Mobile Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Shop</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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
</style>