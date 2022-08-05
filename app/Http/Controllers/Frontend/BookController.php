<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
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

        $title = 'BOOKSTORE - ITEM';
        return view('frontend.book.item', compact('data', 'theSameBook', 'title'));
    }

    public function getList($id = '')
    {
        $arrQuery[] = ['status', '=', 'active'];

        if (!empty($id)) $arrQuery[] = ['cate_id', '=', $id];

        if (isset($_GET['sort']) && $_GET['sort'] != 'default'){
            $orderBy = explode('_', $_GET['sort']);
        }else{
            $orderBy = ['ordering', 'ASC'];
        }

        if (isset($_GET['search'])) $arrQuery[] = ['name', 'like', '%'. $_GET['search'] .  '%'];

        $arrOptions = [
            'default' => ' - Sắp xếp - ',
            'price_asc' => 'Giá tăng dần',
            'price_desc' => 'Giá giảm dần',
            'id_desc' => 'Mới nhất'
        ];

        $data = Book::select('id', 'name', 'short_description', 'description', 'price', 'sale_off', 'picture', 'cate_id')->where($arrQuery)->orderBy($orderBy[0], $orderBy[1])->get();
        $count['total'] = count($data);

        $title = 'BOOKSTORE - LIST BOOK';
        return view('frontend.book.list', compact('data', 'id', 'title', 'arrOptions', 'count'));
    }
}
