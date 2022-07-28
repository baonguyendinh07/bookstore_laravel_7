<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Book;
use App\Cate;
use File;

class BookController extends Controller
{
    private function getCateOptions()
    {
        $cate = Cate::select('id', 'name')->get()->toArray();
        foreach ($cate as $value) {
            $result[$value['id']] = $value['name'];
        }
        return $result;
    }

    public function getList()
    {
        $data = Book::select('id', 'name', 'short_description', 'description', 'price', 'sale_off', 'picture', 'created_at', 'created_by', 'updated_at', 'updated_by', 'status', 'special', 'ordering', 'cate_id')->orderBy('id', 'DESC')->get()->toArray();
        $arrDataForCount = $data;
        $cateOptions = $this->getCateOptions();

        if (isset($_GET['status']) && $_GET['status'] != 'all') $arrQuery[] = ['status', '=', $_GET['status']];
        if (isset($_GET['cate_id']) && $_GET['cate_id'] != 'default') $arrQuery[] = ['cate_id', '=', $_GET['cate_id']];
        if (isset($_GET['special']) && $_GET['special'] != 'default') $arrQuery[] = ['special', '=', $_GET['special']];

        if (isset($_GET['search-key'])) $arrQuery[] = ['name', 'like', '%' . $_GET['search-key'] . '%'];
        if (!empty($arrQuery)) {
            $data = Book::select('id', 'name', 'short_description', 'description', 'price', 'sale_off', 'picture', 'created_at', 'created_by', 'updated_at', 'updated_by', 'status', 'special', 'ordering', 'cate_id')->where($arrQuery)->orderBy('id', 'DESC')->get()->toArray();

            foreach ($arrQuery as $key => $value) {
                if ($value[0] == 'status') unset($arrQuery[$key]);
            }

            $arrDataForCount = Book::select('status')->where($arrQuery)->orderBy('id', 'DESC')->get()->toArray();
        }

        $countActive = 0;
        $countInactive = 0;
        foreach ($arrDataForCount as $value) {
            if ($value['status'] == 'active') $countActive++;
            if ($value['status'] == 'inactive') $countInactive++;
        }

        $count = [
            'all' => count($arrDataForCount),
            'active' => $countActive,
            'inactive' => $countInactive
        ];

        return view('admin.book.list', compact('data', 'count', 'cateOptions'));
    }

    public function getAdd()
    {
        $cateOptions = $this->getCateOptions();
        return view('admin.book.add', compact('cateOptions'));
    }

    public function postAdd(BookRequest $request)
    {
        $book = new Book;
        $book->name                 = $request->name;
        $book->short_description    = $request->short_description;
        $book->description          = $request->description;
        $book->price                = $request->price;
        $book->sale_off             = $request->sale_off;

        if (!empty($request->file('picture'))) {
            $pictureName                = randomString(10) . '.jpg';
            $book->picture              = $pictureName;
            $request->file('picture')->move('resources/upload/book/images', $pictureName);
        }

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
        $cateOptions = $this->getCateOptions();
        return view('admin.book.edit', compact('data', 'id', 'cateOptions'));
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

        if (!empty($book->picture)) {
            File::delete('resources/upload/book/images/' . $book->picture);
        }

        if (!empty($request->file('picture'))) {
            $pictureName                = randomString(10) . '.jpg';
            $book->picture              = $pictureName;
            $request->file('picture')->move('resources/upload/book/images', $pictureName);
        }

        $book->status               = $request->status ?? 'inactive';
        $book->special              = $request->special ?? '0';
        $book->cate_id              = $request->cate_id;
        $book->ordering             = $request->ordering ?? '10';
        $book->created_by = 'admin';
        $book->updated_by = 'admin';
        $book->save();
        return redirect()->route('admin.book.getList')->with(['flash_type' => 'success', 'flash_message' => 'Thông tin sách đã được chỉnh sửa thành công!']);
    }

    public function changeStatus($id, $status)
    {
        $data           = Book::findOrFail($id);
        $data->status   = $status == 'active' ? 'inactive' : 'active';
        $data->save();
        $data           = Book::findOrFail($id);
        showStatus($data->status, route('admin.book.changeStatus', [$id, $data->status]), 'status');
    }

    public function changeSpecial($id, $special)
    {
        $data           = Book::findOrFail($id);
        $data->special  = $special == 1 ? 0 : 1;
        $data->save();
        $data           = Book::findOrFail($id);
        showStatus($data->special, route('admin.book.changeSpecial', [$id, $data->special]), 'special');
    }

    public function changeOrdering($id, $ordering)
    {
        $data           = Book::findOrFail($id);
        $data->ordering  = $ordering;
        $data->save();
    }

    public function changeCateId($id, $cateId)
    {
        $data           = Book::findOrFail($id);
        $data->cate_id  = $cateId;
        $data->save();
    }

    public function getDelete($id)
    {
        //bước 1: xóa file ảnh trước
        //bước 2: xóa dòng dữ liệu
        $book = Book::find($id);
        File::delete('resources/upload/book/images/' . $book->picture);
        $book->delete($id);
        return redirect()->route('admin.book.getList')->with(['flash_type' => 'success', 'flash_message' => 'Thông tin sách đã được xóa thành công!']);
    }
}
