<?php

namespace App\Http\Middleware;
use Closure;
use Mockery\Undefined;

class AuthMiddleware
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
        $token = $request->cookie('user');
        if($token == null || $token === ""){
            return redirect('/admin/login');
        }
        return $next($request);

    }
}
