<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
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
        $roles = ['admin', 'moderator', 'author'];
        if (in_array(auth()->user()->role, $roles)) {
            return $next($request);
        }
        return redirect('/');
    }
}
