<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class FrontendLoginMiddleware
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
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->status == 'active') {
                return $next($request);
            } else {
                //logout
                return redirect()->route('frontend.login.getLogout');
            }
        } else {
            return redirect('frontend/login/login');
        }
    }
}
