<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - BJBO</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
            font-family: 'Inter', 'Nunito', sans-serif;
        }
        
        .cart-header {
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }
        
        .cart-item {
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .cart-item:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .cart-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }
        
        .quantity-control {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .quantity-control button {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            border: 1px solid #dee2e6;
            background: white;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .quantity-control button:hover {
            background: #667eea;
            color: white;
            border-color: #667eea;
        }
        
        .quantity-control input {
            width: 60px;
            text-align: center;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            padding: 5px;
        }
        
        .cart-summary {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            position: sticky;
            top: 20px;
        }
        
        .btn-checkout {
            background: #667eea;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s;
        }
        
        .btn-checkout:hover {
            background: #5568d3;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
        }
        
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
        }
    </style>
</head>
<body>

    <!-- SVG Icons (sama seperti halaman Buah Lokal) -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <defs>
            <symbol id="user" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="12" cy="9" r="3"/>
                    <circle cx="12" cy="12" r="10"/>
                    <path stroke-linecap="round" d="M17.97 20c-.16-2.892-1.045-5-5.97-5s-5.81 2.108-5.97 5"/>
                </g>
            </symbol>
            <symbol id="shopping-bag" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M3.864 16.455c-.858-3.432-1.287-5.147-.386-6.301C4.378 9 6.148 9 9.685 9h4.63c3.538 0 5.306 0 6.207 1.154c.901 1.153.472 2.87-.386 6.301c-.546 2.183-.818 3.274-1.632 3.91c-.814.635-1.939.635-4.189.635h-4.63c-2.25 0-3.375 0-4.189-.635c-.814-.636-1.087-1.727-1.632-3.91Z"/>
                </g>
            </symbol>
        </defs>
    </svg>

    <!-- Header Navigation (Sama dengan Buah Lokal) -->
    <header>
        <div class="container-fluid">
            <div class="row py-3 border-bottom">
                <div class="col-sm-4 col-lg-2 text-center text-sm-start">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.svg') }}" alt="logo" class="img-fluid">
                    </a>
                </div>

                <div class="col-lg-4">
                    <ul class="navbar-nav list-unstyled d-flex flex-row gap-3 gap-lg-5 justify-content-center align-items-center mb-0 fw-bold text-uppercase text-dark">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('buah.lokal') }}" class="nav-link">Buah Lokal</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('buah.impor') }}" class="nav-link">Buah Impor</a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-8 col-lg-2 d-flex gap-5 align-items-center justify-content-center justify-content-sm-end">
                    <ul class="d-flex justify-content-end list-unstyled m-0">
                        <!-- User Dropdown -->
                        <li>
                            @auth
                                <div class="dropdown">
                                    <a href="#" class="p-2 mx-1 dropdown-toggle" data-bs-toggle="dropdown">
                                        <svg width="24" height="24"><use xlink:href="#user"></use></svg>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item text-danger">Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="p-2 mx-1">
                                    <svg width="24" height="24"><use xlink:href="#user"></use></svg>
                                </a>
                            @endauth
                        </li>
                        
                        <!-- Shopping Cart -->
                        <li>
                            <a href="{{ route('cart.index') }}" class="p-2 mx-1 position-relative">
                                <svg width="24" height="24"><use xlink:href="#shopping-bag"></use></svg>
                                
                                @auth
                                    @php
                                        $cartCount = App\Models\Cart::where('user_id', Auth::id())->sum('quantity');
                                    @endphp
                                    
                                    @if($cartCount > 0)
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px;">
                                            {{ $cartCount }}
                                        </span>
                                    @endif
                                @endauth
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Cart Header -->
    <div class="cart-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0"><i class="bi bi-cart3 me-2"></i> Keranjang Belanja</h2>
                <a href="{{ route('buah.lokal') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-2"></i>Lanjut Belanja
                </a>
            </div>
        </div>
    </div>

    <!-- Cart Content -->
    <div class="container pb-5">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-8">
                @forelse($cartItems as $item)
                    <div class="cart-item">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                @if($item->product_image)
                                    <img src="{{ asset('storage/' . $item->product_image) }}" alt="{{ $item->product_name }}">
                                @else
                                    <div style="width: 100px; height: 100px;" class="bg-light rounded d-flex align-items-center justify-content-center">
                                        <i class="bi bi-image text-muted"></i>
                                    </div>
                                @endif
                            </div>
                            
                            <div class="col-md-4">
                                <h5 class="mb-1">{{ $item->product_name }}</h5>
                                <p class="text-muted mb-0">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                            </div>
                            
                            <div class="col-md-3">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="quantity-control">
                                        <button type="button" onclick="decreaseQty({{ $item->id }})">-</button>
                                        <input type="number" id="qty-{{ $item->id }}" name="quantity" value="{{ $item->quantity }}" min="1" readonly>
                                        <button type="button" onclick="increaseQty({{ $item->id }})">+</button>
                                        <button type="submit" class="btn btn-sm btn-primary ms-2">
                                            <i class="bi bi-check"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="col-md-2">
                                <h5 class="text-primary mb-0">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</h5>
                            </div>
                            
                            <div class="col-md-1 text-end">
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus produk ini?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="empty-state">
                        <i class="bi bi-cart-x" style="font-size: 64px; color: #dee2e6;"></i>
                        <h4 class="mt-3">Keranjang Kosong</h4>
                        <p class="text-muted">Belum ada produk di keranjang Anda</p>
                        <a href="{{ route('buah.lokal') }}" class="btn btn-primary mt-3">Mulai Belanja</a>
                    </div>
                @endforelse
            </div>

            <!-- Cart Summary -->
            <div class="col-lg-4">
                <div class="cart-summary">
                    <h4 class="mb-4">Ringkasan Belanja</h4>
                    
                    <div class="d-flex justify-content-between mb-3">
                        <span>Subtotal ({{ $cartItems->count() }} item)</span>
                        <span class="fw-bold">Rp {{ number_format($total, 0, ',', '.') }}</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-3">
                        <span>Ongkir</span>
                        <span class="text-success fw-bold">GRATIS</span>
                    </div>
                    
                    <hr>
                    
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="mb-0">Total</h5>
                        <h5 class="mb-0 text-primary">Rp {{ number_format($total, 0, ',', '.') }}</h5>
                    </div>
                    
                    <button class="btn-checkout mb-3" onclick="alert('Fitur checkout akan segera hadir!')">
                        <i class="bi bi-credit-card me-2"></i>Checkout
                    </button>
                    
                    @if($cartItems->count() > 0)
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger w-100" onclick="return confirm('Kosongkan keranjang?')">
                                <i class="bi bi-trash me-2"></i>Kosongkan Keranjang
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function increaseQty(id) {
            let input = document.getElementById('qty-' + id);
            input.value = parseInt(input.value) + 1;
        }
        
        function decreaseQty(id) {
            let input = document.getElementById('qty-' + id);
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
            }
        }
    </script>
</body>
</html>
