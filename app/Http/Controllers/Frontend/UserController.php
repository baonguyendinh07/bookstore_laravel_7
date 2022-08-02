<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function getProfile()
    {
        $userInfo = Auth::user();
        $title = 'BOOK - PROFILE';
        return view('frontend.user.profile', compact('title', 'userInfo'));
    }

    public function getChangePassword()
    {
        $title = 'BOOK - CHANGE PASSWORD';
        return view('frontend.user.changePassword', compact('title'));
    }

    public function getOrderHistory()
    {
        $title = 'BOOK - ORDER HISTORY';
        return view('frontend.user.orderHistory', compact('title'));
    }
}
