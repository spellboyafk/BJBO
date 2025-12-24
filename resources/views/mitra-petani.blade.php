<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Buah Impor - BJBO</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <defs>
            <symbol xmlns="http://www.w3.org/2000/svg" id="menu" viewBox="0 0 24 24"><path fill="currentColor" d="M2 6a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1m0 6.032a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1m1 5.033a1 1 0 1 0 0 2h18a1 1 0 0 0 0-2z"/></symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24"><path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"/></symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="9" r="3"/><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M17.97 20c-.16-2.892-1.045-5-5.97-5s-5.81 2.108-5.97 5"/></g></symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="wishlist" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 16.09v-4.992c0-4.29 0-6.433-1.318-7.766C18.364 2 16.242 2 12 2C7.757 2 5.636 2 4.318 3.332C3 4.665 3 6.81 3 11.098v4.993c0 3.096 0 4.645.734 5.321c.35.323.792.526 1.263.58c.987.113 2.14-.907 4.445-2.946c1.02-.901 1.529-1.352 2.118-1.47c.29-.06.59-.06.88 0c.59.118 1.099.569 2.118 1.47c2.305 2.039 3.458 3.059 4.445 2.945c.47-.053.913-.256 1.263-.579c.734-.676.734-2.224.734-5.321Z"/><path stroke-linecap="round" d="M15 6H9"/></g></symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-bag" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3.864 16.455c-.858-3.432-1.287-5.147-.386-6.301C4.378 9 6.148 9 9.685 9h4.63c3.538 0 5.306 0 6.207 1.154c.901 1.153.472 2.87-.386 6.301c-.546 2.183-.818 3.274-1.632 3.91c-.814.635-1.939.635-4.189.635h-4.63c-2.25 0-3.375 0-4.189-.635c-.814-.636-1.087-1.727-1.632-3.91Z"/><path d="m19.5 9.5l-.71-2.605c-.274-1.005-.411-1.507-.692-1.886A2.5 2.5 0 0 0 17 4.172C16.56 4 16.04 4 15 4M4.5 9.5l.71-2.605c.274-1.005.411-1.507.692-1.886A2.5 2.5 0 0 1 7 4.172C7.44 4 7.96 4 9 4"/><path d="M9 4a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2h-4a1 1 0 0 1-1-1Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 13v4m8-4v4m-4-4v4"/></g></symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24"><path fill="currentColor" d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z"/></symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24"><path fill="currentColor" d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z"/></symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="star-full" viewBox="0 0 24 24"><path fill="currentColor" d="m3.1 11.3l3.6 3.3l-1 4.6c-.1.6.1 1.2.6 1.5c.2.2.5.3.8.3c.2 0 .4 0 .6-.1c0 0 .1 0 .1-.1l4.1-2.3l4.1 2.3s.1 0 .1.1c.5.2 1.1.2 1.5-.1c.5-.3.7-.9.6-1.5l-1-4.6c.4-.3 1-.9 1.6-1.5l1.9-1.7l.1-.1c.4-.4.5-1 .3-1.5s-.6-.9-1.2-1h-.1l-4.7-.5l-1.9-4.3s0-.1-.1-.1c-.1-.7-.6-1-1.1-1c-.5 0-1 .3-1.3.8c0 0 0 .1-.1.1L8.7 8.2L4 8.7h-.1c-.5.1-1 .5-1.2 1c-.1.6 0 1.2.4 1.6"/></symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="star-half" viewBox="0 0 24 24"><path fill="currentColor" d="m3.1 11.3l3.6 3.3l-1 4.6c-.1.6.1 1.2.6 1.5c.2.2.5.3.8.3c.2 0 .4 0 .6-.1c0 0 .1 0 .1-.1l4.1-2.3l4.1 2.3s.1 0 .1.1c.5.2 1.1.2 1.5-.1c.5-.3.7-.9.6-1.5l-1-4.6c.4-.3 1-.9 1.6-1.5l1.9-1.7l.1-.1c.4-.4.5-1 .3-1.5s-.6-.9-1.2-1h-.1l-4.7-.5l-1.9-4.3s0-.1-.1-.1c-.1-.7-.6-1-1.1-1c-.5 0-1 .3-1.3.8c0 0 0 .1-.1.1L8.7 8.2L4 8.7h-.1c-.5.1-1 .5-1.2 1c-.1.6 0 1.2.4 1.6m8.9 5V5.8l1.7 3.8c.1.3.5.5.8.6l4.2.5l-3.1 2.8c-.3.2-.4.6-.3 1c0 .2.5 2.2.8 4.1l-3.6-2.1c-.2-.2-.3-.2-.5-.2"/></symbol>
        </defs>
    </svg>

    <div class="preloader-wrapper">
        <div class="preloader"></div>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart">
        <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                    <span class="badge bg-primary rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Growers cider</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Fresh grapes</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Heinz tomato ketchup</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>
                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header justify-content-between">
            <h4 class="fw-normal text-uppercase fs-6">Menu</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">
                <li class="nav-item border-dashed">
                    <a href="{{ route('buah.lokal') }}" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                        <span>Buah Lokal</span>
                    </a>
                </li>
                <li class="nav-item border-dashed">
                    <a href="{{ route('buah.impor') }}" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                        <span>Buah Impor</span>
                    </a>
                </li>
                <li class="nav-item border-dashed">
                    <a href="{{ route('promo') }}" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                        <span>Promo</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <header>
        <div class="container-fluid">
            <div class="row py-3 border-bottom">
                <div class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
                    <div class="d-flex align-items-center my-3 my-sm-0">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.svg') }}" alt="logo" class="img-fluid">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
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
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pe-3" role="button" id="pages" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu border-0 p-3 rounded-0 shadow" aria-labelledby="pages">
                                <li><a href="index.html" class="dropdown-item">About Us</a></li>
                                <li><a href="index.html" class="dropdown-item">Shop</a></li>
                                <li><a href="index.html" class="dropdown-item">Single Product</a></li>
                                <li><a href="index.html" class="dropdown-item">Cart</a></li>
                                <li><a href="index.html" class="dropdown-item">Checkout</a></li>
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

           </style>
</head>
<body>


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