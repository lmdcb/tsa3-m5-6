<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        // Retrieve the single demo user using Eloquent
        $user = User::first();

        // Pass the user record to the Profile Blade view
        return view('profile', compact('user'));
    }
}
