@extends('frontend.master')
@section('content')
<div class="breadcrumb-section" style="margin-top: 107px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2 class="py-2">Không tìm thấy trang yêu cầu</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="p-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="error-section">
                    <h1>404</h1>
                    <h2>Đường dẫn không hợp lệ</h2>
                    <a href="http://localhost/bookstore_laravel_7" class="btn btn-solid">Quay lại trang chủ</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')