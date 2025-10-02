<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | SIXTEEN CLOTHING</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url("{{ asset('storage/images/products-heading.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            background-position: center;
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
            /* خليتها افتح */
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .register-container {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.93);
            /* برضو فتحته شوية */
            padding: 40px 30px;
            border-radius: 15px;
            margin-top: 80px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            animation: fadeIn 1s ease-in-out;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 40px;
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
        <div class="col-md-6 register-container">
            <div class="icon-box">
                <i class="fa fa-user-plus"></i>
            </div>
            <h3 class="text-center mb-4">Create Your Account</h3>

            {{-- عرض الأخطاء --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('storeRegister') }}" method="POST">
                @csrf

                <!-- Full Name -->
                <div class="mb-3 position-relative">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                        placeholder="Full Name" required>
                </div>

                <!-- Email -->
                <div class="mb-3 position-relative">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                        placeholder="Email Address" required>
                </div>

                <!-- Phone -->
                <div class="mb-3 position-relative">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="form-control"
                        placeholder="Phone" required>
                </div>

                <!-- Password -->
                <div class="mb-3 position-relative">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3 position-relative">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Confirm Password" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus me-2"></i>Register</button>
                </div>

                <div class="text-center mt-4 links">
                    Already have an account? <a href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i> Login
                        here</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
