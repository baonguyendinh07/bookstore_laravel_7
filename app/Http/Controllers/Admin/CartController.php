<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cart;

class CartController extends Controller
{
    public function getList()
    {
        $arrSelect = ['carts.id', 'carts.username', 'carts.books', 'carts.prices', 'carts.quantities', 'carts.names', 'carts.pictures', 'carts.status', 'carts.date', 'users.fullname', 'users.phone_number', 'users.address'];

        $data = DB::table('carts')->select($arrSelect)->join('users', 'users.username', '=', 'carts.username')->orderBy('date', 'DESC')->get();
        $arrDataForCount = count($data);

        if (isset($_GET['status']) && $_GET['status'] != 'all') $arrQuery[] = ['carts.status', '=', $_GET['status']];
        if (isset($_GET['search-key'])) $arrQuery[] = ['carts.username', 'like', '%' . $_GET['search-key'] . '%'];

        if (!empty($arrQuery)) {
            $data = DB::table('carts')->select($arrSelect)->where($arrQuery)->join('users', 'users.username', '=', 'carts.username')->orderBy('date', 'DESC')->get();
            foreach ($arrQuery as $key => $value) {
                if ($value[0] == 'carts.status') unset($arrQuery[$key]);
            }

            $arrDataForCount = Cart::where($arrQuery)->count();
        }

        if (!empty($arrQuery)) {
            $countActive = Cart::where([['status', '=', 'active'], ['username', 'like', '%' . $_GET['search-key'] . '%']])->count();
            $countInactive = Cart::where([['status', '=', 'inactive'], ['username', 'like', '%' . $_GET['search-key'] . '%']])->count();
        } else {
            $countActive = Cart::where('status', 'active')->count();
            $countInactive = Cart::where('status', 'inactive')->count();
        }

        $count = [
            'all' => $arrDataForCount,
            'active' => $countActive,
            'inactive' => $countInactive
        ];

        $data = json_decode($data, true);
        $title = 'Cart - List';
        return view('admin.cart.list', compact('data', 'count', 'title'));
    }

    public function getDetail($id)
    {
        $arrSelect = ['carts.id', 'carts.username', 'carts.books', 'carts.prices', 'carts.quantities', 'carts.names', 'carts.pictures', 'carts.status', 'carts.date', 'users.fullname', 'users.phone_number', 'users.address'];
        $data = DB::table('carts')->select($arrSelect)->join('users', 'users.username', '=', 'carts.username')->where('carts.id', $id)->get()->first();

        $title = 'Cart - Detail';
        return view('admin.cart.detail', compact('data', 'title'));
    }

    public function changeStatus($id, $status)
    {
        $data       = Cart::findOrFail($id);
        $data->status   = $status == 'active' ? 'inactive' : 'active';
        $data->save();
        $data           = Cart::findOrFail($id);

        showStatus($data->status, route('admin.cart.changeStatus', [$id, $data->status]), 'status');
    }
}
