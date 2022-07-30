<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function getError(){
        $title = 'BOOKSTORE - PAGE NOT FOUND';
        return view('frontend.error.error', compact('title'));
    }
}
