@extends('dashboard.layout')

@section('content')
    @if (auth()->user()->level == 'admin')
        <h3>Kandidat</h3>
        <section class="mt-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Kandidat</h4>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Kandidat</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applicants as $applicant)
                                            <tr>
                                                <td>{{ $applicant->user_name }}</td> <!-- Use the alias from the query -->
                                                <td>{{ $applicant->created_at }}</td>
                                                <td>
                                                    <p>
                                                        <span class="badge badge-{{ $applicant->id_status == 3 ? 'danger' : 'success' }}">
                                                            {{ $applicant->status_name }}
                                                        </span>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="{{ route('applicant.detail', $applicant->id) }}" class="btn btn-warning btn-sm text-light">Detail</a>
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
