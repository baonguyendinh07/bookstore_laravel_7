<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Group;
use App\User;
use App\Cate;
use App\Book;
use App\Slider;

class DashboardController extends Controller
{
    public function getList()
    {
        $total = [
            'group' => Group::count(),
            'user' => User::count(),
            'cate' => Cate::count(),
            'book' => Book::count(),
            'slider' => Slider::count()
        ];

        $title = 'Dashboard - List';
        return view('admin.dashboard.list', compact('total', 'title'));
    }
}