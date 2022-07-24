<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Book;
use App\Cate;

class BookController extends Controller
{
    private function getArrCate(){
        $cate = Cate::select('id', 'name')->get()->toArray();
        foreach($cate as $value){
            $result[$value['id']] = $value['name'];
        }
        return $result;
    }

    public function getList()
    {
        $data = Book::select('id', 'name', 'short_description', 'description', 'price', 'sale_off', 'picture', 'created_at', 'created_by', 'updated_at', 'updated_by', 'status', 'special', 'ordering', 'cate_id')->orderBy('id', 'DESC')->get()->toArray();
        $arrCate = $this->getArrCate();
        return view('admin.book.list', compact('data', 'arrCate'));
    }

    public function getAdd()
    {
        $arrCate = $this->getArrCate();
        return view('admin.book.add', compact('arrCate'));
    }

    public function postAdd(BookRequest $request)
    {
        $book = new Book;
        $book->name                 = $request->name;
        $book->short_description    = $request->short_description;
        $book->description          = $request->description;
        $book->price                = $request->price;
        $book->sale_off             = $request->sale_off;
        $book->picture              = 'jkdfggdfgd.jpg';
        $book->status               = $request->status ?? 'inactive';
        $book->special              = $request->special ?? '0';
        $book->cate_id              = $request->cate_id;
        $book->ordering             = $request->ordering ?? '10';
        $book->created_by = 'admin';
        $book->updated_by = 'admin';
        $book->save();
        return redirect()->route('admin.book.getList')->with(['flash_type' => 'success', 'flash_message' => 'Sách đã được thêm thành công!']);
    }

    public function getEdit($id)
    {
        $data = Book::findOrFail($id)->toArray();
        $arrCate = $this->getArrCate();
        return view('admin.book.edit', compact('data', 'id', 'arrCate'));
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'price' => 'required',
                'cate_id' => 'required'
            ],
            [
                'name.required' => 'Name không được để trống!',
                'price.required' => 'Price không được để trống!',
                'cate_id.required' => 'Category không được để trống!'
            ]
        );
        $book = Book::find($id);
        $book->name                 = $request->name;
        $book->short_description    = $request->short_description;
        $book->description          = $request->description;
        $book->price                = $request->price;
        $book->sale_off             = $request->sale_off;
        $book->picture              = 'jkdfggdfgd.jpg';
        $book->status               = $request->status ?? 'inactive';
        $book->special              = $request->special ?? '0';
        $book->cate_id              = $request->cate_id;
        $book->ordering             = $request->ordering ?? '10';
        $book->created_by = 'admin';
        $book->updated_by = 'admin';
        $book->save();
        return redirect()->route('admin.book.getList')->with(['flash_type' => 'success', 'flash_message' => 'Thông tin sách đã được chỉnh sửa thành công!']);
    }

    public function getDelete($id)
    {
        $cate = Book::find($id);
        $cate->delete($id);
        return redirect()->route('admin.book.getList')->with(['flash_type' => 'success', 'flash_message' => 'Category đã được xóa thành công!']);
    }
}
