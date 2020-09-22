<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
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

      if (Auth::user()->status_id == 2) {
        return redirect(route('non_verified'));
      }

      if (Auth::user()->status_id == 3) {
        return redirect(route('non_verified'));
      }

        return $next($request);
    }
}
