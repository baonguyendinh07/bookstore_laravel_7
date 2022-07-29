<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Book;
use App\Cate;

class IndexController extends Controller
{
    public function getIndex()
    {
        $sliders = Slider::select('id', 'name', 'description', 'picture', 'link', 'status', 'ordering', 'created_at', 'created_by', 'updated_at', 'updated_by', 'status')->where('status', 'active')->orderBy('ordering', 'ASC')->get()->toArray();

        $specialBooks = Book::select('id', 'name', 'short_description', 'price', 'sale_off', 'picture')->where([['status', '=', 'active'], ['special', '=', '1']])->orderBy('ordering', 'ASC')->get()->toArray();

        $specialCategories = Cate::select('id', 'name')->where([['status', '=', 'active'], ['special', '=', '1']])->orderBy('ordering', 'ASC')->get()->toArray();

        foreach($specialCategories as $value){
            $booksOfSpecialCates[$value['id']] = Book::select('id', 'name', 'short_description', 'price', 'sale_off', 'picture')->where([['status', '=', 'active'], ['cate_id', '=', $value['id']]])->orderBy('ordering', 'ASC')->take(8)->get()->toArray();
        }

        return view('frontend.index.index', compact('sliders', 'specialBooks', 'specialCategories', 'booksOfSpecialCates'));
    }
}
