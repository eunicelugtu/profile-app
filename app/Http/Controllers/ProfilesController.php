<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfilesController extends Controller
{
    public function getAllProfiles()
    {
        $profiles = Profile::all();
        return view('profiles', ['profiles' => $profiles]);
    }

    public function getProfile(Request $request)
    {
        $profile = Profile::find($request->id);
        if ($profile == null)
        {
            return abort(404);
        }
        return view('profile', ['profile' => $profile]);
    }
}

