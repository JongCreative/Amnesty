<?php

namespace App\Http\Middleware;

use Closure;

class CheckBanned
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

        if (auth()->check() && auth()->user()->banned) {

            auth()->logout();
            $message = 'Your account has been suspended. Please contact an administrator.';

            return redirect()->route('login')->with('message', $message);
        }


        return $next($request);
    }
}
