<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Group;
use App\User;

class GroupController extends Controller
{
    public function getList()
    {
        $data = Group::select('id', 'name', 'status', 'group_acp')->get()->toArray();

        $count = [];
        foreach ($data as $item) {
            $count[$item['id']] = User::where('group_id', $item['id'])->count();
        }

        return view('admin.group.list', compact('data', 'count'));
    }
}
