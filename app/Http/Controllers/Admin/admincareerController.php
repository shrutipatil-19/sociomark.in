<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class admincareerController extends Controller
{
    public function jobLeads()
    {
        $jobLeads = JobApplication::get();
        return view('admin.pages.job.joblist', compact('jobLeads'));
    }
}
