<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use App\Group;
use File;

class UserController extends Controller
{

    private function getGroupIdOptions()
    {
        $cate = Group::select('id', 'name')->get()->toArray();
        foreach ($cate as $value) {
            $result[$value['id']] = $value['name'];
        }
        return $result;
    }

    public function getList()
    {
        $data = User::select('id', 'username', 'avatar', 'password', 'email', 'fullname', 'birthday', 'phone_number', 'address', 'created_at',  'created_by', 'updated_at', 'updated_by', 'status', 'group_id')->orderBy('id', 'DESC')->get()->toArray();
        $arrDataForCount = $data;
        $groupIdOptions = $this->getGroupIdOptions();

        if (isset($_GET['status']) && $_GET['status'] != 'all') $arrQuery[] = ['status', '=', $_GET['status']];
        if (isset($_GET['group_id']) && $_GET['group_id'] != 'default') $arrQuery[] = ['group_id', '=', $_GET['group_id']];
        if (isset($_GET['search-key'])) $arrQuery[] = ['username', 'like', '%' . $_GET['search-key'] . '%'];

        if (!empty($arrQuery)) {
            $data = User::select('id', 'username', 'avatar', 'password', 'email', 'fullname', 'birthday', 'phone_number', 'address', 'created_at',  'created_by', 'updated_at', 'updated_by', 'status', 'group_id')->where($arrQuery)->orderBy('id', 'DESC')->get()->toArray();

            foreach ($arrQuery as $key => $value) {
                if ($value[0] == 'status') unset($arrQuery[$key]);
            }

            $arrDataForCount = User::select('status')->where($arrQuery)->orderBy('id', 'DESC')->get()->toArray();
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

        return view('admin.user.list', compact('data', 'count', 'groupIdOptions'));
    }

    public function getAdd()
    {
        $groupIdOptions = $this->getGroupIdOptions();
        return view('admin.user.add', compact('groupIdOptions'));
    }

    public function postAdd(UserRequest $request)
    {
        $user = new User;
        $user->username             = $request->username;
        $avatarName                 = randomString(10) . '.jpg';
        $user->avatar               = $avatarName;

        if (!empty($user->avatar)) {
            File::delete('resources/upload/user/images/' . $user->avatar);
        }

        if (!empty($request->file('avatar'))) {
            $avatarName                = randomString(10) . '.jpg';
            $user->avatar              = $avatarName;
            $request->file('avatar')->move('resources/upload/user/images', $avatarName);
        }

        $user->email                = $request->email;
        $user->password             = md5($request->password);
        $user->fullname             = $request->fullname;
        $user->status               = $request->status ?? 'active';
        $user->group_id             = $request->group_id;
        $user->created_by           = 'admin';
        $user->updated_by           = 'admin';
        $user->save();
        return redirect()->route('admin.user.getList')->with(['flash_type' => 'success', 'flash_message' => 'User đã được thêm thành công!']);
    }

    public function changeStatus($id, $status)
    {
        $data           = User::findOrFail($id);
        $data->status   = $status == 'active' ? 'inactive' : 'active';
        $data->save();
        $data           = User::findOrFail($id);
        showStatus($data->status, route('admin.user.changeStatus', [$id, $data->status]), 'status');
    }

    public function changeGroupId($id, $groupId)
    {
        $data           = User::findOrFail($id);
        $data->group_id  = $groupId;
        $data->save();
    }

    public function getDelete($id)
    {
        //bước 1: xóa file ảnh trước
        //bước 2: xóa dòng dữ liệu
        $user = User::find($id);
        File::delete('resources/upload/user/images/' . $user->picture);
        $user->delete($id);
        return redirect()->route('admin.user.getList')->with(['flash_type' => 'success', 'flash_message' => 'Thông tin sách đã được xóa thành công!']);
    }
}
