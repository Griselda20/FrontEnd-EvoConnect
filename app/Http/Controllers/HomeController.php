<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class HomeController extends Controller
{
    public function index()
    {
        $listLowongan = Lowongan::all();
        return view('user.home', compact('listLowongan'));
    }
}
