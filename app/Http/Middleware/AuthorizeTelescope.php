<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthorizeTelescope
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!app()->environment('local')){
            if(
                in_array($request->query('auth') ?: session('auth_telescope'), ['61c567c5b5dcd8527893d933b41cfc08901f2e7b'])
            ){
                $request->session()->put('auth_telescope', '61c567c5b5dcd8527893d933b41cfc08901f2e7b');
                return $next($request);
            }
        }else{
            return $next($request);
        }

        abort(401);
    }
}
