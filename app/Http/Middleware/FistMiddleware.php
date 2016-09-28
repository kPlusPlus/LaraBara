<?php

namespace App\Http\Middleware;

use Closure;

class FistMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo '<br>First Middleware';
        return $next($request);
    }
}
