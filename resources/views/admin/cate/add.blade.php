@extends('admin.master')
@section('content')
<?php
$statusOptions = ['active' => 'Active', 'inactive' => 'Inactive'];
$specialOptions = ['No', 'Yes'];
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Category Add</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('admin.html.error')
                <form action="{{route('admin.cate.getAdd')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label fw-bold">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Status </label><select class="custom-select" name="status">
                                    {{options($statusOptions, old('status'))}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Special </label><select class="custom-select" name="special">
                                    {{options($specialOptions, old('special'))}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Ordering </label><input type="number" name="ordering" class="form-control" id="" value="{{old('ordering') ?? 10}}" placeholder="">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{route('admin.cate.getList')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection()