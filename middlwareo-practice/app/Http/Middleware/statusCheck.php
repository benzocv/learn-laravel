<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class statusCheck
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
        if($request->status && $request->status !== 'rich'){
            return redirect('i-am-poor');
        }
        return $next($request);
    }
}
