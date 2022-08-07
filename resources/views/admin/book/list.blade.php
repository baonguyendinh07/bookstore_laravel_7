@extends('admin.master')
@section('content')
<?php
$specialOptions = ['No', 'Yes'];
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Book List</h1>
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
                                    {{areaFilterStatus($count, route('admin.book.getList'), $_GET)}}
                                </div>
                                <div class="area-filter-attribute mb-2">
                                    <form action="" method="GET" id="filter-form">
                                        @if(isset($_GET['status']))
                                        <input type="hidden" name="status" value="{{$_GET['status']}}">
                                        @endif
                                        @if(isset($_GET['search-key']))
                                        <input type="hidden" name="search-key" value="{{$_GET['search-key']}}">
                                        @endif
                                        <select class="custom-select filter-element" name="cate_id">
                                            <option value="default" selected>- Select Category -</option>
                                            {{options($cateOptions, $_GET['cate_id'] ?? '')}}
                                        </select>
                                        <select class="custom-select filter-element" name="special">
                                            <option value="default">- Select Special -</option>
                                            {{options($specialOptions, $_GET['special'] ?? '')}}
                                        </select>
                                    </form>
                                </div>
                                <div class="area-search mb-2">
                                    <form action="" method="get">
                                        @if(isset($_GET['status']))
                                        <input type="hidden" name="status" value="{{$_GET['status']}}">
                                        @endif
                                        @if(isset($_GET['cate_id']))
                                        <input type="hidden" name="cate_id" value="{{$_GET['cate_id']}}">
                                        @endif
                                        @if(isset($_GET['special']))
                                        <input type="hidden" name="special" value="{{$_GET['special']}}">
                                        @endif
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search-key" value="{{$_GET['search-key'] ?? ''}}">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-info">Search</button>
                                                <a href="{{route('admin.book.getList')}}" class="btn btn-danger">Clear</a>
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
                            <a href="{{Route('admin.book.getList')}}" class="btn btn-tool" data-card-widget="refresh">
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
                            <div class="row align-items-center justify-content-between mb-2">
                                <div>
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-danger" id="submit-main-form">Multi Delete</button>
                                        </span>
                                    </div>
                                </div>
                                <div><a href="{{Route('admin.book.getAdd')}}" class="btn btn-info  "><i class="fas fa-plus"></i>
                                        Add New</a></div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle text-center table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 30px"><input type="checkbox" id="checkAll"></th>
                                        <th style="width: 30px">ID</th>
                                        <th class="text-left">Info</th>
                                        <th style="width: 110px">Picture</th>
                                        <th style="width: 150px">Category</th>
                                        <th style="width: 45px">Status</th>
                                        <th style="width: 45px">Special</th>
                                        <th style="width: 45px">Ordering</th>
                                        <th style="width: 50px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- content here -->
                                    <form action="index.php?module=backend&controller=book&action=multiDelete" method="post" name="main-form" id="main-form">
                                        @foreach($data as $item)
                                        <tr>
                                            <td><input type="checkbox" name="form[id][]" value="{{$item['id']}}"></td>
                                            <td>{{$item['id']}}</td>
                                            <td class="text-left">
                                                <p class="mb-0"><b>Name</b>: {{highlight($_GET['search-key'] ?? '',$item['name'])}}</p>
                                                <p class="mb-0"><b>Price</b>: {{number_format($item['price'])}}đ</p>
                                                @if(!empty($item['sale_off']))
                                                <p class="mb-0"><b>Sale Off</b>: {{$item['sale_off']}}%</p>
                                                @endif
                                            </td>
                                            <td>
                                                <img src="{{asset('resources/upload/book/images/'.($item['picture'] ?? 'default.jpg'))}}" style="width:70px">
                                            </td>
                                            <td class="position-relative">
                                                <select class="custom-select btn-ajax-cate-id" data-url="{{route('admin.book.changeCateId', [$item['id'],''])}}">
                                                    {{options($cateOptions, $item['cate_id'])}}
                                                </select>
                                            </td>
                                            <td class="position-relative">
                                                {{showStatus($item['status'], route('admin.book.changeStatus', [$item['id'], $item['status']]), 'status')}}
                                            </td>
                                            <td class=" position-relative">
                                                {{showStatus($item['special'], route('admin.book.changeSpecial', [$item['id'], $item['special']]), 'special')}}
                                            </td>
                                            <td class=" position-relative">
                                                <input type="number" value="{{$item['ordering']}}" name="ordering" class="btn-ajax-ordering form-control" style="width:70px;text-align:center" data-url="{{route('admin.book.changeOrdering', [$item['id'],''])}}">
                                            </td>
                                            <td>
                                                <a href="{{route('admin.book.getEdit', $item['id'])}}" class="btn btn-info rounded-circle btn-sm">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="{{route('admin.book.getDelete', $item['id'])}}" class="btn btn-danger btn-delete rounded-circle btn-sm">
                                                    <i class="fas fa-trash "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer clearfix">
                        {{showPagination($data, 'admin/book/list', 3) ?? ''}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()