<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('icon/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pasang Lowongan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cari Lowongan</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Dashboard</a>
                    </li>
                @endauth

                <li class="nav-item">
                    {{-- <a class="nav-link" href="#">Tips Loker</a> --}}
                </li>
            </ul>
            <div class="d-flex align-items-center justify-content-end">
                @auth
                    <!-- Show username and logout button if logged in -->
                    <span class="me-3 fw-bold text-primary" style="font-size: 1.2rem;">👋 Hello, {{ auth()->user()->name }}</span>
                    <a class="btn btn-danger d-flex align-items-center px-4 py-2 rounded-pill shadow-sm"
                        href="{{ route('logout') }}" style="text-decoration: none; font-size: 1rem;">
                        Logout
                    </a>
                @else
                    <!-- Show login and register buttons if not logged in -->
                    <button class="btn btn-outline-success me-2 px-4 py-2 rounded-pill fw-bold shadow-sm" type="button"
                        data-bs-toggle="modal" data-bs-target="#loginModal" style="font-size: 1rem;">Login</button>
                    <button type="button" class="btn btn-primary px-4 py-2 rounded-pill fw-bold shadow-sm" data-bs-toggle="modal"
                        data-bs-target="#registerModal" style="font-size: 1rem;">Register</button>
                @endauth
            </div>




        </div>
    </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title" id="loginModalLabel">Welcome Back!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">Silakan masuk ke akun Anda</p>

                <div class="social-login d-flex justify-content-center mb-3">
                    <button type="button" class="btn btn-google d-flex align-items-center justify-content-center">
                        <img src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg" alt="">
                        <span class="ms-2">Masuk dengan Akun Google</span>
                    </button>
                </div>

                <div class="divider">atau lanjutkan dengan</div>

                <form action="{{ route('login.aksi') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="login-email" class="form-label font-weight-bold">Email <span
                                class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="email@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label font-weight-bold">Password <span
                                class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember-me">
                            <label class="form-check-label" for="remember-me">Ingat username</label>
                        </div>
                        <a href="#" class="text-primary">Lupa Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                </form>

                <div class="modal-footer-left mt-3">
                    <p class="text-center">Don't have an account? <a href="#" data-bs-toggle="modal"
                            data-bs-target="#registerModal" data-bs-dismiss="modal" class="text-primary">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title" id="registerModalLabel">Silakan Daftar Sebagai!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">Buat akun Anda</p>

                <div class="social-login d-flex justify-content-center mb-3">
                    <button type="button" class="btn btn-google d-flex align-items-center justify-content-center">
                        <img src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg" alt="">
                        <span class="ms-2">Daftar dengan Akun Google</span>
                    </button>
                </div>

                <div class="divider">atau lanjutkan dengan</div>

                <form action="{{ route('registersimpan') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label font-weight-bold">Nama <span
                                class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Full nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label font-weight-bold">Email <span
                                class="text-danger">*</span></label>
                        <input name="email" type="email" class="form-control" id="email"
                            placeholder="email@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label font-weight-bold">Password <span
                                class="text-danger">*</span></label>
                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="level" class="font-weight-bold">Level <span
                                class="text-danger">*</span></label>
                        <select name="level" class="form-control" id="level" required>
                            <option value="" disabled selected>Silakan Pilih Level</option>
                            <option value="pelamar">Pelamar</option>
                            <option value="admin">Perusahaan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>

                <div class="modal-footer-left mt-3">
                    <p class="text-center">Already have an account? <a href="#" data-bs-toggle="modal"
                            data-bs-target="#loginModal" data-bs-dismiss="modal" class="text-primary">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert Notifications -->
@if (session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif
