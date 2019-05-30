<?php

namespace App\Http\Middleware;
use Closure;
use App\User;
use App\Tintuc;
use Mockery\Undefined;

class TintucMiddleware
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
        $user = $request->cookie('user');
        $user = \json_decode($user);
        $user = User::findorFail($user->id);
        $tintuc = Tintuc::findorFail($request->id);

        //quyen admin or  la bai viet cua chinh no
        if($user->role == 0 || $tintuc->user_id == $user->id ){
            return $next($request);
        }else{
            return redirect('/admin/middleware');
        }        
    }
}
