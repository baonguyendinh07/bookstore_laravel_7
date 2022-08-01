@extends('frontend.master')
@section('content')
<div class="breadcrumb-section" style="margin-top: 107px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2 class="py-2">Thông tin tài khoản</h2>
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
                            <li class="active"><a href="{{url('/profile')}}">Thông tin tài khoản</a></li>
                            <li><a href="{{url('/change-password')}}">Thay đổi mật khẩu</a></li>
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
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label class="">Username </label>
                                <p class="form-control btn-blue">{{$userInfo->username}}</p>
                            </div>
                            <div class="form-group">
                                <label class="">Email </label>
                                <p class="form-control btn-blue">{{$userInfo->email}}</p>
                            </div>
                            <div class="form-group">
                                <label class="">Họ và tên <span class="text-danger">*</span></label>
                                <input type="text" name="fullname" class="form-control" value="{{$userInfo->fullname}}">
                            </div>
                            <div class="form-group">
                                <label class="">Ngày sinh </label>
                                <input type="date" name="birthday" class="form-control" value="{{$userInfo->birthday}}">
                            </div>
                            <div class="form-group">
                                <label class="">Số điện thoại </label><input type="number" name="phone_number" class="form-control" value="{{$userInfo->phone_number}}">
                            </div>
                            <div class="form-group">
                                <label class="">Địa chỉ </label>
                                <input type="text" name="address" class="form-control" value="{{$userInfo->address}}">
                            </div>
                            <button type="submit" name="submit" value="Cập nhật thông tin" class="btn btn-solid btn-sm">Cập nhật thông tin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')