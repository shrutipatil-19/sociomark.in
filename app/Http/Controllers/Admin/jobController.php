<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jobpost;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function create()
    {
        return view('admin.Pages.job.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'compensation' => 'required|string',
            'role_overview' => 'required|string',
            'responsibilities' => 'required|string',
            'requirements' => 'required|string',
            'target_services' => 'required|string',
            'industry' => 'required|string',
            'position' => 'required|string',
            'experience' => 'required|string',
        ]);

        $job = new Jobpost();

        $job->title = $request->title;
        $job->description = $request->description;
        $job->location = $request->location;
        $job->compensation = $request->compensation;
        $job->role_overview = $request->role_overview;
        $job->responsibilities = json_encode(preg_split("/\r\n|\n|\r/", $request->responsibilities));
        $job->requirements = json_encode(preg_split("/\r\n|\n|\r/", $request->requirements));
        $job->target_services = json_encode(preg_split("/\r\n|\n|\r/", $request->target_services));
        $job->industry = $request->industry;
        $job->position = $request->position;
        $job->experience = $request->experience;

        $job->save();

        return redirect()->back()->with('success', 'Job Posted Successfully!');
    }
}
