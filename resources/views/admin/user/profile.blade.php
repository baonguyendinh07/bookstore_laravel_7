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
                <form action="" method="post">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label fw-bold">Username </label>
                                <p class="form-control btn-blue">admin</p>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Email </label>
                                <p class="form-control btn-blue">admin@gmail.com</p>
                            </div>
                            <div class="form-group">
                                <a href="{{route('admin.user.changeAccPw')}}"><label class="form-label fw-bold">Change Password </label></a>
                                <p class="form-control">************</p>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Fullname <span class="text-danger">*</span></label><input type="text" name="fullname" class="form-control" value="Nguyễn Đình Bảo">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Birthday </label><input type="date" name="birthday" class="form-control" value="1996-03-22">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Phone Number </label><input type="number" name="phone_number" class="form-control" value="0938502093">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Address </label><input type="text" name="address" class="form-control" value="30 đường 25, Linh Đông, Thủ Đức">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{route('admin.dashboard.getList')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection('content')