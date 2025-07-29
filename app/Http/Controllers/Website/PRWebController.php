<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\PR;
use Illuminate\Http\Request;

class PRWebController extends Controller
{
    public function index()
    {
        $p_r_s = PR::all();
        return view('Frontend/PR/pr', compact('p_r_s'));
    }
}
