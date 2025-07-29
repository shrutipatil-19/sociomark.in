<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLocale(Request $request, $locale)
    {
        if (in_array($locale, ['en', 'hi', 'ar'])) { 
            return redirect()->back()->withCookie(cookie('app_locale', $locale, 60 * 24 * 30)); // Set locale in cookie
        }
        return redirect()->back();
    }
}
