<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if (auth()->user()->roleuser == 'Admin') {
            return $next($request);
        } elseif (auth()->user()->roleuser == 'Jurnalis') {
            return $next($request);
        }

        return redirect('home')->with('error', "You don't have admin or jurnalis access.");
    }
}
