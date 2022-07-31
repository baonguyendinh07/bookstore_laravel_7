@extends('frontend.master')
@section('content')
<div class="breadcrumb-section" style="margin-top: 107px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2 class="py-2">
                        Đăng nhập </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="login-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>Đăng nhập</h3>
                <div class="theme-card">
                    @include('frontend.html.error')
                    <form action="{{route('frontend.login.getLogin')}}" method="post" id="admin-form" class="theme-form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label class="required">Tên đăng nhập</label>
                            <input type="text" name="username" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label class="required">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" value="">
                        </div>
                        <button type="submit" id="submit" name="submit" value="Đăng nhập" class="btn btn-solid">Đăng nhập</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 right-login">
                <h3>Khách hàng mới</h3>
                <div class="theme-card authentication-right">
                    <h6 class="title-font">Đăng ký tài khoản</h6>
                    <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                        able to order from our shop. To start shopping click register.</p>
                <a href="{{url('/register')}}" class="btn btn-solid">Đăng ký</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')