<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
use App\Cart;
use Auth;

class UserController extends Controller
{
    public function getProfile()
    {
        $userInfo = Auth::user();
        $title = 'BOOK - PROFILE';
        return view('frontend.user.profile', compact('title', 'userInfo'));
    }

    public function getChangePassword()
    {
        $title = 'BOOK - CHANGE PASSWORD';
        return view('frontend.user.changePassword', compact('title'));
    }

    public function getOrderHistory()
    {
        $data = DB::table('carts')->select()->where([['username', '=', Auth::user()->username], ['status', '=', 'active']])->get();

        $title = 'BOOK - ORDER HISTORY';
        return view('frontend.user.orderHistory', compact('title', 'data'));
    }

    public function addToCart($id, $quantity)
    {
        if (isset($id) && !empty(Book::findOrFail($id))) {
            $cart = session('cart') ?? [];
            $quantities = $quantity ?? 1;
            $cart[$id]  = $cart[$id] ?? 0;
            $cart[$id] += $quantities;
            if ($cart[$id] < 1) unset($cart[$id]);
            session()->put('cart', $cart);
            $totalQuantities = array_sum(session('cart'));
            echo $totalQuantities;
        }
    }

    public function getCart()
    {
        $data = [];
        if (!empty(session('cart'))) {
            $arrTempCart = session('cart');
            $data = Book::select()->where('status', 'active')->where(function ($query) use ($arrTempCart) {
                foreach ($arrTempCart as $id => $quantities) {
                    $query->orWhere('id', $id);
                }
            })->get();
        }

        $title = 'BOOK - CART';
        return view('frontend.user.cart', compact('data', 'title'));
    }

    public function orderBooks()
    {
        unset($_POST['_token']);
        $order = [];
        if (!empty($_POST)) {
            $arrTempCart = $_POST;
            $order = Book::select(['id', 'name', 'price', 'sale_off', 'picture'])->where('status', 'active')->where(function ($query) use ($arrTempCart) {
                foreach ($arrTempCart as $id => $quantities) {
                    $query->orWhere('id', $id);
                }
            })->get();
        }

        foreach ($order as $book) {
            $bookId[]        = $book->id;
            $prices[]       = $book->price * (1 - $book->sale_off / 100) . '';
            $quantities[]   = $_POST[$book->id] . '';
            $names[]        = $book->name;
            $pictures[]     = $book->picture;
        }

        $cart = new Cart;
        $id             = randomString(7);
        $cart->id       = $id;
        $cart->username = Auth::user()->username;
        $cart->status   = 'inactive';
        $cart->date     = date('Y-m-d H:i:s');
        $cart->books    = json_encode($bookId);
        $cart->prices   = json_encode($prices);
        $cart->quantities = json_encode($quantities);
        $cart->names    = '["' . implode('","', $names) . '"]';
        $cart->pictures = json_encode($pictures);
        $cart->save();

        session()->forget('cart');
        return redirect()->route('frontend.user.orderStatus')->with(['status' => 'success', 'id' => $id]);
    }

    public function orderStatus()
    {
        if (session('status') == 'success') {
            $order['status'] = session('status');
            $order['id']     = session('id');
            session()->forget('status');
            session()->forget('id');
            $title = 'BOOK STORE - ORDER STATUS';
            return view('frontend.user.orderStatus', compact('title', 'order'));
        } else {
            $title = 'BOOK STORE - PAGE NOT FOUND';
            return view('errors.404', compact('title'));
        }
    }

    public function delItemCart($id)
	{
		if (!empty(Book::find($id))) {
			$cart = session('cart');
			unset($cart[$id]);
			session()->put('cart', $cart);
			return redirect()->route('frontend.user.getCart');
		}
	}
}
