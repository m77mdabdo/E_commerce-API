<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | SIXTEEN CLOTHING</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url("{{  asset('storage/images/product_03.jpg')}}") no-repeat center center fixed;
            background-size: cover;
            position: relative;
            min-height: 100vh;
        }

        /* Overlay */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .login-container {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px 30px;
            border-radius: 15px;
            margin-top: 80px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            animation: fadeIn 1s ease-in-out;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 40px; /* مساحة أكبر علشان الأيقونة */
        }

        .input-group-text {
            background: transparent;
            border: none;
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #3498db;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #3498db;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .icon-box {
            background: linear-gradient(135deg, #3498db, #2980b9);
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            margin: 0 auto 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .links {
            font-size: 14px;
        }

        .links a {
            color: #3498db;
            font-weight: 500;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-5 login-container">
            <div class="icon-box">
                <i class="fa fa-user-circle"></i>
            </div>
            <h3 class="text-center mb-4">Login to Your Account</h3>

            <form method="POST" action="{{ route('storeLogin') }}">
                @csrf

                <!-- Email Input -->
                <div class="mb-3 position-relative">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-3 position-relative">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in-alt me-2"></i>Login</button>
                </div>
            </form>

            <!-- Register Link -->
            <div class="text-center mt-4 links">
                Don’t have an account? <a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Register Here</a>
            </div>
        </div>
    </div>

</body>
</html>
