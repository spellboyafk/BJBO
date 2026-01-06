<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - BJBO</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            height: 100vh;
            overflow: hidden;
        }
        
        .auth-container {
            display: flex;
            height: 100vh;
        }
        
        /* Left Side - Brand */
        .brand-side {
            flex: 1;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px;
            position: relative;
            overflow: hidden;
        }
        
        .brand-side::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            top: -200px;
            right: -200px;
        }
        
        .brand-side::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
            bottom: -100px;
            left: -100px;
        }
        
        .brand-content {
            position: relative;
            z-index: 1;
            color: white;
            max-width: 500px;
        }
        
        .brand-logo {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .brand-tagline {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
            opacity: 0.95;
        }
        
        .brand-description {
            font-size: 16px;
            line-height: 1.6;
            opacity: 0.85;
        }
        
        /* Right Side - Form */
        .form-side {
            flex: 1;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }
        
        .form-container {
            width: 100%;
            max-width: 420px;
        }
        
        .form-header {
            margin-bottom: 40px;
        }
        
        .form-header h1 {
            font-size: 32px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 8px;
        }
        
        .form-header p {
            font-size: 15px;
            color: #6b7280;
        }
        
        .form-label {
            font-weight: 600;
            color: #374151;
            font-size: 14px;
            margin-bottom: 8px;
            display: block;
        }
        
        .input-group-custom {
            position: relative;
            margin-bottom: 20px;
        }
        
        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 18px;
        }
        
        .form-control {
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 14px 16px 14px 46px;
            font-size: 15px;
            transition: all 0.3s;
            width: 100%;
        }
        
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            outline: none;
        }
        
        .form-control::placeholder {
            color: #d1d5db;
        }
        
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        
        .custom-checkbox {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .custom-checkbox input {
            width: 18px;
            height: 18px;
            margin-right: 8px;
            cursor: pointer;
            accent-color: #667eea;
        }
        
        .custom-checkbox label {
            font-size: 14px;
            color: #6b7280;
            cursor: pointer;
            margin: 0;
        }
        
        .link-primary {
            font-size: 14px;
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }
        
        .link-primary:hover {
            color: #5568d3;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-weight: 600;
            font-size: 15px;
            width: 100%;
            color: white;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 28px 0;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .divider span {
            padding: 0 16px;
            color: #9ca3af;
            font-size: 14px;
            font-weight: 500;
        }
        
        .social-login {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 28px;
        }
        
        .btn-social {
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 12px;
            background: white;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .btn-social:hover {
            border-color: #667eea;
            background: #f9fafb;
        }
        
        .footer-text {
            text-align: center;
            font-size: 14px;
            color: #6b7280;
        }
        
        .footer-text a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }
        
        .footer-text a:hover {
            text-decoration: underline;
        }
        
        .alert {
            border-radius: 12px;
            border: none;
            padding: 14px 18px;
            margin-bottom: 24px;
            font-size: 14px;
        }
        
        .alert-danger {
            background: #fef2f2;
            color: #991b1b;
            border-left: 4px solid #dc2626;
        }
        
        .alert-success {
            background: #f0fdf4;
            color: #166534;
            border-left: 4px solid #16a34a;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .brand-side {
                display: none;
            }
            
            .form-side {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="auth-container">
        <!-- Left Side - Brand -->
        <div class="brand-side">
            <div class="brand-content">
                <div class="brand-logo">🍎 BJBO</div>
                <h2 class="brand-tagline">Fresh Fruits, Delivered Fast</h2>
                <p class="brand-description">
                    Nikmati buah-buahan segar berkualitas premium dari Bengkalis. 
                    Pesan sekarang dan dapatkan pengiriman cepat langsung ke pintu rumah Anda.
                </p>
            </div>
        </div>

        <!-- Right Side - Form -->
        <div class="form-side">
            <div class="form-container">
                <!-- Header -->
                <div class="form-header">
                    <h1>Welcome back</h1>
                    <p>Sign in to your BJBO account</p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success">
                        <i class="bi bi-check-circle me-2"></i>{{ session('status') }}
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        <strong>Authentication failed.</strong> Please check your credentials.
                    </div>
                @endif

                <!-- Social Login (Optional) -->
                <div class="social-login">
                    <button type="button" class="btn-social">
                        <i class="bi bi-google"></i>
                        Google
                    </button>
                    <button type="button" class="btn-social">
                        <i class="bi bi-apple"></i>
                        Apple
                    </button>
                </div>

                <div class="divider">
                    <span>or continue with email</span>
                </div>

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="input-group-custom">
                        <label for="email" class="form-label">Email address</label>
                        <i class="bi bi-envelope input-icon"></i>
                        <input type="email" 
                               class="form-control" 
                               id="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               placeholder="you@example.com"
                               required 
                               autofocus>
                    </div>

                    <!-- Password -->
                    <div class="input-group-custom">
                        <label for="password" class="form-label">Password</label>
                        <i class="bi bi-lock input-icon"></i>
                        <input type="password" 
                               class="form-control" 
                               id="password" 
                               name="password" 
                               placeholder="Enter your password"
                               required>
                    </div>

                    <!-- Options -->
                    <div class="form-options">
                        <div class="custom-checkbox">
                            <input type="checkbox" id="remember_me" name="remember">
                            <label for="remember_me">Remember me</label>
                        </div>
                        
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="link-primary">
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="btn-primary">
                        Sign in to BJBO
                    </button>
                </form>

                <!-- Footer -->
                <div class="footer-text mt-4">
                    Don't have an account? 
                    <a href="{{ route('register') }}">Create account</a>
                </div>

                <div class="footer-text mt-3">
                    <a href="{{ url('/') }}">
                        <i class="bi bi-arrow-left me-1"></i>
                        Back to home
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
