<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserApplyController extends Controller
{
    // Display a listing of the user profiles
    public function index()
    {
        $results = DB::table('job_detail')
        ->join('users', 'job_detail.id_user', '=', 'users.id')
        ->join('job_postings', 'job_detail.id_job', '=', 'job_postings.id')
        ->join('status', 'job_detail.id_status', '=', 'status.id')
        ->join('perusahaan_profile', 'job_postings.id_user', '=', 'perusahaan_profile.id_user')
        ->where('job_detail.id_user', auth()->id()) // Filter by the logged-in user's ID
        ->select(
            'users.name as nama',                 // Name of the user
            'perusahaan_profile.*',  // Company name
            'job_postings.jabatan as posisi',     // Job position
            'job_postings.lokasi as lokasi',      // Job location
            'job_detail.created_at as tanggal_apply', // Application date
            'status.status_name as status'         // Application status
        )
        ->get();

        return view('user_apply.index', compact('results'));
    }


    public function show($id)
    {
        $results = DB::table('job_detail')
            ->join('users', 'job_detail.id_user', '=', 'users.id')
            ->join('job_postings', 'job_detail.id_job', '=', 'job_postings.id')
            ->join('status', 'job_detail.id_status', '=', 'status.id')
            ->join('perusahaan_profile', 'job_postings.id_user', '=', 'perusahaan_profile.id_user') // Adjusted join condition
            ->where('job_detail.id_user', $id) // Use the provided $id instead of auth()->id()
            ->select(
                'users.name as nama',                 // Name of the user
                'perusahaan_profile.nama_perusahaan', // Company name
                'job_postings.jabatan as posisi',     // Job position
                'job_postings.lokasi as lokasi',      // Job location
                'job_detail.created_at as tanggal_apply', // Application date
                'job_detail.*', // Application date
                'status.status_name as status'         // Application status
            )
            ->get();

        return view('user_apply.detail', compact('results'));
    }

}
