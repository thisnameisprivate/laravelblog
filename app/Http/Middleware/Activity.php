<?php


namespace App\Http\Middleware;


use Closure;

class Activity {
    public function handle ($request, Closure $next) {
        if (time() < strtotime('2019-02-10')) {
            return redirect('Student/activity0');
        }
        return $next($request);
    }
}