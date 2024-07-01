<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function uploadNewJob()
    {
        return view('admin.uploadnewjob');
    }

    public function archiveJob()
    {
        return view('admin.archivejob');
    }
}
