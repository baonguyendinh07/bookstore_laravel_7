<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
use App\Group;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        if(Auth::check()){
            return redirect('admin/book/list');
        }else{
            $title = 'Admin - Login';
            return view('admin.login', compact('title'));
        }
    }

    public function postLogin(LoginRequest $request)
    {
        $login = [
            'username' => $request->username,
            'password' => $request->password,
            'status'   => 'active'
        ];

        if (Auth::attempt($login)) {
            $group_id = User::where('username', $request->username)->first()->group_id;
            $group_acp = Group::find($group_id)->group_acp;
            if ($group_acp == 1) {
                $userInfo = [
                    'id' => Auth::user()->id
                ];
                session()->put('userInfo', $userInfo);
                return redirect('admin/dashboard/list');
            } else {
                return redirect()->back()->with(['flash_type' => 'danger', 'flash_message' => 'Username hoặc Password không đúng, vui lòng đăng nhập lại!']);
            }
        } else {
            return redirect()->back()->with(['flash_type' => 'danger', 'flash_message' => 'Username hoặc Password không đúng, vui lòng đăng nhập lại!']);
        }
    }

    public function getLogout()
    {
        if(Auth::check()){
            session()->flush();
            Auth::logout();

            return redirect('admin/login');
        }
    }
}
