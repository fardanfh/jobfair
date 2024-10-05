<?php

namespace App\Http\Controllers;

use App\Models\JobDetail;
use App\Models\JobPosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobApplyController extends Controller
{
    /**
     * Display a listing of the job postings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all job postings
        $jobPostings = DB::table('job_postings')
            ->join('perusahaan_profile', 'job_postings.id_user', '=', 'perusahaan_profile.id_user')
            ->join('users', 'job_postings.id_user', '=', 'users.id')
            ->select('job_postings.*', 'perusahaan_profile.profile_image', 'perusahaan_profile.bio', 'perusahaan_profile.alamat', 'perusahaan_profile.notelp', 'job_postings.created_at as dibuat', 'users.name as name') // Select desired fields
            ->take(3)
            ->get();

// dd($jobPostings);

        return view('welcome', compact('jobPostings'));
    }

    public function apply(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'answers.*' => 'required|string|max:255', // Validation rule for answers
        ]);

        // Create a new job detail entry
        $jobDetail = new JobDetail();
        $jobDetail->id_user = auth()->id(); // Set the authenticated user's ID
        $jobDetail->id_job = $id; // Set the job ID
        $jobDetail->jawaban_kandidat = json_encode($request->answers); // Save answers as JSON
        $jobDetail->catatan = null; // You can set this if you have a field in your form for notes
        $jobDetail->save();

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

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
    public function show($id)
    {
        // Retrieve the job posting by ID using where
        $jobPosting = JobPosting::where('id', $id)->first();

        // Check if the job posting exists
        if (!$jobPosting) {
            return redirect()->route('job_postings.index')->with('error', 'Job Posting not found.');
        }

        // Decode JSON fields if they are stored as JSON
        $jobPosting->pendidikan = json_decode($jobPosting->pendidikan, true);
        $jobPosting->pengalaman = json_decode($jobPosting->pengalaman, true);
        $jobPosting->pertanyaan_kandidat = json_decode($jobPosting->pertanyaan_kandidat, true);

        // Pass the job posting data to the view
        return view('job_apply.detail', compact('jobPosting'));
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
}
