<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CateRequest;
use App\Cate;

class CateController extends Controller
{
    public function getList()
    {
        $data = Cate::select('id', 'name', 'created_at', 'created_by', 'updated_at', 'updated_by', 'status', 'special', 'ordering')->orderBy('id', 'DESC')->get()->toArray();

        $arrDataForCount = $data;

        if (isset($_GET['status']) && $_GET['status'] != 'all') $arrQuery[] = ['status', '=', $_GET['status']];
        if (isset($_GET['search-key'])) $arrQuery[] = ['name', 'like', '%' . $_GET['search-key'] . '%'];

        if (!empty($arrQuery)) {
            $data = Cate::select('id', 'name', 'created_at', 'created_by', 'updated_at', 'updated_by', 'status', 'special', 'ordering')->where($arrQuery)->orderBy('id', 'DESC')->get()->toArray();

            foreach ($arrQuery as $key => $value) {
                if ($value[0] == 'status') unset($arrQuery[$key]);
            }

            $arrDataForCount = Cate::select('status')->where($arrQuery)->orderBy('id', 'DESC')->get()->toArray();
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

        $title = 'Category - List';
        return view('admin.cate.list', compact('data', 'count', 'title'));
    }

    public function getAdd()
    {
        $title = 'Category - Add';
        return view('admin.cate.add', compact('title'));
    }

    public function postAdd(CateRequest $request)
    {
        $cate = new Cate;
        $cate->name     = $request->name;
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

        $title = 'Category - Add';
        return view('admin.cate.edit', compact('data', 'id', 'title'));
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate(
            $request,
            ['name' => 'required'],
            ['name.required' => 'Category không được để trống!']
        );
        $cate = Cate::find($id);
        $cate->name     = $request->name;
        $cate->status   = $request->status ?? 'inactive';
        $cate->special  = $request->special ?? '0';
        $cate->ordering = $request->ordering ?? '10';
        $cate->created_by = 'admin';
        $cate->updated_by = 'admin';
        $cate->save();
        return redirect()->route('admin.cate.getList')->with(['flash_type' => 'success', 'flash_message' => 'Category đã được chỉnh sửa!']);
    }

    public function changeStatus($id, $status)
    {
        $data           = Cate::findOrFail($id);
        $data->status   = $status == 'active' ? 'inactive' : 'active';
        $data->save();
        $data           = Cate::findOrFail($id);
        showStatus($data->status, route('admin.cate.changeStatus', [$id, $data->status]), 'status');
    }

    public function changeSpecial($id, $special)
    {
        $data           = Cate::findOrFail($id);
        $data->special  = $special == 1 ? 0 : 1;
        $data->save();
        $data           = Cate::findOrFail($id);
        showStatus($data->special, route('admin.cate.changeSpecial', [$id, $data->special]), 'special');
    }

    public function changeOrdering($id, $ordering)
    {
        $data           = Cate::findOrFail($id);
        $data->ordering  = $ordering;
        $data->save();
    }

    public function getDelete($id)
    {
        $cate = Cate::find($id);
        $cate->delete($id);
        return redirect()->route('admin.cate.getList')->with(['flash_type' => 'success', 'flash_message' => 'Category đã được xóa thành công!']);
    }
}
