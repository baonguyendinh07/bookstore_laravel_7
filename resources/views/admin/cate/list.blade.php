<!-- 
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
 -->
@extends('admin.master')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Category List</h1>
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
                        <h3 class="card-title">Search & Filter</h3>
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
                                    {{areaFilterStatus($count, route('admin.cate.getList'), $_GET)}}
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
                                                <a href="{{route('admin.cate.getList')}}" class="btn btn-danger">Clear</a>
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
                            <a href="{{route('admin.cate.getList')}}" class="btn btn-tool" data-card-widget="refresh">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('admin.html.success')
                        <div class="container-fluid">
                            <div style="float: right; margin-bottom:7px;margin-right:-8px">
                                <a href="{{Route('admin.cate.getAdd')}}" class="btn btn-info  ">
                                    <i class="fas fa-plus"></i>
                                    Add New
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle text-center table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th class="text-left">Name</th>
                                        <th style="width: 30px">Status</th>
                                        <th style="width: 30px">Special</th>
                                        <th style="width: 50px">Ordering</th>
                                        <th style="width: 120px">Created By</th>
                                        <th style="width: 120px">Updated By</th>
                                        <th style="width: 120px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- content here -->
                                    @foreach($data as $item)
                                    <tr>
                                        <td>{{$item['id']}}</td>
                                        <td class="text-left">
                                            <p class="mb-0">{{$item['name']}}</p>
                                        </td>
                                        <td class="position-relative">
                                            {{showStatus($item['status'], route('admin.cate.changeStatus', [$item['id'], $item['status']]), 'status')}}
                                        </td>
                                        <td class=" position-relative">
                                            {{showStatus($item['special'], route('admin.cate.changeSpecial', [$item['id'], $item['special']]), 'special')}}
                                        </td>
                                        <td class=" position-relative">
                                            <input type="number" value="{{$item['ordering']}}" name="ordering" class="btn-ajax-ordering form-control" min="1" style="width:70px;text-align:center" data-url="{{route('admin.cate.changeOrdering', [$item['id'],''])}}">
                                        </td>
                                        <td>
                                            <p class="mb-0">
                                                <i class="far fa-user"></i>{{$item['created_by']}}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="mb-0">
                                                <i class="far fa-user"></i>{{$item['updated_by']}}
                                            </p>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.cate.getEdit', $item['id'])}}" class="btn btn-info rounded-circle btn-sm">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('admin.cate.getDelete', $item['id'])}}" class="btn btn-danger btn-delete rounded-circle btn-sm">
                                                <i class="fas fa-trash "></i>
                                            </a>
                                        </td>
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