<?php

namespace App\Http\Middleware;

use Closure;

class CheckOwner
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
        $ownerId = 0;
        if ($request->route('photo'))
        {
             $ownerId = $request->route('photo')->user_id;
        }

        if ($request->route('user'))
        {
            $ownerId = $request->route('user');
        }

        if ( $request->user()->id != $ownerId && !$request->user()->admin ){
            return redirect('/');
        }

        return $next($request);
    }
}
