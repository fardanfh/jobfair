<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <style>
        /* Navbar styles */
        .navbar-custom {
            background-color: #001830;
            /* Dark background */
            border-bottom: 1px solid #e5e5e5;
            /* Light gray bottom border */
        }

        .navbar-brand img {
            height: 30px;
            /* Adjust logo height */
            margin-right: 8px;
            /* Space between logo and text */
        }

        .navbar-brand {
            font-weight: bold;
            color: #ffffff !important;
            /* White brand color */
        }

        .nav-link-custom {
            color: #ffffff !important;
            /* White link color */
            font-size: 15px;
            font-weight: 500;
            margin-right: 15px;
            /* Space between links */
        }

        .nav-link-custom.active {
            color: #ffffff !important;
            /* White color for active link */
        }

        .btn-register {
            background-color: #ff7f00;
            /* Orange button color */
            color: #ffffff;
            border-radius: 5px;
            font-weight: bold;
            margin-right: 10px;
        }

        .btn-login {
            background-color: #1a73e8;
            /* Blue button color */
            color: #ffffff;
            border-radius: 5px;
            font-weight: bold;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .navbar-brand img {
                height: 25px;
            }

            .nav-link-custom {
                font-size: 14px;
                margin-right: 10px;
            }

            .btn-register,
            .btn-login {
                font-size: 14px;
                padding: 6px 12px;
            }
        }

        /* Custom styles for toggler icon */
        .navbar-toggler {
            border-color: #ffffff;
            /* Light border for the toggler */
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            /* Change toggler icon color to white */
        }

        .modal-content {
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .modal-header {
            border-bottom: none;
            text-align: center;
            /* Center align header text */
        }

        .modal-header h5 {
            font-weight: bold;
            margin: 0 auto;
        }

        .social-login .btn-google {
            background-color: #748294;
            /* Google Blue */
            color: white;
            border-radius: 8px;
            font-weight: bold;
            width: 100%;
            padding: 10px;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .social-login .btn-google i {
            font-size: 20px;
            /* Adjust icon size */
        }

        .social-login .btn-google:hover {
            background-color: #83C081;
            /* Darker blue on hover */
        }

        .social-login .btn-google span {
            margin-left: 10px;
            font-weight: bold;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }

        .divider::before {
            margin-right: .25em;
        }

        .divider::after {
            margin-left: .25em;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-check {
            color: green;
        }

        .form-check-input {
            margin-top: 0.3em;
        }

        .btn-signin {
            background-color: #665dff;
            color: white;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
            margin-top: 20px;
        }

        .btn-signin:hover {
            background-color: #5649e0;
        }

        .modal-footer-left p {
            margin-bottom: 0;
            text-align: left;
        }

        .modal-footer-left a {
            color: #665dff;
            text-decoration: none;
        }

        .modal-footer-left a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom navbar-dark">
        <div class="container">
            <!-- Brand Logo and Name -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://www.smktignc.sch.id/media_library/images/0a7958a45243fc0a91acadf6cafbcc93.png"
                    alt="Logo">
            </a>
            <!-- Toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#">Pasang Lowongan Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#">Cari Lowongan Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#">Tips Loker</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn btn-login" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Welcome Back!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Silakan masuk ke akun Anda</p>

                    <!-- Social media login -->
                    <div class="social-login d-flex justify-content-center mb-3">
                        <button type="button" class="btn btn-google d-flex align-items-center justify-content-center">
                            <img src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg" alt="">
                            <span class="ms-2">Masuk dengan Akun Google</span>
                        </button>
                    </div>

                    <div class="divider">atau lanjutkan dengan</div>

                    <!-- Login form -->
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="login-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="login-email" placeholder="mail@gmail.com"
                                required>
                            <i class="bi bi-check-circle-fill btn-check"></i>
                        </div>
                        <div class="mb-3">
                            <label for="login-password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="login-password" placeholder="Password"
                                required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember-me">
                                <label class="form-check-label" for="remember-me">Ingat username</label>
                            </div>
                            <a href="#" class="text-primary">Lupa Password?</a>
                        </div>
                        <button type="submit" class="btn-signin">Masuk</button>
                    </form>
                </div>
                <div class="modal-footer-left">
                    <p>Don't have an account? <a href="#" data-bs-target="#registerModal"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Register</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Join Us Today!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Buat akun Anda</p>

                    <!-- Social media login -->
                    <div class="social-login d-flex justify-content-center mb-3">
                        <button type="button"
                            class="btn btn-google d-flex align-items-center justify-content-center">
                            <img src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg" alt="">
                            <span class="ms-2">Daftar dengan Akun Google</span>
                        </button>
                    </div>

                    <div class="divider">atau lanjutkan dengan</div>

                    <!-- Registration form -->
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="register-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="register-email"
                                placeholder="mail@gmail.com" required>
                            <i class="bi bi-check-circle-fill btn-check"></i>
                        </div>
                        <div class="mb-3">
                            <label for="register-password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="register-password"
                                placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="register-password-confirm" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="register-password-confirm"
                                placeholder="Confirm Password" required>
                        </div>
                        <button type="submit" class="btn-signin">Daftar</button>
                    </form>
                </div>
                <div class="modal-footer-left">
                    <p>Already have an account? <a href="#" data-bs-target="#loginModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-AmtjWN7Z6O/LQU5ZDoqG1gyhXY4J4v7O6U1o8qVErwItABtPkiP3e3V8fr9FIE2H" crossorigin="anonymous">
    </script>

</body>

</html>
