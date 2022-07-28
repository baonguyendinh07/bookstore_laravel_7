@extends('admin.master')
@section('content')
<?php
$statusOptions = ['active' => 'Active', 'inactive' => 'Inactive'];
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">User Add</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('admin.html.error')
                <form action="{{route('admin.user.getAdd')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label fw-bold">Username <span class="text-danger">*</span></label>
                                <input type="text" name="username" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Avatar </label>
                                <input type="file" name="avatar" class="form-control" style="width:220px; border:none">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Fullname <span class="text-danger">*</span></label><input type="text" name="fullname" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Status <span class="text-danger">*</span></label>
                                <select class="custom-select" name="status">
                                    {{options($statusOptions, old('status'))}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Group <span class="text-danger">*</span></label>
                                <select class="custom-select" name="group_id">
                                    {{options($groupIdOptions, old('group_id') ?? 4)}}
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{route('admin.user.getList')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection('content')