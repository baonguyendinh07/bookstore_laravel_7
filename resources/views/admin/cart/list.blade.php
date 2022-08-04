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
                <!-- Search & Filter -->
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Search &amp; Filter</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row justify-content-between align-items-center">
                                <div class="area-filter-status mb-2">
                                    {{areaFilterStatus($count, route('admin.cart.getList'), $_GET)}}
                                </div>
                                <div class="area-search mb-2">
                                    <form action="" method="get">
                                        @if(isset($_GET['status']))
                                        <input type="hidden" name="status" value="{{$_GET['status']}}">
                                        @endif
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search-key" value="{{$_GET['search-key'] ?? ''}}">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-info">Search</button>
                                                <a href="{{route('admin.cart.getList')}}" class="btn btn-danger">Clear</a>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- List -->
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">List</h3>

                        <div class="card-tools">
                            <a href="{{route('admin.cart.getList')}}" class="btn btn-tool" data-card-widget="refresh">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle text-center table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 20px">ID</th>
                                        <th class="text-left">Thông tin</th>
                                        <th style="width: 45px">Trang thái</th>
                                        <th>Chi tiết</th>
                                        <th style="width: 35px">Tổng tiền</th>
                                        <th style="width: 100px">Ngày đặt</th>
                                        <th style="width: 30px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- content here -->
                                    @foreach($data as $key => $item)
                                    <tr>
                                        <td>{{$item['id']}}</td>
                                        <td class="text-left">
                                            <p class="mb-0"><b>Name</b>: {{$item['fullname']}}</p>
                                            <p class="mb-0"><b>Username</b>: {{highlight($_GET['search-key'] ?? '',$item['username'])}}</p>
                                            <p class="mb-0"><b>Sđt</b>: {{$item['phone_number']}}</p>
                                            <p class="mb-0"><b>Địa chỉ</b>: {{$item['address']}}</p>
                                        </td>
                                        <td class="position-relative">
                                            {{showStatus($item['status'], route('admin.cart.changeStatus', [$item['id'], $item['status']]), 'status')}}
                                        </td>
                                        <td class=" text-left">
                                            <?php
                                            $item['books'] = json_decode($item['books']);
                                            $item['prices'] = json_decode($item['prices']);
                                            $item['quantities'] = json_decode($item['quantities']);
                                            $item['names'] = json_decode($item['names']);
                                            $item['pictures'] = json_decode($item['pictures']);
                                            $totalBill = 0;
                                            ?>
                                            @foreach($item['books'] as $key1 => $book)
                                            <p><span style="display: inline-block;width:200px">{{textCutting($item['names'][$key1], 23)}}</span> x <span class="badge badge-info badge-pill">{{$item['quantities'][$key1]}}</span> =
                                                <?php
                                                $total = $item['prices'][$key1] * $item['quantities'][$key1];
                                                $totalBill += $total;
                                                echo number_format($total);
                                                ?>đ
                                            </p>
                                            @endforeach
                                        </td>
                                        <td class="position-relative">{{number_format($totalBill)}}đ</td>
                                        <td class="position-relative">{{$item['date']}}</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.cart.getDetail', $item['id'])}}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer clearfix">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection()