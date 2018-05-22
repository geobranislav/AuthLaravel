<?php

namespace App\Http\Middleware;

use Closure;

class noviMiddleware
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
        if($request->route('ba')=='logout'){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
