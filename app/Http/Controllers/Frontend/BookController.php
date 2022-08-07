<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Book;

class BookController extends Controller
{
    public function getItem($id)
    {
        $data = Book::findOrFail($id)->toArray();

        $theSameBookQuery = [
            ['status', '=', 'active'],
            ['cate_id', '=', $data['cate_id']],
            ['id', '!=', $id]
        ];
        $theSameBook = Book::inRandomOrder()->select('id', 'name', 'short_description', 'price', 'sale_off', 'picture')->orderBy('id', 'DESC')->where($theSameBookQuery)->limit(6)->get()->toArray();

        $title = 'BOOKSTORE - ITEM';
        return view('frontend.book.item', compact('data', 'theSameBook', 'title'));
    }

    public function getList($id = '')
    {
        $arrQuery[] = ['status', '=', 'active'];

        if (!empty($id)) $arrQuery[] = ['cate_id', '=', $id];

        if (isset($_GET['sort']) && $_GET['sort'] != 'default') {
            $orderBy = explode('_', $_GET['sort']);
        } else {
            $orderBy = ['ordering', 'ASC'];
        }

        if (isset($_GET['search'])) $arrQuery[] = ['name', 'like', '%' . $_GET['search'] .  '%'];

        $arrOptions = [
            'default' => ' - Sắp xếp - ',
            'price_asc' => 'Giá tăng dần',
            'price_desc' => 'Giá giảm dần',
            'id_desc' => 'Mới nhất'
        ];

        $data = Book::select('id', 'name', 'short_description', 'description', 'price', 'sale_off', 'picture', 'cate_id')->where($arrQuery)->orderBy($orderBy[0], $orderBy[1])->paginate(12);
        $count['total'] = count($data);

        $title = 'BOOKSTORE - LIST BOOK';
        return view('frontend.book.list', compact('data', 'id', 'title', 'arrOptions', 'count'));
    }

    public function quickView($id)
    {
        $item = Book::findOrFail($id);

        if (!empty($item)) {
            $id = $item['id'];
            $name = $item['name'];
            $shortDescription = $item['short_description'];
            $picture = 'resources/upload/book/images/' . $item['picture'];

            $price = $item['price'];
            $saleOff = $item['sale_off'];
            $itemLink = url('/b-' . $id . '-' . Str::slug($item['name']));
            $addToCartURL = url('add-to-cart-b' . $id);

            if ($saleOff > 0) {
                $price     = '
                                <h3 class="book-price">
                                ' . number_format($price * (100 - $saleOff) / 100) . ' ₫ 
                                <del>' . number_format($price) . ' ₫</del>
                                </h3>
                            ';
            } else {
                $price    = '<h3 class="book-price">' . number_format($price) . ' đ</h3>';
            }

            $result = '
					<div class="col-lg-6 col-xs-12">
						<div class="quick-view-img"><img src="' . $picture . '" alt="" class="w-100 img-fluid blur-up lazyload book-picture">
						</div>
					</div>
					<div class="col-lg-6 rtl-text">
						<div class="product-right">
							<h2 class="book-name">' . $name . '</h2>
							' . $price . '
							<div class="border-product">
								<div class="book-description">' . $shortDescription . '</div>
							</div>
							<div class="product-description border-product">
								<h6 class="product-title">Số lượng</h6>
								<div class="qty-box">
									<div class="input-group">
										<input type="number" name="quantity" class="form-control input-number quantities" value="1" min="1">
									</div>
								</div>
							</div>
							<div class="product-buttons">
								<a href="' . $addToCartURL . '" class="continue btn btn-solid mb-1"  id="btn-ajax-addManyToCart" data-dismiss="modal">Chọn Mua</a>
								<a href="' . $itemLink . '" class="btn btn-solid mb-1 btn-view-book-detail">Xem chi tiết</a>
							</div>
						</div>
					</div>';
            echo $result;
        } else {
            echo '';
        }
    }
}
