@extends('frontend.master')
@section('content')
<div class="breadcrumb-section" style="margin-top: 107px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2 class="py-2">Lịch sử mua hàng</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="faq-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="dashboard-left">
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> Ẩn</span></div>
                    <div class="block-content">
                        <ul>
                            <li><a href="{{url('/profile')}}">Thông tin tài khoản</a></li>
                            <li><a href="{{url('/change-password')}}">Thay đổi mật khẩu</a></li>
                            <li class="active"><a href="{{url('/order-history')}}">Lịch sử mua hàng</a></li>
                            <li><a href="{{url('/logout')}}">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="accordion theme-accordion" id="accordionExample">
                    <div class="accordion theme-accordion" id="accordionExample">
                        <!-- content here -->
                        @foreach($data as $cart)
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button style="text-transform: none; width:250px" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#{{$cart->id}}">
                                        Mã đơn hàng: {{$cart->id}}
                                    </button>
                                    &nbsp;&nbsp;Thời gian: {{$cart->date}}
                                </h5>
                            </div>
                            <div id="{{$cart->id}}" class="collapse" data-parent="#accordionExample">
                                <div class="card-body table-responsive">
                                    <table class="table btn-table">
                                        <thead>
                                            <tr>
                                                <td>Hình ảnh</td>
                                                <td>Tên sách</td>
                                                <td>Giá</td>
                                                <td>Số lượng</td>
                                                <td>Thành tiền</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $cart->books      = json_decode($cart->books);
                                            $cart->prices     = json_decode($cart->prices);
                                            $cart->quantities = json_decode($cart->quantities);
                                            $cart->names      = json_decode($cart->names);
                                            $cart->pictures   = json_decode($cart->pictures);
                                            $totalBill = 0;
                                            ?>
                                            @foreach($cart->books as $key => $book)
                                            <tr>
                                                <td>
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=102"><img src="{{asset('resources/upload/book/images/'.$cart->pictures[$key])}}" alt="{{$cart->names[$key]}}" style="width:60px">
                                                    </a>
                                                </td>
                                                <td style="min-width: 200px"><?= textCutting($cart->names[$key], 30) ?></td>
                                                <td style="min-width: 100px">{{number_format($cart->prices[$key])}} đ</td>
                                                <td>{{$cart->quantities[$key]}}</td>
                                                <?php
                                                $total = $cart->prices[$key]*$cart->quantities[$key];
                                                $totalBill += $total;
                                                ?>
                                                <td style="min-width: 150px">{{number_format($total)}} đ</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="my-text-primary font-weight-bold">
                                                <td colspan="4" class="text-right">Tổng: </td>
                                                <td>{{number_format($totalBill)}} đ</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- end content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')