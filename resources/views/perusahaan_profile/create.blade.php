@extends('dashboard.layout')

@section('content')
    <div class="container-fluid mt-4">
        <h3 class="mb-4 text-center text-primary">Create Your Profile</h3>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm border-0 rounded-lg p-4">
            <form action="{{ route('perusahaan-profiles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Profile Image -->
                <div class="form-group mb-4">
                    <label for="profile_image" class="form-label">Profile Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="profile_image" name="profile_image">
                        <label class="custom-file-label" for="profile_image">Choose file</label>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="notelp" class="form-label">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="notelp" name="nama_perusahaan" placeholder="Enter your company name">
                </div>

                <!-- Bio -->
                <div class="form-group mb-4">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea class="form-control" id="bio" name="bio" rows="3" placeholder="Write something about yourself..."></textarea>
                </div>

                <!-- Address -->
                <div class="form-group mb-4">
                    <label for="alamat" class="form-label">Address</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter your address">
                </div>

                <!-- Phone Number -->
                <div class="form-group mb-4">
                    <label for="notelp" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Enter your phone number">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Create Profile</button>
            </form>
        </div>
    </div>

    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }

        .card {
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease-in-out;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .custom-file-label::after {
            content: "Browse";
        }

        .form-control:focus, .custom-file-input:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
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
    </style>
@endsection

@section('scripts')
    <script>
        // Update the label of the file input when a file is selected
        document.querySelectorAll('.custom-file-input').forEach(input => {
            input.addEventListener('change', function (e) {
                let fileName = e.target.files.length > 1 ? `${e.target.files.length} files selected` : e.target.files[0].name;
                let label = e.target.nextElementSibling;
                label.innerHTML = fileName;
            });
        });
    </script>
@endsection
