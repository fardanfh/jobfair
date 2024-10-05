@extends('dashboard.layout')

@section('content')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }
    </style>
    @if (auth()->user()->level == 'admin')
        <h3>Pekerjaan</h3>
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
                                            <th>Tanggal Berakhir</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobPostings as $job)
                                            <tr>
                                                <td>{{ $job->jabatan }}</td>
                                                <td>{{ $job->applicant_count }} Pelamar</td> <!-- Assuming applicants relation -->
                                                <td>{{ \Carbon\Carbon::parse($job->tanggal_berakhir)->format('d/m/Y') }}
                                                </td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="checkbox" class="toggle-status"
                                                            data-id="{{ $job->id }}"
                                                            {{ $job->status === 'active' ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td class="d-flex">
                                                    <a href="{{ route('job.applicants', $job->id) }}" class="btn btn-outline-primary">Lihat Pelamar</a>
                                                    <a href="{{ route('job_postings.show', $job->id) }}" class="btn btn-outline-danger ms-3"><i class="mdi mdi-eye"></i></a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('change', '.toggle-status', function() {
        var jobId = $(this).data('id');
        var isChecked = $(this).is(':checked');
        var newStatus = isChecked ? 'active' : 'inactive';

        $.ajax({
            url: "{{ route('job_postings.toggle_status', '') }}/" + jobId,
            type: "POST",
            data: {
                _token: '{{ csrf_token() }}',
                status: newStatus
            },
            success: function(response) {
                // Update the badge based on new status
                var badge = $(this).closest('td').find('.badge');
                if (response.status === 'active') {
                    badge.removeClass('badge-danger').addClass('badge-success').text('Active');
                } else {
                    badge.removeClass('badge-success').addClass('badge-danger').text('Inactive');
                }
            }.bind(this), // Bind the context to keep `this` reference
            error: function() {
                alert('An error occurred while toggling the status.');
            }
        });
    });
</script>


@endsection
