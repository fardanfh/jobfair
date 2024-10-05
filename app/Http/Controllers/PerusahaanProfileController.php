<?php

namespace App\Http\Controllers;

use App\Models\PerusahaanProfile;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerusahaanProfileController extends Controller
{
    // Display a listing of the user profiles
    public function index()
    {
        $profile = PerusahaanProfile::where('id_user', auth()->user()->id)->first(); // Get the user's profile
        return view('perusahaan_profile.index', compact('profile'));
    }


    // Show the form for creating a new user profile
    public function create()
    {
        return view('perusahaan_profile.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_perusahaan' => 'nullable|string',
            'bio' => 'nullable|string',
            'alamat' => 'nullable|string|max:255',
            'notelp' => 'nullable|string|max:15',
        ]);

        // Initialize an array for the data to be saved
        $data = [
            'id_user' => auth()->id(), // Assuming the user is authenticated
            'nama_perusahaan' => $request->nama_perusahaan,
            'bio' => $request->bio,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
        ];

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }
        // Save the profile data
        $profile = PerusahaanProfile::create($data);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Profile created successfully!');
    }

    // Display the specified user profile
    public function show($id)
    {
        $profile = UserProfile::with('user')->findOrFail($id);
        return view('user_profiles.show', compact('profile'));
    }

    // Show the form for editing the specified user profile
    public function edit($id)
    {
        $profile = UserProfile::findOrFail($id);
        return view('user_profiles.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'nullable|string|max:255',
            'cv' => 'nullable|mimes:pdf|max:2048',
            'sertifikat' => 'nullable|mimes:pdf|max:2048',
        ]);

        // Find the user profile
        $profile = UserProfile::where('id_user', $id)->first();

        // Check if the profile exists
        if (!$profile) {
            return redirect()->back()->withErrors(['error' => 'User profile not found.']);
        }

        // Handle file uploads
        if ($request->hasFile('profile_image')) {
            // Save profile image and store the path
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $profile->profile_image = $imagePath; // Update profile image path
        }

        if ($request->hasFile('cv')) {
            // Save CV and store the path
            $cvPath = $request->file('cv')->store('cvs', 'public');
            $profile->cv = $cvPath; // Update CV path
        }

        if ($request->hasFile('sertifikat')) {
            // Save certificate and store the path
            $sertifikatPath = $request->file('sertifikat')->store('certificates', 'public');
            $profile->sertifikat = $sertifikatPath; // Update certificate path
        }

        // Update other profile attributes
        $profile->bio = $request->bio;
        $profile->save(); // Save changes to the database

        // Redirect with success message
        return redirect()->route('user_profiles.index')->with('success', 'Profile updated successfully!');
    }

}
