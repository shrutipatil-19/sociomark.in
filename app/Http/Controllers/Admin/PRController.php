<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\PR;
use Illuminate\Http\Request;

class PRController extends Controller
{
    public function index()
    {
        $prs = PR::latest()->get();
        return view('admin/Pages/PR/listPR', compact('prs'));
    }

    public function create()
    {
        return view('admin/Pages/PR/addPR');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'card_title' => 'required',
            'pr_title' => 'required',
            'description' => 'required',
            'link' => 'nullable|url',
            'img' => 'nullable|image',
            'post_date' => 'required|date',
        ]);

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('prs', 'public');
        }

        PR::create($data);
        return redirect()->route('prs.index')->with('success', 'PR created!');
    }

    public function edit(PR $pr)
    {
        return view('admin/Pages/PR/editPR', compact('pr'));
    }

    public function update(Request $request, PR $pr)
    {
        $data = $request->validate([
            'card_title' => 'required',
            'pr_title' => 'required',
            'description' => 'required',
            'link' => 'nullable|url',
            'img' => 'nullable|image',
            'post_date' => 'required|date',
        ]);

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('prs', 'public');
        }

        $pr->update($data);
        return redirect()->route('prs.index')->with('success', 'PR updated!');
    }

    public function destroy(PR $pr)
    {
        $pr->delete();
        return back()->with('success', 'PR deleted!');
    }
}
