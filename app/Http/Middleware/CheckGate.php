<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;

class CheckGate
{
    public function handle($request, Closure $next, $gateName)
    {
        if (Gate::denies($gateName)) {
            abort(403, 'Unauthorized (Gate: ' . $gateName . ')');
        }

        return $next($request);
    }
}
