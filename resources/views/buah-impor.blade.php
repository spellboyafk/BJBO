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

    <section class="py-5 mb-5" style="background: url('images/banner-1.jpg') no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="display-5 fw-bold mb-3">Buah Impor Premium</h1>
                    <p class="lead text-muted">Pilihan buah import berkualitas dari berbagai negara</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header d-flex flex-wrap justify-content-between my-4">
                        <h2 class="section-title">Buah Impor</h2>
                        <div class="d-flex align-items-center">
                            <a href="#" class="btn btn-primary rounded-1">View All</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
                        @foreach($buahImpor as $buah)
                        <div class="col">
                            <div class="product-item">
                                <figure>
                                    <a href="{{ route('buah.impor.show', $buah->id) }}" title="{{ $buah->nama }}">
                                        @if($buah->gambar)
                                            <img src="{{ asset('storage/' . $buah->gambar) }}" alt="{{ $buah->nama }}" class="tab-image">
                                        @else
                                            <img src="{{ asset('images/no-image.jpg') }}" alt="No Image" class="tab-image">
                                        @endif
                                    </a>
                                </figure>
                                <div class="d-flex flex-column text-center">
                                    <h3 class="fs-6 fw-normal">{{ $buah->nama }}</h3>
                                    <div>
                                        <span class="rating">
                                            <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                            <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                            <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                            <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                            <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                                        </span>
                                        <span>(222)</span>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <span class="text-dark fw-semibold">Rp {{ number_format($buah->harga, 0, ',', '.') }}</span>
                                        <span class="text-muted">/ {{ $buah->satuan }}</span>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted">Stok: {{ $buah->stok }} {{ $buah->satuan }}</small>
                                    </div>
                                    <div class="button-area p-3 pt-0">
                                        <div class="row g-1 mt-2">
                                            <div class="col-3">
                                                <input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1">
                                            </div>
                                            <div class="col-7">
                                                <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                    <svg width="18" height="18"><use xlink:href="#cart"></use></svg> Tambah keranjang
                                                </a>
                                            </div>
                                            <div class="col-2">
                                                <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6">
                                                    <svg width="18" height="18"><use xlink:href="#heart"></use></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>