<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function getList()
    {
        $data = Slider::select('id', 'name', 'description', 'picture', 'link', 'status', 'ordering', 'created_by', 'updated_by', 'status')->orderBy('id', 'DESC')->get()->toArray();

        $arrDataForCount = $data;

        if (isset($_GET['status']) && $_GET['status'] != 'all') $arrQuery[] = ['status', '=', $_GET['status']];

        if (!empty($arrQuery)) {
            $data = Slider::select('id', 'name', 'description', 'picture', 'link', 'status', 'ordering', 'created_by', 'updated_by', 'status')->where($arrQuery)->orderBy('id', 'DESC')->get()->toArray();

            foreach ($arrQuery as $key => $value) {
                if ($value[0] == 'status') unset($arrQuery[$key]);
            }

            $arrDataForCount = Slider::select('status')->where($arrQuery)->orderBy('id', 'DESC')->get()->toArray();
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

        $title = 'Slider - List';
        return view('admin.slider.list', compact('data', 'count', 'title'));
    }

    public function changeStatus($id, $status)
    {
        $data           = Slider::findOrFail($id);
        $data->status   = $status == 'active' ? 'inactive' : 'active';
        $data->save();
        $data           = Slider::findOrFail($id);
        showStatus($data->status, route('admin.slider.changeStatus', [$id, $data->status]), 'status');
    }

    public function changeOrdering($id, $ordering)
    {
        $data           = Slider::findOrFail($id);
        $data->ordering  = $ordering;
        $data->save();
    }

    public function getDelete($id)
    {
        $slider = Slider::find($id);
        $slider->delete($id);
        return redirect()->route('admin.cate.getList')->with(['flash_type' => 'success', 'flash_message' => 'Category đã được xóa thành công!']);
    }
}
