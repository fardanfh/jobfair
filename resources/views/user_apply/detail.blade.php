@extends('dashboard.layout')

@section('content')
    <h3 class="mb-4">Detail Pengajuan Pekerjaan</h3>
    <br>
    <div class="container-fluid">
        <div class="row">
            @if ($results->isNotEmpty())
                @foreach ($results as $job)
                    <div class="col-md-6">
                        <div class="card shadow-lg mb-4 border-0 rounded-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">{{ $job->nama_perusahaan }}</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title text-primary">{{ $job->posisi }}</h6>
                                <p class="card-text"><strong>Nama Pengguna:</strong> {{ $job->nama }}</p>
                                <p class="card-text"><strong>Lokasi:</strong> {{ $job->lokasi }}</p>
                                <p class="card-text">
                                    <strong>Tanggal Apply:</strong>
                                    <span class="text-muted">{{ \Carbon\Carbon::parse($job->tanggal_apply)->format('d M Y') }}</span>
                                </p>
                                <p class="card-text">
                                    <strong>Status:</strong>
                                    <span class="badge badge-{{ $job->status == 'Diterima' ? 'success' : 'danger' }} rounded-pill">
                                        {{ $job->status }}
                                    </span>
                                </p>
                                <p>
                                    <strong>Catatan Perusahaan :</strong>
                                    {{ $job->catatan }}
                                </p>
                            </div>

                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <div class="alert alert-info">Tidak ada aplikasi pekerjaan.</div>
                </div>
            @endif
        </div>
    </div>
@endsection
