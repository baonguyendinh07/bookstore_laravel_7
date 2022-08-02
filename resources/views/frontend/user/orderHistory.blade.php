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

                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button style="text-transform: none; width:250px" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#z3iqGD0">
                                        Mã đơn hàng: z3iqGD0
                                    </button>
                                    &nbsp;&nbsp;Thời gian: 2022-07-18 10:24:08
                                </h5>
                            </div>
                            <div id="z3iqGD0" class="collapse" data-parent="#accordionExample" style="">
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
                                            <tr>
                                                <td><a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=102"><img src="/public/files/book/tiW3PMLF.PNG" alt="CHÚ BÉ CÓ TÀI MỞ KHÓA (..." style="width:60px"></a></td>
                                                <td style="min-width: 200px">CHÚ BÉ CÓ TÀI MỞ KHÓA (...</td>
                                                <td style="min-width: 100px">103,500 đ</td>
                                                <td>1</td>
                                                <td style="min-width: 150px">103,500 đ</td>
                                            </tr>
                                            <tr></tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="my-text-primary font-weight-bold">
                                                <td colspan="4" class="text-right">Tổng: </td>
                                                <td>103,500 đ</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button style="text-transform: none; width:250px" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#S7EogRr">
                                        Mã đơn hàng: S7EogRr
                                    </button>
                                    &nbsp;&nbsp;Thời gian: 2022-07-16 15:02:57
                                </h5>
                            </div>
                            <div id="S7EogRr" class="collapse" data-parent="#accordionExample" style="">
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
                                            <tr>
                                                <td><a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=104"><img src="/public/files/book/1ZYDvPmU.PNG" alt="EVERYTHING, EVERYTHING" style="width:60px"></a></td>
                                                <td style="min-width: 200px">EVERYTHING, EVERYTHING</td>
                                                <td style="min-width: 100px">199,000 đ</td>
                                                <td>1</td>
                                                <td style="min-width: 150px">199,000 đ</td>
                                            </tr>
                                            <tr></tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="my-text-primary font-weight-bold">
                                                <td colspan="4" class="text-right">Tổng: </td>
                                                <td>199,000 đ</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button style="text-transform: none; width:250px" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#7tCyQLI">
                                        Mã đơn hàng: 7tCyQLI
                                    </button>
                                    &nbsp;&nbsp;Thời gian: 2022-07-12 09:49:56
                                </h5>
                            </div>
                            <div id="7tCyQLI" class="collapse" data-parent="#accordionExample" style="">
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
                                            <tr>
                                                <td><a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=68"><img src="/public/files/book/WDyA9mGK.PNG" alt="Thép Đã Tôi Thế Đấy" style="width:60px"></a></td>
                                                <td style="min-width: 200px">Thép Đã Tôi Thế Đấy</td>
                                                <td style="min-width: 100px">124,450 đ</td>
                                                <td>2</td>
                                                <td style="min-width: 150px">248,900 đ</td>
                                            </tr>
                                            <tr></tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="my-text-primary font-weight-bold">
                                                <td colspan="4" class="text-right">Tổng: </td>
                                                <td>248,900 đ</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button style="text-transform: none; width:250px" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#vc7lGQI">
                                        Mã đơn hàng: vc7lGQI
                                    </button>
                                    &nbsp;&nbsp;Thời gian: 2022-07-09 18:35:52
                                </h5>
                            </div>
                            <div id="vc7lGQI" class="collapse" data-parent="#accordionExample" style="">
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
                                            <tr>
                                                <td><a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=71"><img src="/public/files/book/q9ChWp07.PNG" alt="Văn Học Ý - Tác Phẩm Ch..." style="width:60px"></a></td>
                                                <td style="min-width: 200px">Văn Học Ý - Tác Phẩm Ch...</td>
                                                <td style="min-width: 100px">162,000 đ</td>
                                                <td>1</td>
                                                <td style="min-width: 150px">162,000 đ</td>
                                            </tr>
                                            <tr></tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td><a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=90"><img src="/public/files/book/dG8lnhTm.PNG" alt="Collins Pocket Vietnamese Dict..." style="width:60px"></a></td>
                                                <td style="min-width: 200px">Collins Pocket Vietnamese Dict...</td>
                                                <td style="min-width: 100px">229,000 đ</td>
                                                <td>1</td>
                                                <td style="min-width: 150px">229,000 đ</td>
                                            </tr>
                                            <tr></tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td><a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=93"><img src="/public/files/book/m80nD1vJ.PNG" alt="Clean Code" style="width:60px"></a></td>
                                                <td style="min-width: 200px">Clean Code</td>
                                                <td style="min-width: 100px">1,150,000 đ</td>
                                                <td>1</td>
                                                <td style="min-width: 150px">1,150,000 đ</td>
                                            </tr>
                                            <tr></tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td><a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=100"><img src="/public/files/book/ZplANVvh.PNG" alt="KHOA HỌC KỸ NĂNG CHO TH�..." style="width:60px"></a></td>
                                                <td style="min-width: 200px">KHOA HỌC KỸ NĂNG CHO TH�...</td>
                                                <td style="min-width: 100px">98,100 đ</td>
                                                <td>2</td>
                                                <td style="min-width: 150px">196,200 đ</td>
                                            </tr>
                                            <tr></tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="my-text-primary font-weight-bold">
                                                <td colspan="4" class="text-right">Tổng: </td>
                                                <td>1,737,200 đ</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button style="text-transform: none; width:250px" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#IUfbR9H">
                                        Mã đơn hàng: IUfbR9H
                                    </button>
                                    &nbsp;&nbsp;Thời gian: 2022-07-09 18:33:47
                                </h5>
                            </div>
                            <div id="IUfbR9H" class="collapse" data-parent="#accordionExample" style="">
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
                                            <tr>
                                                <td><a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=90"><img src="/public/files/book/dG8lnhTm.PNG" alt="Collins Pocket Vietnamese Dict..." style="width:60px"></a></td>
                                                <td style="min-width: 200px">Collins Pocket Vietnamese Dict...</td>
                                                <td style="min-width: 100px">229,000 đ</td>
                                                <td>2</td>
                                                <td style="min-width: 150px">458,000 đ</td>
                                            </tr>
                                            <tr></tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="my-text-primary font-weight-bold">
                                                <td colspan="4" class="text-right">Tổng: </td>
                                                <td>458,000 đ</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')