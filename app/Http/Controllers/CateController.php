<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Cate;

class CateController extends Controller
{
    public function getList()
    {
        $data = Cate::select('id', 'name', 'created_at', 'created_by', 'updated_at', 'updated_by', 'status', 'special', 'ordering')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.cate.list', compact('data'));
    }

    public function getAdd()
    {
        return view('admin.cate.add');
    }

    public function postAdd(CateRequest $request)
    {
        $cate = new Cate;
        $cate->name     = $request->cateName;
        $cate->status   = $request->status;
        $cate->special  = $request->special;
        $cate->ordering = $request->ordering;
        $cate->created_by = 'admin';
        $cate->updated_by = 'admin';
        $cate->save();
        return redirect()->route('admin.cate.getList')->with(['flash_object'=>'Category', 'flash_message'=>'được thêm thành công!']);
    }

    public function getDelete($id){
        $cate = Cate::find($id);
        $cate->delete($id);
        return redirect()->route('admin.cate.getList')->with(['flash_object'=>'Category', 'flash_message'=>'đã được xóa thành công!']);
    }
}
