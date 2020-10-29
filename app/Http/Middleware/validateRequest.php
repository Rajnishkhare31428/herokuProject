<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class validateRequest
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
        echo 'the middle ware called';
        if($request->all()) {
            echo 'Message from middleware:You have something in request';
        }
        else {
            echo 'Message from middleware:your request is empty';
        }
        return $next($request);
    }
}
