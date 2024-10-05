@extends('dashboard.layout')

@section('content')
    @if (auth()->user()->level == 'admin')
        <h3 class="mb-4">Detail Pekerjaan</h3>

        <div class="container-fluid">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">{{ $jobPosting->jabatan }}</h4>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <strong>Status:</strong>
                        <span class="badge {{ $jobPosting->status === 'active' ? 'badge-success' : 'badge-danger' }}">
                            {{ ucfirst($jobPosting->status) }}
                        </span>
                    </div>

                    <hr>

                    <p class="card-text"><strong>Deskripsi:</strong> {{ $jobPosting->deskripsi ?? 'N/A' }}</p>
                    <p class="card-text"><strong>Tanggung Jawab:</strong> {{ $jobPosting->tanggung_jawab ?? 'N/A' }}</p>
                    <p class="card-text"><strong>Keahlian:</strong> {{ $jobPosting->keahlian ?? 'N/A' }}</p>
                    <p class="card-text"><strong>Kualifikasi:</strong> {{ $jobPosting->kualifikasi ?? 'N/A' }}</p>

                    <div class="mb-3">
                        <strong>Pendidikan:</strong>
                        <ul class="list-group">
                            @if(is_array($jobPosting->pendidikan) && count($jobPosting->pendidikan) > 0)
                                @foreach($jobPosting->pendidikan as $pendidikan)
                                    <li class="list-group-item">{{ $pendidikan }}</li>
                                @endforeach
                            @else
                                <li class="list-group-item">N/A</li>
                            @endif
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong>Pengalaman:</strong>
                        <ul class="list-group">
                            @if(is_array($jobPosting->pengalaman) && count($jobPosting->pengalaman) > 0)
                                @foreach($jobPosting->pengalaman as $pengalaman)
                                    <li class="list-group-item">{{ $pengalaman }}</li>
                                @endforeach
                            @else
                                <li class="list-group-item">N/A</li>
                            @endif
                        </ul>
                    </div>

                    <p class="card-text"><strong>Level Posisi:</strong> {{ $jobPosting->level_posisi }}</p>
                    <p class="card-text"><strong>Tipe Pekerjaan:</strong> {{ $jobPosting->tipe_pekerjaan }}</p>
                    <p class="card-text"><strong>Gaji:</strong> {{ $jobPosting->gaji }}</p>
                    <p class="card-text"><strong>Lokasi:</strong> {{ $jobPosting->lokasi }}</p>
                    <p class="card-text"><strong>Waktu Bekerja:</strong> {{ $jobPosting->waktu_bekerja ?? 'N/A' }}</p>
                    <p class="card-text"><strong>Tunjangan:</strong> {{ $jobPosting->is_tunjangan ? $jobPosting->tunjangan : 'Tidak ada' }}</p>
                    <p class="card-text"><strong>Insentif:</strong> {{ $jobPosting->insentif ?? 'N/A' }}</p>
                    <p class="card-text"><strong>Tanggal Berakhir:</strong> {{ \Carbon\Carbon::parse($jobPosting->tanggal_berakhir)->format('d M Y') }}</p>

                    <div class="mb-3">
                        <strong>Pertanyaan Kandidat:</strong>
                        <ul class="list-group">
                            @if(is_array($jobPosting->pertanyaan_kandidat) && count($jobPosting->pertanyaan_kandidat) > 0)
                                @foreach($jobPosting->pertanyaan_kandidat as $pertanyaan)
                                    <li class="list-group-item">{{ $pertanyaan }}</li>
                                @endforeach
                            @else
                                <li class="list-group-item">N/A</li>
                            @endif
                        </ul>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ route('job_postings.index') }}" class="btn btn-outline-primary btn-lg">
                            <i class="mdi mdi-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('styles')
<style>
    .card {
        border-radius: 15px;
    }

    .card-header {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .list-group-item {
        border: none;
        border-bottom: 1px solid #e9ecef;
    }

    .list-group-item:last-child {
        border-bottom: none;
    }

    .badge {
        font-size: 0.9rem;
    }

    h4 {
        font-weight: 700;
    }
</style>
@endsection
