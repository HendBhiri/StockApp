<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login(Request $request)
{
    // Validate the login data
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to authenticate the administrator
    if (auth()->attempt($credentials) && auth()->user()->role === 'admin') {
        // Redirect authenticated administrators to the appropriate page
        return redirect()->route('/');
    }

    // Return a 403 response for non-admin users
    return abort(403, 'Unauthorized');
}

}
