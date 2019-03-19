<?php

namespace App\Http\Middleware;

use Closure;

class CheckRank
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rank)
    {
        $access=false;

        switch ($rank) {
            case 'admin':
                if ($request->user()->admin) {
                    $access=true;
                }
                break;
            // case 'jury':
            //     if ($request->user()->admin || $request->user()->jury) {
            //         $access=true;
            //     }
            //     break;
            default:
                $access=true;
                break;
        }
        
        if (!$access){
            return abort(403);
        }

        return $next($request);
    }
}
