<?php

namespace App\Http\Controllers;

use App\Models\JobDetail;
use App\Models\JobPosting;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobPostingController extends Controller
{
    /**
     * Display a listing of the job postings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all job postings
        $jobPostings = DB::table('job_postings') // Using 'job_postings'
            ->leftJoin('job_detail', 'job_postings.id', '=', 'job_detail.id_job')
            ->select('job_postings.*', DB::raw('COUNT(job_detail.id) as applicant_count'))
            ->groupBy('job_postings.id') // Grouping by 'job_postings.id'
            ->get();


        return view('job_postings.index', compact('jobPostings'));
    }

    /**
     * Show the form for creating a new job posting.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job_postings.create');
    }

    /**
     * Store a newly created job posting in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // Manually handle array fields by converting them to JSON
        $data['pendidikan'] = isset($data['pendidikan']) ? json_encode($data['pendidikan']) : null;
        $data['pengalaman'] = isset($data['pengalaman']) ? json_encode($data['pengalaman']) : null;
        $data['pertanyaan_kandidat'] = isset($data['pertanyaan_kandidat']) ? json_encode($data['pertanyaan_kandidat']) : null;

        // Handle checkboxes (they are only present if checked)
        $data['is_tunjangan'] = $request->has('is_tunjangan') ? 1 : 0;
        $data['is_remote'] = $request->has('is_remote') ? 1 : 0;

        // Save the job posting
        JobPosting::create($data);

        alert()->success('Success', 'Job posting created successfully.');

        return redirect()->route('job_postings.index');
    }

    /**
     * Display the specified job posting.
     *
     * @param  \App\Models\JobPosting  $jobPosting
     * @return \Illuminate\Http\Response
     */
    public function show(JobPosting $jobPosting)
    {
        // Decode JSON fields if they are stored as JSON
        $jobPosting->pendidikan = json_decode($jobPosting->pendidikan, true);
        $jobPosting->pengalaman = json_decode($jobPosting->pengalaman, true);
        $jobPosting->pertanyaan_kandidat = json_decode($jobPosting->pertanyaan_kandidat, true);

        // Pass the job posting data to the view
        return view('job_postings.detail', compact('jobPosting'));
    }


    /**
     * Show the form for editing the specified job posting.
     *
     * @param  \App\Models\JobPosting  $jobPosting
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPosting $jobPosting)
    {
        return view('job_postings.edit', compact('jobPosting'));
    }

    /**
     * Update the specified job posting in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobPosting  $jobPosting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPosting $jobPosting)
    {
        $validatedData = $request->validate([
            'jabatan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggung_jawab' => 'required|string',
            'keahlian' => 'required|string',
            'kualifikasi' => 'required|string',
            'pendidikan' => 'required|array',
            'pengalaman' => 'required|array',
            'level_posisi' => 'required|string',
            'tipe_pekerjaan' => 'required|string',
            'gaji' => 'required|string',
            'lokasi' => 'required|string',
            'waktu_bekerja' => 'nullable|string',
            'is_tunjangan' => 'sometimes|boolean',
            'tunjangan' => 'nullable|string',
            'is_insentif' => 'sometimes|boolean',
            'insentif' => 'nullable|string',
            'is_remote' => 'sometimes|boolean',
            'pertanyaan_kandidat' => 'nullable|array',
            'status' => 'required|string',
            'tanggal_berakhir' => 'nullable|date',
        ]);

        // Update the job posting
        $jobPosting->update($validatedData);

        return redirect()->route('job_postings.index')->with('success', 'Job posting updated successfully.');
    }

    /**
     * Remove the specified job posting from the database.
     *
     * @param  \App\Models\JobPosting  $jobPosting
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPosting $jobPosting)
    {
        $jobPosting->delete();

        return redirect()->route('job_postings.index')->with('success', 'Job posting deleted successfully.');
    }

    public function toggleStatus(Request $request, $id)
    {
        $job = JobPosting::findOrFail($id);

        // Toggle the status
        $job->status = $job->status === 'active' ? 'inactive' : 'active';
        $job->save();

        return response()->json(['status' => $job->status]);
    }

    public function showApplicants($id)
    {
        $applicants = DB::table('job_detail')
            ->join('users', 'job_detail.id_user', '=', 'users.id') // Join with users table
            ->join('status', 'job_detail.id_status', '=', 'status.id') // Join with status table
            ->select(
                'job_detail.*',
                'users.name as user_name',
                'users.id as id_user',
                'status.id as status_id', // Specify status fields you need
                'status.status_name' // Add the specific status fields you want to select
            )
            ->where('job_detail.id_job', $id)
            ->get();

        return view('job_postings.applicants', compact('applicants'));
    }

    public function showApplicantDetail($id)
    {
        // Fetch applicant details using Query Builder
        $applicant = DB::table('job_detail')
            ->join('users', 'job_detail.id_user', '=', 'users.id')
            ->join('user_profiles', 'job_detail.id_user', '=', 'user_profiles.id_user') // Joining user_profiles
            ->join('status', 'job_detail.id_status', '=', 'status.id')
            ->join('job_postings', 'job_detail.id_job', '=', 'job_postings.id') // Joining job_postings to get pertanyaan_kandidat
            ->select(
                'job_detail.*',
                'job_postings.*',
                'users.name as user_name',
                'user_profiles.profile_image', // Add specific fields from user_profiles
                'user_profiles.bio',
                'user_profiles.cv',
                'user_profiles.sertifikat', // Assuming this is a JSON array for multiple certificates
                'status.*',
                'job_detail.id as id_detail',
                'job_postings.pertanyaan_kandidat'
            )
            ->where('job_detail.id', $id) // Use the applicant's ID
            ->first();



        $status = Status::all();

        if (!$applicant) {
            return redirect()->back()->with('error', 'Applicant not found.');
        }

        // Decode answers and questions
        // Remove extra quotes before decoding
        $answers = json_decode(stripslashes(trim($applicant->jawaban_kandidat, '"')), true);
        $questions = json_decode(stripslashes(trim($applicant->pertanyaan_kandidat, '"')), true);

        return view('job_postings.applicant_detail', compact('applicant', 'answers', 'questions', 'status'));
    }

    public function updateStatus(Request $request, $id)
    {

        // Temukan applicant berdasarkan ID
        $applicant = JobDetail::findOrFail($id);

        // Update status dan catatan
        $applicant->id_status = $request->status;
        $applicant->catatan = $request->catatan;
        $applicant->save();


        return redirect()->back()->with('success', 'Status updated successfully!');
    }
}
