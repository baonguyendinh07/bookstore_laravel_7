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
        return view('admin.login');
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
                return redirect()->route('admin.book.getList');
            } else {
                return redirect()->back()->with(['flash_type' => 'danger', 'flash_message' => 'Username hoặc Password không đúng, vui lòng đăng nhập lại!']);
            }
        } else {
            return redirect()->back()->with(['flash_type' => 'danger', 'flash_message' => 'Username hoặc Password không đúng, vui lòng đăng nhập lại!']);
        }
    }
}
