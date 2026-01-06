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
                            <img src="{{ asset('images/logo-bjbo.png') }}" alt="logo" class="img-fluid">
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