@extends('dashboard.layout')

@section('content')
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <div class="container-fluid mt-4">
        <h3 class="mb-4">Detail Applicants</h3>

        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h5 class="mb-0">Applicant Information</h5>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center mb-4">
                        @if ($applicant->profile_image)
                            <img src="{{ asset('storage/' . $applicant->profile_image) }}" alt="Profile Image" class="rounded-circle"
                                style="width: 250px; height: 250px; object-fit: cover;">
                        @else
                            <img src="https://via.placeholder.com/150" alt="Default Profile Image" class="rounded-circle"
                                style="width: 150px; height: 150px; object-fit: cover;">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <p><strong>Name:</strong> {{ $applicant->user_name }}</p>
                        <p><strong>Job Position:</strong> {{ $applicant->jabatan }}</p> <!-- Adjust as necessary -->
                        <p><strong>Status:</strong>
                            <span class="badge badge-{{ $applicant->id_status == 3 ? 'danger' : 'success' }}">
                                {{ $applicant->status_name }}
                            </span>
                        </p>
                        <p><strong>Apply At:</strong> {{ \Carbon\Carbon::parse($applicant->created_at)->format('d M Y') }}</p>

                        <div class="mb-4">
                            <!-- CV Section -->
                            <label class="form-label"><strong>CV:</strong></label>
                            <div class="d-flex align-items-center">
                                @if ($applicant && $applicant->cv)
                                    <a href="{{ asset('storage/' . $applicant->cv) }}" target="_blank"
                                        class="btn btn-danger btn-md text-light me-2">
                                        View CV
                                    </a>
                                @else
                                    <span class="text-muted">No CV uploaded.</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-4">
                            <!-- Certificates Section -->
                            <label class="form-label"><strong>Certificates:</strong></label>
                            <div class="d-flex flex-wrap">
                                @if ($applicant && $applicant->sertifikat)
                                    @php
                                        $certificates = json_decode($applicant->sertifikat);
                                    @endphp

                                    @if (count($certificates) > 0)
                                        @foreach ($certificates as $certificate)
                                            <a href="{{ asset('storage/' . $certificate) }}" target="_blank"
                                                class="btn btn-danger btn-md text-light me-2 mb-2">
                                                View Certificate {{ $loop->iteration }}
                                            </a>
                                        @endforeach
                                    @else
                                        <span class="text-muted">No certificates uploaded.</span>
                                    @endif
                                @else
                                    <span class="text-muted">No certificates uploaded.</span>
                                @endif
                            </div>
                        </div>

                        <button class="btn btn-info text-light" data-toggle="modal" data-target="#changeStatusModal">
                            Change Status
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">Questions and Answers</h5>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @if (is_array($questions) && is_array($answers))
                        @foreach ($questions as $index => $question)
                            <li class="list-group-item">
                                <strong>Question:</strong> {{ $question }}<br>
                                <strong>Answer:</strong> <span
                                    class="text-muted">{{ $answers[$index] ?? 'No answer provided.' }}</span>
                            </li>
                        @endforeach
                    @else
                        <li class="list-group-item">No questions or answers available.</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <!-- Change Status Modal -->
    <div class="modal fade" id="changeStatusModal" tabindex="-1" role="dialog" aria-labelledby="changeStatusModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeStatusModalLabel">Change Applicant Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('applicant.update', $applicant->id_detail) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Change method to PUT for updating -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="status">Select Status</label>
                            <select class="form-control" id="levelPosisi" name="status" required>
                                @foreach ($status as $status)
                                    <option value="{{ $status->id }}">{{ $status->status_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="catatan">Notes (Catatan)</label>
                            <textarea class="form-control" id="catatan" name="catatan" rows="3" placeholder="Add notes here..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
