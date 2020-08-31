<?php

namespace App\Http\Middleware;

use App\admin_user;
use Closure;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
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
        if(Session::get('admin_id')!=null)
        {
            return $next($request);
        }
        else
            return redirect('http://ngo-yasuo.org/admin/login');

    }
}
