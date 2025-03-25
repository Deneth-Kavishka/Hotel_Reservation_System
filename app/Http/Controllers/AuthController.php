<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('login'); // This will point to the login view
    }

    // Handle the login logic
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        // Check the credentials
        $credentials = $request->only('username', 'password');
        
        // Print username and password for debugging
        //dd(vars: $credentials); // or use 
        // var_dump($credentials);
    
        // Attempt to find txhe user in the database
        $user = DB::select('SELECT * FROM login WHERE username = ?', [$credentials['username']]);
        //dd(vars: $user);
        $user = $user ? $user[0] : null;  // Get the first result or null if not found
        // Check credentials without hashing (for testing only)
        if ($user && $credentials['password'] === $user->password) {
            return redirect()->intended('/admin/dashboard');
        }
    
        // If the credentials do not match, redirect back with an error message
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
     
}