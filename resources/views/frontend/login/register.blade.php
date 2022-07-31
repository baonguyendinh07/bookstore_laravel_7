@extends('frontend.master')
@section('content')
<div class="breadcrumb-section" style="margin-top: 107px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2 class="py-2">Đăng ký tài khoản</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="register-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Đăng ký tài khoản</h3>
                <div class="theme-card">
                    @include('frontend.html.error')
                    <form action="" method="post" id="admin-form" class="theme-form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="form[token]" class="form-control" id="" value="1659258175" placeholder="">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label class="required">Tên tài khoản <span class="text-danger">*</span></label>
                                <input type="text" name="username" class="form-control" id="" value="" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label class="required">Họ và tên <span class="text-danger">*</span></label>
                                <input type="text" name="fullname" class="form-control" id="" value="" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label class="required">Email <span class="text-danger">*</span></label> <input type="text" name="email" class="form-control" id="" value="" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label class="required">Mật khẩu <span class="text-danger">*</span></label> <input type="password" name="password" class="form-control" id="" value="" placeholder="">
                            </div>
                        </div>
                        <button type="submit" id="submit" name="submit" value="Tạo tài khoản" class="btn btn-solid">Tạo tài khoản</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')