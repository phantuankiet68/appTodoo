<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfRoot
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->path() === '/') {
            return redirect('/vi')->with(
                'success', session('success')
            )->with(
                'error', session('error')
            )->withInput();
        }
    

        return $next($request);
    }
}
