<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class interestCheck
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
        if($request->interest && $request->interest == 'no'){
            return redirect('not-interested');
        }
        return $next($request);
    }
}
