@extends('components.main')

@section('content')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .job-detail .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .job-detail h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .job-detail h5 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 0.5rem;
        }

        .job-detail p {
            font-size: 1rem;
            line-height: 1.6;
            color: #495057;
            margin-bottom: 1rem;
        }

        .job-detail hr {
            border-top: 2px solid #007bff;
            margin: 2rem 0;
        }

        .text-muted {
            color: #6c757d;
        }

        .column {
            margin-bottom: 30px;
        }
    </style>

    <div class="job-detail container mt-5 mb-5">
        <h2 class="mb-4">{{ $jobPosting->jabatan }}</h2>
        <hr>

        <div class="row">
            <div class="col-md-6 column">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="h5"><strong>Deskripsi:</strong></p>
                        <p class="text-muted">{{ $jobPosting->deskripsi }}</p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <p class="h5"><strong>Tanggung Jawab:</strong></p>
                        <p class="text-muted">{{ $jobPosting->tanggung_jawab }}</p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <p class="h5"><strong>Keahlian:</strong></p>
                        <p class="text-muted">{{ $jobPosting->keahlian }}</p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <p class="h5"><strong>Kualifikasi:</strong></p>
                        <p class="text-muted">{{ $jobPosting->kualifikasi }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 column">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="h5"><strong>Level Posisi:</strong> <span
                                class="badge bg-info">{{ $jobPosting->level_posisi }}</span></p>
                        <p class="h5"><strong>Tipe Pekerjaan:</strong> <span
                                class="badge bg-warning text-dark">{{ $jobPosting->tipe_pekerjaan }}</span></p>
                        <p class="h5"><strong>Gaji:</strong> <span class="text-success">{{ $jobPosting->gaji }}</span>
                        </p>
                        <p class="h5"><strong>Lokasi:</strong> <span
                                class="badge bg-primary text-light">{{ $jobPosting->lokasi }}</span></p>
                        <p class="h5"><strong>Waktu Bekerja:</strong>
                            {{ $jobPosting->waktu_bekerja ?? 'Tidak ditentukan' }}</p>
                    </div>
                </div>

                @if ($jobPosting->is_tunjangan)
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="h5"><strong>Tunjangan:</strong> <span
                                    class="text-muted">{{ $jobPosting->tunjangan }}</span></p>
                        </div>
                    </div>
                @endif

                <div class="card mb-4">
                    <div class="card-body">
                        <p class="h5"><strong>Kerja Jarak Jauh:</strong> <span
                                class="text-primary">{{ $jobPosting->is_remote ? 'Ya' : 'Tidak' }}</span></p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <p class="h5"><strong>Diposting pada :</strong> <span
                                class="badge bg-secondary">{{ $jobPosting->created_at->diffForHumans() }}</span></p>
                        <p class="h5"><strong>Tanggal Berakhir:</strong> <span
                                class="text-muted">{{ \Carbon\Carbon::parse($jobPosting->tanggal_berakhir)->format('d M Y') }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <p class="h5"><strong>Pendidikan:</strong></p>
            <ul class="list-group">
                @foreach ($jobPosting->pendidikan ?? [] as $pendidikan)
                    <li class="list-group-item list-group-item-action">{{ $pendidikan }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mb-4">
            <p class="h5"><strong>Pengalaman:</strong></p>
            <ul class="list-group">
                @foreach ($jobPosting->pengalaman ?? [] as $pengalaman)
                    <li class="list-group-item list-group-item-action">{{ $pengalaman }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mb-4">
            @if (auth()->check())
                <button class="btn btn-primary" data-toggle="modal" data-target="#applyJobModal">Apply for Job</button>
            @else
                <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login to View Questions and
                    Apply</button>
            @endif
        </div>

        <!-- Apply Job Modal -->
        @if (auth()->check())
            <div class="modal fade" id="applyJobModal" tabindex="-1" role="dialog" aria-labelledby="applyJobModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="applyJobModalLabel">Apply for {{ $jobPosting->jabatan }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('apply.job', ['id' => $jobPosting->id]) }}">
                                @csrf
                                <input type="hidden" name="job_id" value="{{ $jobPosting->id }}">
                                <div class="form-group">
                                    <label for="jawaban">Jawaban untuk Pertanyaan:</label>
                                    @foreach ($jobPosting->pertanyaan_kandidat ?? [] as $index => $pertanyaan)
                                        <label>{{ $pertanyaan }}</label>
                                        <input type="text" class="form-control mb-2" name="answers[{{ $index }}]"
                                            required> <!-- Changed here -->
                                    @endforeach
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Application</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif



        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
    </div>



    <!-- Footer Section -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
        <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <div>
                <a href="" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <!-- SMK TI GNC -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">SMK TI GNC</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p style="text-align: left;">
                            SMK-TI Garuda Nusantara merupakan salah satu sekolah terbesar di Kota Cimahi. Menjuarai berbagai
                            event baik tingkat Kota, Provinsi maupun Nasional. Setiap tahun menerima lebih dari 600 siswa
                            baru. Dan telah meluluskan ribuan siswa sejak berdiri tahun 2009.
                        </p>
                    </div>

                    <!-- Tentang Kami -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Tentang Kami</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p style="text-align: left;">
                            <a href="#!" class="text-white">Pusat Bantuan</a>
                        </p>
                        <p style="text-align: left;">
                            <a href="#!" class="text-white">Logo</a>
                        </p>
                        <p style="text-align: left;">
                            <a href="#!" class="text-white">Kebijakan Privasi</a>
                        </p>
                        <p style="text-align: left;">
                            <a href="#!" class="text-white">Kondisi dan Ketentuan</a>
                        </p>
                    </div>

                    <!-- Pencari Kerja -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Pencari Kerja</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p style="text-align: left;">
                            <a href="#!" class="text-white">Registrasi Pencari Kerja</a>
                        </p>
                        <p style="text-align: left;">
                            <a href="#!" class="text-white">Buat Resume Online</a>
                        </p>
                        <p style="text-align: left;">
                            <a href="#!" class="text-white">Cari Lowongan Kerja</a>
                        </p>
                        <p style="text-align: left;">
                            <a href="#!" class="text-white">Job Alerts</a>
                        </p>
                    </div>

                    <!-- Contact -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p style="text-align: left;">
                            Jl. Sangkuriang No.30, Cipageran, Kec. Cimahi Utara, Kota
                            Cimahi, Jawa Barat 40511
                        </p>
                        <p style="text-align: left;">
                            informasi@smktignc.sch.id
                        </p>
                        <p style="text-align: left;">
                            +62 821 1900 6081
                        </p>
                        <p style="text-align: left;">
                            +62 877 2315 7313
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-3 d-flex justify-content-between align-items-center"
            style="background-color: rgba(0, 0, 0, 0.2)">
            <span class="text-white text-sm-left">
                Copyright © 2020-2024.
                <a href="https://www.smktignc.sch.id/" target="_blank" style="color: #007bff;">SMK TI GNC</a>
                All rights reserved.
            </span>
            <span class="text-white text-center">Beta Version 1</span>
        </div>
    </footer>

    <!-- SweetAlert Notifications -->
    @if (session('success'))
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

    @if ($errors->has('email'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                text: '{{ $errors->first('email') }}',
                confirmButtonText: 'Try Again'
            });
        </script>
    @endif

    @if ($errors->has('register_error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Registration Failed',
                text: '{{ $errors->first('register_error') }}',
                confirmButtonText: 'Try Again'
            });
        </script>
    @endif
@endsection
