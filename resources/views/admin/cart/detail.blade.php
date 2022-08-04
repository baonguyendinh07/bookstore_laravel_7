@extends('admin.master')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" style="width:100%">
            <div class="col-sm-6" style="width:100%">
                <h1 class="m-0">{{$title}}</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- List -->
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h4 class="card-title">
                            <span><b>Mã đơn hàng:</b> {{$data->id}}</span> ||
                            <span><b>Ngày dặt:</b> {{$data->date}}</span> ||
                            <span><b>Khách hàng:</b> {{$data->fullname}}</span> ||
                            <span><b>Trạng thái:</b> {{ucfirst($data->status)}}</span>
                        </h4>
                        <div class="card-tools">
                            <a href="{{route('admin.cart.getList')}}" class="btn btn-info">
                                <i class="fas fa-arrow-circle-left"></i> Quay về
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle text-center table-bordered">
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th class="text-left">Tên sách</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- content here -->
                                    <?php
                                    $data->books      = json_decode($data->books);
                                    $data->prices     = json_decode($data->prices);
                                    $data->quantities = json_decode($data->quantities);
                                    $data->names      = json_decode($data->names);
                                    $data->pictures   = json_decode($data->pictures);
                                    ?>
                                    @foreach($data->books as $key => $value)
                                    <tr>
                                        <td><img src="{{asset('resources/upload/book/images/'.($data->pictures[$key] ?? 'default.jpg'))}}" style="width:70px">
                                        </td>
                                        <td class="text-left">{{$data->names[$key]}}<p></p>
                                        </td>
                                        <td>{{number_format($data->prices[$key])}} đ</td>
                                        <td>{{$data->quantities[$key]}}</td>
                                        <td>{{number_format($data->prices[$key]*$data->quantities[$key])}} đ</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection()