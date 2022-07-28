<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class ItemController extends Controller
{
    public function getItem($id)
    {
        $data = Book::findOrFail($id)->toArray();

        $theSameBookQuery = [
            ['status', '=', 'active'],
            ['cate_id', '=', $data['cate_id']],
            ['id', '!=', $id]
        ];
        $theSameBook = Book::inRandomOrder()->select('id', 'name', 'short_description', 'price', 'sale_off', 'picture')->orderBy('id', 'DESC')->where($theSameBookQuery)->limit(6)->get()->toArray();
        return view('frontend.book.item', compact('data', 'theSameBook'));
    }
}
