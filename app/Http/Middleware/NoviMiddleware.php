<?php

namespace App\Http\Middleware;

use Closure;

class NoviMiddleware
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
        if($request->route('ba') !== 'bane'){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
