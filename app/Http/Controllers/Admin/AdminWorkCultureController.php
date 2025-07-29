<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminWorkCultureController extends Controller
{
    public function create()
    {
        return view('admin/Pages/WorkCultureGallary/Create');
    }
}
