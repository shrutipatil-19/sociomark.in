<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ServicesController extends Controller
{
    public function addServices()
    {
        if (Gate::allows('admin-access') || Gate::allows('user-access')) {
            // Allow access
            return view('admin.addServices');
        }
        
        abort(403, 'Unauthorized access.');
    }
}
