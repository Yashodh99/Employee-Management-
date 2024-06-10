<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        
        return view('components.login');
    }

    public function login(Request $request)
    {
        
        $email = $request->input('email');
        $password = $request->input('password');

        
        if ($email && $password) {
            return redirect()->route('employees.index');
        }

        
        return redirect()->route('login.form')->withErrors(['Invalid login credentials']);
    }
}
