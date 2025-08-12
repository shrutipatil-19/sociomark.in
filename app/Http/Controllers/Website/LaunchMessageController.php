<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\LaunchMessage;
use Illuminate\Http\Request;

class LaunchMessageController extends Controller
{
    public function index()
    {
        // Get latest messages for display
        $messages = LaunchMessage::latest()->get();
        return view('Frontend/launch-wall', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'message' => 'required|max:255'
        ]);

        LaunchMessage::create($request->only('name', 'message'));

        return redirect()->back()->with('success', 'Thanks for your wishes!');
    }
}
