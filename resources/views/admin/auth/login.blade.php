<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/assets/"
  data-template="vertical-menu-template-free"
>
<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no"
  />

  <title>Login | {{ config('app.name', 'BJBO') }}</title>

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

  <!-- Page -->
  <link rel="stylesheet" href="/assets/vendor/css/pages/page-auth.css" />
</head>

<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">

        <!-- Login Card -->
        <div class="card">
          <div class="card-body">

            <!-- Logo -->
            <div class="app-brand justify-content-center mb-4">
              <a href="#" class="app-brand-link gap-2">
                <span class="app-brand-logo">
                  <img src="{{ asset('assets/img/bjbo.jpeg') }}"
                       alt="BJBO"
                       style="height:120px;border-radius:12px">
                </span>
              </a>
            </div>

            <h4 class="mb-2 text-center">Dashboard</h4>
            <p class="mb-4 text-center text-muted">
              Manage BJBO through the admin dashboard
            </p>

            <!-- Error -->
            @if ($errors->any())
              <div class="alert alert-danger">
                {{ $errors->first() }}
              </div>
            @endif

            <!-- Form -->
            <form method="POST" action="{{ route('admin.login.submit') }}">
              @csrf

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  placeholder="admin@example.com"
                  required
                />
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label">Password</label>
                <div class="input-group input-group-merge">
                    <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control"
                    placeholder="••••••••"
                    required
                    />
                    <span class="input-group-text cursor-pointer" id="togglePassword">
                    <i class="bx bx-hide"></i>
                    </span>
                </div>
                </div>


              <button class="btn btn-primary d-grid w-100">
                Login
              </button>
            </form>

          </div>
        </div>
        <!-- /Login Card -->

      </div>
    </div>
  </div>

  <!-- Core JS -->
  <script src="/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="/assets/vendor/libs/popper/popper.js"></script>
  <script src="/assets/vendor/js/bootstrap.js"></script>
  <script src="/assets/vendor/js/menu.js"></script>
  <script>
  const togglePassword = document.querySelector('#togglePassword');
  const passwordInput = document.querySelector('#password');
  const icon = togglePassword.querySelector('i');

  togglePassword.addEventListener('click', function () {
    const type =
      passwordInput.getAttribute('type') === 'password'
        ? 'text'
        : 'password';
    passwordInput.setAttribute('type', type);

    icon.classList.toggle('bx-hide');
    icon.classList.toggle('bx-show');
  });
</script>

</body>
</html>
