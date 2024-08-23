@extends('dashboard.layout')

@section('content')
<<<<<<< HEAD
    @if (auth()->user()->level == 'perusahaan' || auth()->user()->level == 'superadmin')
=======
    @if (auth()->user()->level == 'perusahaan')
>>>>>>> 1c59bcf603a7b4348a0ab520e77179fd7e411321
        <h3>Pekerjaan <span class="text-muted">(2)</span></h3>

        <section class="mt-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pekerjaan Terkini</h4>
<<<<<<< HEAD
=======
                            </p>
>>>>>>> 1c59bcf603a7b4348a0ab520e77179fd7e411321
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
<<<<<<< HEAD
                                        <tr>
=======
                                        <tr class="">
>>>>>>> 1c59bcf603a7b4348a0ab520e77179fd7e411321
                                            <td>UI/UX Designer</td>
                                            <td>3 Pelamar</td>
                                            <td><label class="badge badge-success">Active</label></td>
                                            <td class="d-flex">
                                                <a href="#" class="btn btn-outline-primary">Lihat Pelamar</a>
                                                <a href="" class="btn btn-outline-danger ms-3"><i
                                                        class="mdi mdi-eye"></i></a>
                                            </td>
                                        </tr>
<<<<<<< HEAD
                                        <tr>
                                            <td>Backend</td>
                                            <td>10 Pelamar</td>
                                            <td><label class="badge badge-success">Active</label></td>
=======
                                        <tr class="">
                                            <td>Backend</td>
                                            <td>10 Pelamar</td>
                                            <td><label class="badge badge-success">Avitve</label></td>
>>>>>>> 1c59bcf603a7b4348a0ab520e77179fd7e411321
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
@endsection
