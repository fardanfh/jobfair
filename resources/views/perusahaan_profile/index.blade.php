@extends('dashboard.layout')

@section('content')
<div class="container-fluid mt-4">
    <h3 class="mb-4 text-center text-dark">Your Perusahaan Profile</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0 rounded-lg">
                <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center justify-content-center bg-light">
                        <div class="text-center">
                            @if ($profile && $profile->profile_image)
                                <img src="{{ asset('storage/' . $profile->profile_image) }}" alt="Profile Image" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                            @else
                                <div class="rounded-circle bg-secondary" style="width: 150px; height: 150px;"></div>
                                <span class="d-block mt-2 text-muted">No Profile Image</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Profile Information</h5>

                            <div class="mb-3">
                                <label class="form-label"><strong>Nama Perusahaan:</strong></label>
                                <p class="border p-3 rounded bg-light shadow-sm m-2">{{ $profile->nama_perusahaan ?? 'No Nama available.' }}</p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><strong>Bio:</strong></label>
                                <p class="border p-3 rounded bg-light shadow-sm m-2">{{ $profile->bio ?? 'No Bio available.' }}</p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><strong>Address:</strong></label>
                                <p class="border p-3 rounded bg-light shadow-sm m-2">{{ $profile->alamat ?? 'No Address provided.' }}</p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><strong>Phone:</strong></label>
                                <p class="border p-3 rounded bg-light shadow-sm m-2">{{ $profile->notelp ?? 'No Phone number provided.' }}</p>
                            </div>

                            <div class="text-end">
                                <a href="{{ $profile ? route('perusahaan-profiles.edit', $profile->id) : route('perusahaan-profiles.create') }}" class="btn btn-success btn-md text-light">
                                    {{ $profile ? 'Edit Profile' : 'Create Profile' }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-8 offset-md-2">
            <h5 class="text-muted text-center">Contact Information</h5>
            <div class="card shadow border-0">
                <div class="card-body">
                    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                    <p><strong>Phone:</strong> {{ auth()->user()->phone ?? 'Not provided' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }

    .btn-success {
        background-color: #28a745;
        border: none;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-success:hover {
        background-color: #218838;
        transform: translateY(-2px);
    }

    .form-label {
        font-weight: bold;
        color: #343a40;
    }

    .bg-light {
        background-color: #f8f9fa !important;
    }

    .border {
        border: 1px solid #ced4da;
    }

    .rounded-circle {
        background-color: #dee2e6; /* Placeholder color */
    }
</style>

@endsection

@section('scripts')

@endsection
