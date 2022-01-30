<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{

    public function handle($request, Closure $next, ...$guards)
    {
        if(!Auth::guard('admin')->check()){
            //return response('Not Allow Access',403);
            return redirect('admin/login');
        }
        return $next($request);
    }

//    protected function redirectTo($request)
//    {
//        if (! $request->expectsJson()) {
//            if ($request->is('admin/*')){
//                return redirect('admin/login');
//            }
//
//           // return route('user.login');
//        }
//    }
}
