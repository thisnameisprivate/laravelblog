<?php

namespace App\Http\Middleware;

use Closure;

class Activity {
    public function activity ($request, Closure $next) {
        if (time() < strtotime('2019-1-24')) {
            return "not find public page";
        }
        $next($request);
    }
}