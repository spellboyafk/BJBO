<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/assets/"
  data-template="vertical-menu-template-free"
>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>@yield('title', 'BJBO Admin')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
    rel="stylesheet"
  />

  <!-- Icons -->
  <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="/assets/vendor/css/core.css" />
  <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" />
  <link rel="stylesheet" href="/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  @stack('css')

  <!-- Helpers -->
  <script src="/assets/vendor/js/helpers.js"></script>
  <script src="/assets/js/config.js"></script>
</head>

<body>

<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">

    <!-- SIDEBAR -->
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
          <span class="app-brand-logo demo">
            <img src="{{ asset('assets/img/bjbo.jpeg') }}"
                 alt="BJBO"
                 style="height: 120px; width: 150px; object-fit: cover; border-radius: 16px;">
          </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link ms-auto d-block d-xl-none">
          <i class="bx bx-chevron-left bx-sm"></i>
        </a>
      </div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">

        <li class="menu-item {{ request()->is('dashboard*') ? 'active' : '' }}">
          <a href="{{ route('dashboard') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div>Dashboard</div>
          </a>
      </li>

        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Manajemen Produk</span>
        </li>

        <li class="menu-item {{ request()->routeIs('products.*') ? 'active' : '' }}">
          <a href="{{ route('products.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-box"></i>
            <div>Produk</div>
          </a>
        </li>

        <li class="menu-item {{ request()->routeIs('promos.*') ? 'active' : '' }}">
          <a href="{{ route('promos.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-purchase-tag"></i>
            <div>Promo</div>
          </a>
        </li>

        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Transaksi</span>
        </li>

        <li class="menu-item {{ request()->routeIs('orders.*') ? 'active' : '' }}">
          <a href="{{ route('orders.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-cart"></i>
            <div>Orders</div>
          </a>
        </li>

        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Pengguna</span>
        </li>

        <li class="menu-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
          <a href="{{ route('users.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div>Users</div>
          </a>
        </li>

      </ul>
    </aside>

    <!-- PAGE -->
    <div class="layout-page">

      <!-- NAVBAR -->
      <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached bg-navbar-theme">
        <div class="navbar-nav-right d-flex align-items-center w-100">

          <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
              <i class="bx bx-search fs-4 lh-0"></i>
              <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." />
            </div>
          </div>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown-user dropdown">
              <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                  <img src="/assets/img/avatars/1.png" class="rounded-circle" />
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li class="px-3 py-2">
                  <strong>{{ auth()->user()->name ?? 'Admin' }}</strong><br>
                  <small>{{ auth()->user()->role ?? 'Admin' }}</small>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="dropdown-item">
                      <i class="bx bx-power-off me-2"></i> Logout
                    </button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>

        </div>
      </nav>

      <!-- CONTENT -->
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
          @yield('content')
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Core JS -->
<script src="/assets/vendor/libs/jquery/jquery.js"></script>
<script src="/assets/vendor/js/bootstrap.js"></script>

@stack('js')

</body>
</html>
