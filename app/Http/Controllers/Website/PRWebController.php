<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\PR;
use Illuminate\Http\Request;

class PRWebController extends Controller
{
    public function index()
    {
        $prs = PR::orderBy('post_date', 'desc')->get();
        return view('Frontend.PR.pr', compact('prs'));
    }
}
