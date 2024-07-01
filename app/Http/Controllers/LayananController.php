<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    //fungsi untuk menampilkan halaman tenaga ahli pada layanan/tenaga-ahli
    public function tenagaAhli()
    {
        return view('layanan.tenaga_ahli');
    }

    //fungsi untuk menampilkan halaman web apps pada layanan/web-apps
    public function webApps()
    {
        return view('layanan.web_apps');
    }

    //hrDevelopment
    public function hrDevelopment()
    {
        return view('layanan.hr_development');
    }
    
}
