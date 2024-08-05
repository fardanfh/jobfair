@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1 class="text-dark">JobFairBersamaSMKTI</h1>
        </div>

        <div class="mb-4">
            <h2 class="text-orange fw-bold">Lowongan Kerja</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://dummyimage.com/60x60/000/fff&text=DMT" alt="Company Logo"
                                class="rounded-circle me-3">
                            <div>
                                <a href="#" class="text-decoration-none fw-bold text-dark">Driver</a>
                                <p class="mb-0 text-secondary">MedioHome</p>
                            </div>
                        </div>
                        <hr class="m-0">
                        <!-- Make the line full width -->
                        <ul class="list-unstyled mb-4">
                            <li><span class="fw-bold">Lokasi:</span> Jakarta Barat</li>
                            <li><span class="fw-bold">Pendidikan:</span> SMA / SMK / STM</li>
                            <li><span class="fw-bold">Gaji:</span> Negosiasi</li>
                            <li><span class="fw-bold">Batas Lamar:</span> 31 Agustus 2024</li>
                        </ul>
                        <a href="#" class="btn btn-orange-custom w-100">Lamar Pekerjaan</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://dummyimage.com/60x60/000/fff&text=Bio" alt="Company Logo"
                                class="rounded-circle me-3">
                            <div>
                                <a href="#" class="text-decoration-none fw-bold text-dark">Teknik Elektro</a>
                                <p class="mb-0 text-secondary">PT Bioseptic Waterindo Abadi</p>
                            </div>
                        </div>
                        <hr class="m-0">
                        <!-- Make the line full width -->
                        <ul class="list-unstyled mb-4">
                            <li><span class="fw-bold">Lokasi:</span> Jakarta Utara</li>
                            <li><span class="fw-bold">Pendidikan:</span> Diploma/D1/D2/D3,Sarjana/ S1</li>
                            <li><span class="fw-bold">Gaji:</span> Negosiasi</li>
                            <li><span class="fw-bold">Batas Lamar:</span> 31 Agustus 2024</li>
                        </ul>
                        <a href="#" class="btn btn-orange-custom w-100">Lamar Pekerjaan</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://dummyimage.com/60x60/000/fff&text=DEM" alt="Company Logo"
                                class="rounded-circle me-3">
                            <div>
                                <a href="#" class="text-decoration-none fw-bold text-dark">Staff KOL Specialist</a>
                                <p class="mb-0 text-secondary">Demar Hijab</p>
                            </div>
                        </div>
                        <hr class="m-0">
                        <!-- Make the line full width -->
                        <ul class="list-unstyled mb-4">
                            <li><span class="fw-bold">Lokasi:</span> Bandung Kota</li>
                            <li><span class="fw-bold">Pendidikan:</span> Diploma/D1/D2/D3, Sarjana / S1, SMA / SMK / STM
                            </li>
                            <li><span class="fw-bold">Gaji:</span> Negosiasi</li>
                            <li><span class="fw-bold">Batas Lamar:</span> 31 Agustus 2024</li>
                        </ul>
                        <a href="#" class="btn btn-orange-custom w-100">Lamar Pekerjaan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-5 py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <p class="mb-0 text-white">Copyright © 2023 - 2024 <strong>SMK TI Garuda Nusantara</strong> All Rights Reserved.
                Dev By <strong>SMK-TI GNC & LPKIA IRFAN</strong>
            </p>
            <a href="#" id="back-to-top" class="btn btn-gold rounded-circle shadow">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-chevron-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 4a.5.5 0 0 1 .374.17l5 5a.5.5 0 0 1-.748.664L8 4.707 3.374 9.834a.5.5 0 1 1-.748-.664l5-5A.5.5 0 0 1 8 4z" />
                </svg>
            </a>
        </div>
    </footer>

    <style>
        .btn-orange-custom {
            background-color: #ff8000;
            /* Orange background color */
            color: #ffffff;
            /* White text color */
            font-weight: bold;
            /* Bold font */
            border: none;
            /* No border */
            border-radius: 8px;
            /* Rounded corners */
            padding: 10px 20px;
            /* Padding */
            transition: background-color 0.3s;
            /* Smooth transition */
        }

        .btn-orange-custom:hover {
            background-color: #001a33;
            /* Darker orange on hover */
        }

        .text-orange {
            color: #ff8000;
            /* Orange color for text */
        }

        .footer {
            background-color: #001a33 !important;
            /* Dark blue background */
            color: #ffffff;
            /* White text color */
            width: 100%;
            /* Full width */
        }

        .btn-gold {
            background-color: #ffc107;
            /* Gold color */
            color: #ffffff;
            /* White color */
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-gold:hover {
            background-color: #e0a800;
            /* Darker gold on hover */
        }

        /* Ensure full-width lines in cards */
        .card-body hr {
            width: 100%;
            /* Full width */
            margin-top: 0;
            margin-bottom: 15px;
        }
    </style>

    <script>
        document.getElementById('back-to-top').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
@endsection
