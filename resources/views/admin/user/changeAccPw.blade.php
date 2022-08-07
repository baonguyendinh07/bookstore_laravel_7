@extends('admin.master')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" style="width:100%">
            <div class="col-sm-6" style="width:100%">
                <h1 class="m-0">User - Change Password</h1>
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
                                <label class="form-label fw-bold">Current Password <span class="text-danger">*</span></label><input type="password" name="old_password" class="form-control" id="" value="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">New Password <span class="text-danger">*</span></label><input type="password" name="password" class="form-control" id="" value="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Confirm New Password <span class="text-danger">*</span></label><input type="password" name="confirm_password" class="form-control" id="" value="" placeholder="">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{route('admin.user.getProfile')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection('content')