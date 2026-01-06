<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    
    <title>@yield('title', config('app.name', 'BJBO') . ' Admin')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    @stack('css')

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>
    <script src="/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{ route('dashboard') }}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/bjbo.jpeg') }}"
                     alt="BJBO"
                     style="height: 140px; width: 170px; object-fit: cover; border-radius: 20px;">
              </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">

            {{-- Dashboard --}}
            <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
              <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
              </a>
            </li>

            {{-- Produk --}}
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Manajemen Produk</span>
            </li>

            <li class="menu-item">
              <a href="{{ route('products.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div>Produk</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="{{ route('buah-lokals.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-leaf"></i>
                <div>Buah Lokal</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="{{ route('buah-impors.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-world"></i>
                <div>Buah Impor</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="{{ route('promos.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-purchase-tag"></i>
                <div>Promo</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="{{ route('mitra-petanis.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div>Mitra Petani</div>
              </a>
            </li>

            {{-- Transaksi --}}
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Transaksi</span>
            </li>

            <li class="menu-item">
              <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-receipt"></i>
                <div>Pesanan</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="{{ route('order-items.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div>Item Pesanan</div>
              </a>
            </li>

            {{-- Pengguna --}}
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pengguna</span>
            </li>

            <li class="menu-item">
              <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div>Users</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="{{ route('user-profiles.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-id-card"></i>
                <div>Profil User</div>
              </a>
            </li>

          </ul>
        </aside>

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="grow">
                            <span class="fw-semibold d-block">{{ auth()->user()->name ?? 'Admin' }}</span>
                            <small class="text-muted">{{ auth()->user()->role ?? 'Admin' }}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl grow container-p-y">
              @hasSection('page_header')
              @yield('page_header')
              @endif

              @yield('content')
            </div>
            <!-- / Content -->

           <footer class="bg-dark text-light pt-5 pb-3 mt-5">
           <div class="container">
    <div class="row">

      <!-- Deskripsi -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold text-white">BJBO – Bengkalis Jual Buah Online</h5>
        <p class="text-secondary">
          Platform belanja buah dan sayuran segar terpercaya di Bengkalis.
          Menghubungkan konsumen dengan toko lokal terbaik.
        </p>
      </div>

      <!-- Menu -->
      <div class="col-md-2 mb-4">
        <h6 class="fw-bold text-white">Menu</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="footer-link">Tentang Kami</a></li>
          <li><a href="#" class="footer-link">Belanja</a></li>
          <li><a href="#" class="footer-link">Promo</a></li>
          <li><a href="#" class="footer-link">Blog</a></li>
          <li><a href="#" class="footer-link">Kontak</a></li>
        </ul>
      </div>

      <!-- Mitra -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold text-white">Mitra</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="footer-link">Daftar Mitra</a></li>
          <li><a href="#" class="footer-link">Login Mitra</a></li>
          <li><a href="#" class="footer-link">Panduan Mitra</a></li>
          <li><a href="#" class="footer-link">FAQ</a></li>
        </ul>
      </div>

      <!-- Kontak -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold text-white">Kontak</h6>
        <p class="mb-1">📍 Bengkalis, Riau</p>
        <p class="mb-1">📞 +62 812-3456-7890</p>
        <p class="mb-1">✉️ info@bjbo.com</p>
      </div>

    </div>

    <hr class="border-secondary">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
      <small class="text-secondary">
        © 2024 BJBO – Bengkalis Jual Buah Online. All Rights Reserved.
      </small>
      <div>
        <a href="#" class="footer-link me-2">Kebijakan Privasi</a>
        |
        <a href="#" class="footer-link ms-2">Syarat & Ketentuan</a>
      </div>
    </div>
  </div>
</footer>

</html>