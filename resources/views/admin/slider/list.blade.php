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
                                    <a href="index.php?module=backend&amp;controller=slider&amp;action=index&amp;filterStatus=all" class="btn btn-info">All <span class="badge badge-pill badge-light">7</span></a> <a href="index.php?module=backend&amp;controller=slider&amp;action=index&amp;filterStatus=active" class="btn btn-secondary">Active <span class="badge badge-pill badge-light">5</span></a> <a href="index.php?module=backend&amp;controller=slider&amp;action=index&amp;filterStatus=inactive" class="btn btn-secondary">Inactive <span class="badge badge-pill badge-light">2</span></a>
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
                            <a href="index.php?module=backend&amp;controller=slider&amp;action=index" class="btn btn-tool" data-card-widget="refresh">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div style="float: right; margin-bottom:7px;margin-right:-8px"><a href="slider-form" class="btn btn-info  "><i class="fas fa-plus"></i> Add New</a></div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle text-center table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 30px">ID</th>
                                        <th class="text-left" style="width:350px">Info</th>
                                        <th style="width: 30px">Status</th>
                                        <th style="width: 50px">Ordering</th>
                                        <th style="width: 120px">Created</th>
                                        <th style="width: 120px">Modified</th>
                                        <th style="width: 50px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- content here -->
                                    @foreach($data as $item)
                                    <tr>
                                        <td>{{$item['id']}}</td>
                                        <td class="text-left">
                                            <p class="mb-0"><b>Name</b>: {{$item['name']}}</p>
                                            <p class="mb-0"><b>Description</b>: {{$item['description']}}</p>
                                            <img src="{{asset('resources/upload/slider/images/'.($item['picture'] ?? 'default.jpg'))}}" style="width:350px">
                                        </td>
                                        <td class="position-relative">
                                            {{showStatus($item['status'], route('admin.slider.changeStatus', [$item['id'], $item['status']]), 'status')}}
                                        </td>
                                        <td class=" position-relative">
                                            <input type="number" value="{{$item['ordering']}}" name="ordering" class="btn-ajax-ordering form-control" style="width:70px;text-align:center" data-url="{{route('admin.slider.changeOrdering', [$item['id'],''])}}">
                                        </td>
                                        <td>
                                            <p class="mb-0"><i class="far fa-user"></i>{{$item['created_by']}}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0"><i class="far fa-user"></i>{{$item['updated_by']}}</p>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.slider.getEdit', $item['id'])}}" class="btn btn-info rounded-circle btn-sm">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('admin.slider.getDelete', $item['id'])}}" class="btn btn-danger btn-delete rounded-circle btn-sm">
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