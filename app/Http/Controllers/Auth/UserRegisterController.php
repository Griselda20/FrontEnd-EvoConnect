<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.user-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'max:255', 'unique:user'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'password' => Hash::make($request->password),
            'nama' => $request->nama_lengkap,
            'email' => $request->email,
        ]);

        return redirect('/login')->with('success', 'User registered successfully!');
    }
}
