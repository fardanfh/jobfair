@extends('dashboard.layout')

@section('content')
    @if (auth()->user()->level == 'pelamar')
        <h3>Your Applicants</h3>
        <section class="mt-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Your Applicants</h4>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Perusahaan</th>
                                            <th>Posisi</th>
                                            <th>Lokasi</th>
                                            <th>Tanggal Apply</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($results as $result)
                                        <tr>
                                            <td>{{ $result->nama_perusahaan }}</td>
                                            <td>{{ $result->posisi }}</td>
                                            <td>{{ $result->lokasi }}</td>
                                            <td>{{ \Carbon\Carbon::parse($result->tanggal_apply)->format('d M Y') }}</td> <!-- Date formatting -->
                                            <td>{{ $result->status }}</td>
                                            <td>
                                                <!-- Add action buttons or links here -->
                                                <a href="{{ route('user-apply.show', $result->id) }}" class="btn btn-warning btn-sm text-light">Detail</a>
                                            </td>
                                        </tr>
                                        @endforeach
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
