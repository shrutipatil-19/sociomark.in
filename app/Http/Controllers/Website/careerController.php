<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Mail\NewJobLead;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Models\Jobpost;
use Illuminate\Support\Facades\Mail;

class careerController extends Controller
{
    // public function innerCareer()
    // {
    //     return view('frontend.innerCareers');
    // }
    // app/Http/Controllers/JobController.php
    public function innerCareer()
    {
        // $job = Jobpost::findOrFail($id);
        return view('Frontend.innerCareers');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|max:255',
            'phone'  => 'required|digits:10',
            'cv'     => 'required|file|mimes:pdf,doc,docx|max:2048',
            'plinks' => 'nullable|string|max:500',
            'page_url' => 'nullable|url|max:1000',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        $lead =   JobApplication::create([
            'name'   => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'cv'     => $cvPath,
            'plinks' => $request->plinks,
            'page_url' => $request->page_url,
        ]);
        // Send email to HR about job
        Mail::to('hr@sociomark.in')->send(new NewJobLead($lead));
        return back()->with('success', 'Application submitted successfully!');
    }
}
