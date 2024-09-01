@extends('dashboard.layout')

@section('content')
    @if (auth()->user()->level == 'perusahaan' || auth()->user()->level == 'superadmin')
        <h3>Selamat Datang Di Dashboard {{ auth()->user()->name }}!</h3>
        <p>Ini aktivitas dan karir terbaru anda!</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Open Job</p>
                        <p class="fs-30 mb-2">80</p>
                        <p>Lowongan masih aktif</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Kandidat</p>
                        <p class="fs-30 mb-2">100</p>
                        <p>Kandidat yang disimpan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Kandidat</p>
                        <p class="fs-30 mb-2">200</p>
                        <p>Total semua kandidat</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pekerjaan Terkini</h4>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Pekerjaan</th>
                                            <th>Pelamar</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td>UI/UX Designer</td>
                                            <td>3 Pelamar</td>
                                            <td><label class="badge badge-success">Active</label></td>
                                            <td class="d-flex">
                                                <a href="#" class="btn btn-outline-primary">Lihat Pelamar</a>
                                                <a href="" class="btn btn-outline-danger ms-3"><i
                                                        class="mdi mdi-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td>Backend</td>
                                            <td>10 Pelamar</td>
                                            <td><label class="badge badge-success">Avitve</label></td>
                                            <td class="d-flex">
                                                <a href="#" class="btn btn-outline-primary">Lihat Pelamar</a>
                                                <a href="" class="btn btn-outline-danger ms-3"><i
                                                        class="mdi mdi-eye"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
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
@endsection
