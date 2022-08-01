<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function getProfile()
    {
        if (session()->has('userInfo')) {
            $userInfo = Auth::user();
            $title = 'BOOK - PROFILE';
            return view('frontend.user.profile', compact('title', 'userInfo'));
        }
    }
}
