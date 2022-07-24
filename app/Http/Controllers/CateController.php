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
        $cate->status   = $request->status ?? 'inactive';
        $cate->special  = $request->special ?? '0';
        $cate->ordering = $request->ordering ?? '10';
        $cate->created_by = 'admin';
        $cate->updated_by = 'admin';
        $cate->save();
        return redirect()->route('admin.cate.getList')->with(['flash_type' => 'success', 'flash_message' => 'Category được thêm thành công!']);
    }

    public function getEdit($id)
    {
        $data = Cate::findOrFail($id)->toArray();
        return view('admin.cate.edit', compact('data', 'id'));
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate(
            $request,
            ['cateName'=>'required'],
            ['cateName.required'=>'Category không được để trống!']
        );
        $cate = Cate::find($id);
        $cate->name     = $request->cateName;
        $cate->status   = $request->status ?? 'inactive';
        $cate->special  = $request->special ?? '0';
        $cate->ordering = $request->ordering ?? '10';
        $cate->created_by = 'admin';
        $cate->updated_by = 'admin';
        $cate->save();
        return redirect()->route('admin.cate.getList')->with(['flash_type' => 'success', 'flash_message' => 'Category đã được chỉnh sửa!']);
    }

    public function getDelete($id)
    {
        $cate = Cate::find($id);
        $cate->delete($id);
        return redirect()->route('admin.cate.getList')->with(['flash_type' => 'success', 'flash_message' => 'Category đã được xóa thành công!']);
    }
}
