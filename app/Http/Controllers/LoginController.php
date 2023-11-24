<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    
    /**
     * Call the API endpoint for login.
     */
    protected function callApiLoginEndpoint(array $credentials)
    {
        // Adjust the URL to your actual API login endpoint
        return \Http::post('https://api.ppdb.smktibazma.sch.id/api/v1/auth/login', $credentials);
    }

    /**
     * Handle a login request to the application.
     */

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');

        // Call the API login endpoint
        $response = $this->callApiLoginEndpoint($credentials);

        // Check if the API login was successful
        if ($response->successful()) {
            // Save the token in the session
            $token = $response->json()['token'];
            session(['token' => $token]);
	
            // $request->session()->regenerate();
            // return redirect()->intended('dashboard');

            // Redirect to the dashboard or return a JSON response
            return $request->wantsJson()
                ? response()->json(['message' => 'Login successful', 'token' => $token], 200)
                : redirect('/dashboard');
        } else {
            dd('hallo');
            exit();
            // Handle login failure
            return $request->wantsJson()
                ? response()->json(['message' => 'Login failed. Please check your credentials.'], 401)
                : back()->withErrors(['error' => 'Login failed. Please check your credentials.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
