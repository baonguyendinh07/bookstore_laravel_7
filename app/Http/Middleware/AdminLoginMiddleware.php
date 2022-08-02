<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Group;
use Auth;

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
        if (Auth::check()) {
            $user = Auth::user();
            $group_id = User::where('username', $user->username)->first()->group_id;
            $group_acp = Group::find($group_id)->group_acp;

            if ($user->status == 'active') {
                if ($group_acp == 1) {
                    return $next($request);
                } else {
                    // return view lỗi frontend
                    $title = 'BOOK STORE - PAGE NOT FOUND';
                    return view('errors.404', compact('title'));
                }
            }else{
                //logout
                return redirect()->route('admin.login.getLogout');
            }
        } else {
            return redirect('admin/login');
        }
    }

    /*     protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('admin.login.getLogin');
        }
    } */
}
