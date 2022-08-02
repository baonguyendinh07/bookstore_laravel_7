@extends('frontend.master')
@section('content')
<div class="breadcrumb-section" style="margin-top: 107px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2 class="py-2">Thay đổi mật khẩu</h2>
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
                            <li class="active"><a href="{{url('/change-password')}}">Thay đổi mật khẩu</a></li>
                            <li><a href="{{url('/order-history')}}">Lịch sử mua hàng</a></li>
                            <li><a href="{{url('/logout')}}">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <form action="" method="post" id="admin-form" class="theme-form">
                            <input type="hidden" name="form[token]" class="form-control" id="" value="1659410645" placeholder="">
                            <div class="form-group">
                                <label class="">Mật khẩu hiện tại <span class="text-danger">*</span></label><input type="password" name="form[old_password]" class="form-control" id="" value="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="">Mật khẩu mới <span class="text-danger">*</span></label><input type="password" name="form[password]" class="form-control" id="" value="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="">Xác nhận lại mật khẩu mới <span class="text-danger">*</span></label><input type="password" name="form[confirm_password]" class="form-control" id="" value="" placeholder="">
                            </div>
                            <button type="submit" id="submit" name="submit" value="Cập nhật thông tin" class="btn btn-solid btn-sm">Cập nhật thông tin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')