<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class LanguageSwitcher
{
    public function handle(Request $request, Closure $next): Response
    {
        // Get locale from cookie or fallback to default
        $locale = $request->cookie('app_locale', config('app.locale', 'en')); // Default to 'en'

        // Set application locale correctly
        App::setLocale($locale);

        return $next($request);
    }
}


