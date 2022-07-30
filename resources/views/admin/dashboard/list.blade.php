@extends('admin.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" style="width:100%">
            <div class="col-sm-6" style="width:100%">
                <h1 class="m-0">{{$title}}</h1>
            </div>
        </div>
    </div>
</div> <!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$total['group']}}</h3>
                        <p>Group</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-people"></i>
                    </div>
                    <a href="{{route('admin.group.getList')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$total['user']}}</h3>
                        <p>User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-person"></i>
                    </div>
                    <a href="{{route('admin.user.getList')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$total['cate']}}</h3>
                        <p>Category</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a href="{{route('admin.cate.getList')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$total['book']}}</h3>
                        <p>Book</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-book"></i>
                    </div>
                    <a href="{{route('admin.book.getList')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$total['slider']}}</h3>
                        <p>Slider</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-settings-strong"></i>
                    </div>
                    <a href="{{route('admin.slider.getList')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection()