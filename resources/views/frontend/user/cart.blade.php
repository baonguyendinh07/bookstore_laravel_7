@extends('frontend.master')
@section('content')
<div class="breadcrumb-section" style="margin-top: 107px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2 class="py-2">Giỏ hàng</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@if(!empty($data))
<form action="{{route('frontend.user.orderBooks')}}" method="POST" name="admin-form" id="admin-form">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Tên sách</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col"></th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $totalBill = 0 ?>
                            @foreach($data as $item)
                            <tr>
                                <td>
                                    <a href="{{url('/b-'.$item->id.'-'.Str::slug($item->name))}}"><img src="{{asset('resources/upload/book/images/'.$item->picture)}}" alt="{{$item->name}}"></a>
                                </td>
                                <td>
                                    <a href="{{url('/b-'.$item->id.'-'.Str::slug($item->name))}}">{{$item->name}}</a>
                                </td>
                                <td>
                                    <h2 class="text-lowercase">{{number_format($item->price)}} đ</h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" value="{{session('cart')[$item->id]}}" class="form-control input-number change-quantities" min="1" data-url="{{url('add-to-cart-b' . $item->id)}}" data-quantities-saved="{{session('cart')[$item->id]}}">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{url('del-item-cart-b'.$item->id)}}" class="icon">
                                        <i class="ti-close"></i>
                                    </a>
                                </td>
                                <td>
                                    <h2 class="td-color text-lowercase">
                                        <?php
                                        $total = $item->price * session('cart')[$item->id];
                                        $totalBill += $total;
                                        ?>
                                        {{number_format($total)}} đ
                                    </h2>
                                </td>
                            </tr>
                            <input type="hidden" name="{{$item->id}}" value="{{session('cart')[$item->id]}}">
                            @endforeach
                        </tbody>
                    </table>
                    <table class="table cart-table table-responsive-md">
                        <tfoot>
                            <tr>
                                <td>Tổng :</td>
                                <td>
                                    <h2 class="text-lowercase">{{number_format($totalBill)}} đ</h2>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-6">
                    <a href="{{url('/')}}" class="btn btn-solid">Tiếp tục mua sắm</a>
                </div>
                <div class="col-6"><button type="submit" class="btn btn-solid">Đặt hàng</button></div>
            </div>
        </div>
    </section>
</form>
@else
<section class="cart-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <i class="fa fa-cart-plus fa-5x my-text-primary"></i>
                <h5 class="my-3">Không có sản phẩm nào trong giỏ hàng của bạn</h5>
                <a href="{{url('/')}}" class="btn btn-solid">Tiếp tục mua sắm</a>
            </div>
        </div>
    </div>
</section>
@endif
@endsection('content')