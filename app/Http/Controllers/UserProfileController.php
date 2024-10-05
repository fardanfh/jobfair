<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    // Display a listing of the user profiles
    public function index()
    {
        $profile = UserProfile::where('id_user', auth()->user()->id)->first(); // Get the user's profile
        return view('user_profiles.index', compact('profile'));
    }


    // Show the form for creating a new user profile
    public function create()
    {
        return view('user_profiles.create');
    }

    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bio' => 'nullable|string',
            'cv' => 'nullable|mimes:pdf|max:2048',
            'sertifikat.*' => 'nullable|mimes:pdf|max:2048', // Make sure to validate each certificate in the array
        ]);

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            $profileImagePath = $request->file('profile_image')->store('profile_images', 'public');
        }

        // Handle CV upload
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cv', 'public');
        }

        // Handle multiple certificates upload
        $sertifikatPaths = [];
        if ($request->hasFile('sertifikat')) {
            foreach ($request->file('sertifikat') as $sertifikat) {
                $path = $sertifikat->store('sertifikats', 'public');
                $sertifikatPaths[] = $path;
            }
        }

        // Create the profile
        try {
            UserProfile::create([
                'id_user' => auth()->id(),
                'profile_image' => $profileImagePath ?? null,
                'bio' => $request->bio,
                'cv' => $cvPath ?? null,
                'sertifikat' => json_encode($sertifikatPaths), // Save multiple certificates as JSON
            ]);

            return redirect()->route('user_profiles.index')->with('success', 'Profile created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
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
