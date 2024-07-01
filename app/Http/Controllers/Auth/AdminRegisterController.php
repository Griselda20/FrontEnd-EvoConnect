<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.admin-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admin'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        Admin::create([
            'nama' => $request->nama,
            'username' => $request->password, //ini diremove saja tadi ketinggalan
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/admin/login')->with('success', 'Admin registered successfully!');
    }
}
