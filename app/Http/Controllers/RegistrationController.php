<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users',
            'gender' => 'required|email|unique:users',
            'pass' => 'required|min:6',
            'cpass' => 'required|min:6',
        ]);

        // Create a new user
        $user = User::create([
            'fname' => $validatedData['fname'],
            'lname' => $validatedData['lname'],
            'email' => $validatedData['email'],
            'gender' => $validatedData['gender'],
            'pass' => bcrypt($validatedData['pass']),
            'cpass' => bcrypt($validatedData['cpass']),
        ]);

        // Redirect or perform any other actions

        // For example, you can redirect to the login page
        return redirect('/Login');
    }
}
