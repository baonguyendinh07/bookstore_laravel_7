<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function getLogin(){
        return view('admin.login');
    }

    public function getPost(LoginRequest $request){
        $login = [
            'username' => $request->username,
            'password' => $request->password,
            
        ];
    }
}
