<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LowonganController extends Lowongan
{
    //funstion to return the view of the evoteks page
    public function index()
    {
        return view('lowongan');
    }
}
