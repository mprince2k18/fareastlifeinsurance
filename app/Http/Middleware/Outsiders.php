<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Outsiders
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
      if (Auth::user()->status_id == 1) {
        return redirect(route('dashboard'));
      }
        return $next($request);
    }
}
