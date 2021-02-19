<?php

namespace App\Http\Middleware;

use Closure;
use App\Admin;
use DB;

class LoginMiddleware
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
        if ($request->input('token')) {
            $check = Admin::where('token', $request->input('token'))->first();
 
            if (!$check) {
                return response(view('error.error-403'), 403);
            } else {
                return $next($request);
            }
        } else {
            return response(view('error.error-403'), 403);
        }
    }
}
