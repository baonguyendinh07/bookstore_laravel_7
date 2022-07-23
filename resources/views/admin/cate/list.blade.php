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
                                    <a href="index.php?module=backend&controller=category&action=index&filterStatus=all" class="btn btn-info">All <span class="badge badge-pill badge-light">15</span></a> <a href="index.php?module=backend&controller=category&action=index&filterStatus=active" class="btn btn-secondary">Active <span class="badge badge-pill badge-light">15</span></a> <a href="index.php?module=backend&controller=category&action=index&filterStatus=inactive" class="btn btn-secondary">Inactive <span class="badge badge-pill badge-light">0</span></a>
                                </div>
                                <div class="area-search mb-2">
                                    <form action="" method="GET">
                                        <input type="hidden" name="module" class="form-control" id="" value="backend" placeholder=""> <input type="hidden" name="controller" class="form-control" id="" value="category" placeholder=""> <input type="hidden" name="action" class="form-control" id="" value="index" placeholder="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search-key" value="">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-info">Search</button>
                                                <a href="index.php?module=backend&controller=category&action=index" class="btn btn-danger">Clear</a>
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
                            <a href="index.php?module=backend&controller=category&action=index" class="btn btn-tool" data-card-widget="refresh">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            <ul class="list-unstyled mb-0">
                                <li class="text-white"><b>{{Session::get('flash_object')}}</b> {{Session::get('flash_message')}}</li>
                            </ul>
                        </div>
                        @endif
                        <div class="container-fluid">
                            <div style="float: right; margin-bottom:7px;margin-right:-8px"><a href="category-form" class="btn btn-info  "><i class="fas fa-plus"></i>
                                    Add New</a></div>
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
                                            <a href="index.php?module=backend&controller=category&action=changeStatus&id=15&status=active" class="btn btn-{{showStatus($item['status'])}} rounded-circle btn-sm btn-ajax-status">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </td>
                                        <td class=" position-relative">
                                            <a href="index.php?module=backend&controller=category&action=changeSpecial&id=15&special=0" class="btn btn-{{showStatus($item['special'])}} rounded-circle btn-sm btn-ajax-special">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </td>
                                        <td class=" position-relative">
                                            <input type="number" value="{{$item['ordering']}}" name="ordering" class="btn-ajax-ordering form-control" style="width:70px;text-align:center" data-url="index.php?module=backend&controller=category&action=changeOrdering&id=15">
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
                                            <a href="" class="btn btn-info rounded-circle btn-sm">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{URL::route('admin.cate.getDelete', $item['id'])}}" class="btn btn-danger btn-delete rounded-circle btn-sm">
                                                <i class="fas fa-trash "></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination m-0 float-right">
                            <li class="page-item disabled"><a class="page-link"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="page-item disabled"><a class="page-link"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="index.php?module=backend&controller=category&action=index&page=1">1</a>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&controller=category&action=index&page=2">2</a>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&controller=category&action=index&page=2"><i class="fa fa-angle-right"></i></a></li>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&controller=category&action=index&page=2"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection()