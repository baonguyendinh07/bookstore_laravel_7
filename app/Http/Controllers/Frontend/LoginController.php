<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Frontend\LoginRequest;
use Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        if (Auth::check()) {
            return redirect('frontend/index/index');
        } else {
            $title = 'BOOKSTORE - LOGIN';
            return view('frontend.login.login', compact('title'));
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
            $userInfo = [
                'id' => Auth::user()->id
            ];
            session()->put('userInfo', $userInfo);
            return redirect()->route('frontend.index.getIndex');
        } else {
            return redirect()->back()->with(['flash_type' => 'danger', 'flash_message' => 'Username hoặc Password không đúng, vui lòng đăng nhập lại!']);
        }
    }

    public function getRegister()
    {
        if (Auth::check()) {
            return redirect('frontend/index/index');
        } else {
            $title = 'BOOKSTORE - REGISTER';
            return view('frontend.login.register', compact('title'));
        }
    }

    public function getLogout()
    {
        if (Auth::check()) {
            session()->flush();
            Auth::logout();

            return redirect('frontend/login/login');
        } else {
            return redirect('frontend/error/error');
        }
    }
}
