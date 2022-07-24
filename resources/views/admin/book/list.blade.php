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
                                    <a href="index.php?module=backend&controller=book&action=index&filterStatus=all" class="btn btn-info">All <span class="badge badge-pill badge-light">80</span></a> <a href="index.php?module=backend&controller=book&action=index&filterStatus=active" class="btn btn-secondary">Active <span class="badge badge-pill badge-light">80</span></a> <a href="index.php?module=backend&controller=book&action=index&filterStatus=inactive" class="btn btn-secondary">Inactive <span class="badge badge-pill badge-light">0</span></a>
                                </div>
                                <div class="area-filter-attribute mb-2">
                                    <form action="index.php" method="GET" id="filter-form">
                                        <input type="hidden" name="module" class="form-control" id="" value="backend" placeholder=""> <input type="hidden" name="controller" class="form-control" id="" value="book" placeholder=""> <input type="hidden" name="action" class="form-control" id="" value="index" placeholder=""> <select class="custom-select filter-element" name="category_id">
                                            <option value="default" selected> - Select Category - </option>
                                            <option value="1">Văn Học - Tiểu Thuyết</option>
                                            <option value="2">Kinh Tế</option>
                                            <option value="3">Tin học</option>
                                            <option value="4"> Kỹ Năng Sống</option>
                                            <option value="5">Thiếu Nhi</option>
                                            <option value="6"> Thường Thức - Đời Sống</option>
                                            <option value="7">Ngoại Ngữ - Từ Điển</option>
                                            <option value="8">Truyện Tranh</option>
                                            <option value="9"> Văn Hoá - Nghệ Thuật</option>
                                            <option value="10">Y Học</option>
                                            <option value="11">Pháp Luật - Chính Trị</option>
                                            <option value="12">Lịch Sử</option>
                                            <option value="13">Tôn Giáo - Tâm Linh</option>
                                            <option value="14">Bà Mẹ - Em Bé</option>
                                            <option value="15">Giáo Khoa - Giáo Trình</option>
                                        </select> <select class="custom-select filter-element" name="special">
                                            <option value="default"> - Select Special - </option>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="area-search mb-2">
                                    <form action="index.php" method="GET">
                                        <input type="hidden" name="module" class="form-control" id="" value="backend" placeholder=""> <input type="hidden" name="controller" class="form-control" id="" value="book" placeholder=""> <input type="hidden" name="action" class="form-control" id="" value="index" placeholder="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search-key" value="">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-info">Search</button>
                                                <a href="{{Route('admin.book.getList')}}" class="btn btn-danger">Clear</a>
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
                                        <th>Picture</th>
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
                                                <p class="mb-0"><b>Name</b>: {{$item['name']}}</p>
                                                <p class="mb-0"><b>Price</b>: {{number_format($item['price'])}}đ</p>
                                                @if(!empty($item['sale_off']))
                                                <p class="mb-0"><b>Sale Off</b>: {{$item['sale_off']}}%</p>
                                                @endif
                                            </td>
                                            <td><img src="/public/files/book/PmMLJ0Xx.PNG" style="width:70px"></td>
                                            <td class="position-relative">
                                                <select class="custom-select btn-ajax-category-id" name="" data-url="index.php?module=backend&controller=book&action=changeCategoryId&id=128">
                                                    {{options($arrCate, $item['cate_id'])}}
                                                </select>
                                            </td>
                                            <td class="position-relative">
                                                <a href="index.php?module=backend&controller=book&action=changeStatus&id=128&status=active" class="btn btn-{{showStatus($item['status'])}} rounded-circle btn-sm btn-ajax-status">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </td>
                                            <td class=" position-relative">
                                                <a href="index.php?module=backend&controller=book&action=changeSpecial&id=128&special=0" class="btn btn-{{showStatus($item['special'])}} rounded-circle btn-sm btn-ajax-special">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </td>
                                            <td class=" position-relative">
                                                <input type="number" value="{{$item['ordering']}}" name="ordering" class="btn-ajax-ordering form-control" style="width:70px;text-align:center" data-url="index.php?module=backend&controller=book&action=changeOrdering&id=128">
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
                        <ul class="pagination m-0 float-right">
                            <li class="page-item disabled"><a class="page-link"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="page-item disabled"><a class="page-link"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="index.php?module=backend&controller=book&action=index&page=1">1</a>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&controller=book&action=index&page=2">2</a>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&controller=book&action=index&page=3">3</a>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&controller=book&action=index&page=2"><i class="fa fa-angle-right"></i></a></li>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&controller=book&action=index&page=8"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()