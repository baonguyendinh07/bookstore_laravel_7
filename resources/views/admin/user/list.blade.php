@extends('admin.master')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">User List</h1>
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
                                    {{areaFilterStatus($count, route('admin.user.getList'), $_GET)}}
                                </div>
                                <div class="area-filter-attribute mb-2">
                                    <form action="" method="GET" id="filter-form">
                                        @if(isset($_GET['status']))
                                        <input type="hidden" name="status" value="{{$_GET['status']}}">
                                        @endif
                                        @if(isset($_GET['search-key']))
                                        <input type="hidden" name="search-key" value="{{$_GET['search-key']}}">
                                        @endif
                                        <select class="custom-select filter-element" name="group_id">
                                            <option value="default" selected="">- Select Group -</option>
                                            {{options($groupIdOptions, $_GET['group_id'] ?? '')}}
                                        </select>
                                    </form>
                                </div>
                                <div class="area-search mb-2">
                                    <form action="" method="get">
                                        @if(isset($_GET['status']))
                                        <input type="hidden" name="status" value="{{$_GET['status']}}">
                                        @endif
                                        @if(isset($_GET['group_id']))
                                        <input type="hidden" name="group_id" value="{{$_GET['group_id']}}">
                                        @endif
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search-key" value="{{$_GET['search-key'] ?? ''}}">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-info">Search</button>
                                                <a href="{{route('admin.user.getList')}}" class="btn btn-danger">Clear</a>
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
                            <a href="index.php?module=backend&amp;controller=user&amp;action=index" class="btn btn-tool" data-card-widget="refresh">
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
                                <div><a href="{{route('admin.user.getAdd')}}" class="btn btn-info  "><i class="fas fa-plus"></i> Add New</a></div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle text-center table-bordered">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="checkAll"></th>
                                        <th>ID</th>
                                        <th class="text-left">Info</th>
                                        <th>Group</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- content here -->
                                    <form action="index.php?module=backend&amp;controller=user&amp;action=multiDelete" method="post" name="main-form" id="main-form"></form>
                                    @foreach($data as $item)
                                    <tr>
                                        <td><input type="checkbox" name="form[id][]" value="41"></td>
                                        <td>{{$item['id']}}</td>
                                        <td class="text-left">
                                            <p class="mb-0"><b>Username</b>: {{highlight($_GET['search-key'] ?? '',$item['username'])}}</p>
                                            <p class="mb-0"><b>FullName</b>: {{$item['fullname']}}</p>
                                            <p class="mb-0"><b>Email</b>: {{$item['email']}}</p>
                                        </td>
                                        <td class="position-relative">
                                            <select class="custom-select btn-ajax-group-id" data-url="{{route('admin.user.changeGroupId', [$item['id'],''])}}">
                                                {{options($groupIdOptions, $item['group_id'])}}
                                            </select>
                                        </td>
                                        <td class="position-relative">
                                            {{showStatus($item['status'], route('admin.user.changeStatus', [$item['id'], $item['status']]), 'status')}}
                                        </td>
                                        <td>
                                            <p class=" mb-0"><i class="far fa-user"></i>{{$item['created_by']}}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0"><i class="far fa-user"></i>{{$item['updated_by']}}</p>
                                        </td>
                                        <td>
                                            <a href="index.php?module=backend&amp;controller=user&amp;action=changePassword&amp;id=41" class="btn btn-secondary rounded-circle btn-sm">
                                                <i class="fas fa-key "></i>
                                            </a>
                                            <a href="index.php?module=backend&amp;controller=user&amp;action=form&amp;id=41" class="btn btn-info rounded-circle btn-sm">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('admin.user.getDelete', $item['id'])}}" class="btn btn-danger btn-delete rounded-circle btn-sm">
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
                            <li class="page-item active"><a class="page-link" href="index.php?module=backend&amp;controller=user&amp;action=index&amp;page=1">1</a></li>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&amp;controller=user&amp;action=index&amp;page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&amp;controller=user&amp;action=index&amp;page=3">3</a></li>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&amp;controller=user&amp;action=index&amp;page=2"><i class="fa fa-angle-right"></i></a></li>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&amp;controller=user&amp;action=index&amp;page=3"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection('content')