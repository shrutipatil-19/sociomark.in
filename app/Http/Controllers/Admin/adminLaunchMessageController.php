<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LaunchMessage;
use Illuminate\Http\Request;

class adminLaunchMessageController extends Controller
{
    public function index()
    {
        $wishes = LaunchMessage::latest()->get();
        return view('admin/Pages/wishes/list', compact('wishes'));
    }
    public function destroy($id)
    {
        $wish = LaunchMessage::findOrFail($id);
        $wish->delete();

        return redirect()->route('message')->with('success', 'Message deleted successfully.');
    }
}
