@extends('admin.master')
@section('content')
<?php
$statusOptions = [
    'inactive' => 'Inactive',
    'active'   => 'Active'
];

$specialOptions = [
    0 => 'No',
    1   => 'Yes'
];
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('admin.html.error')
                <form action="{{ route('admin.cate.getEdit', $id) }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label fw-bold">Name
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="cateName" class="form-control" value="{{$data['name']}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Status </label>
                                <select class="custom-select" name="status">
                                    {{options($statusOptions, $data['status'])}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Special </label>
                                <select class="custom-select" name="special">
                                    {{options($specialOptions, $data['special'])}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Ordering </label>
                                <input type="number" name="ordering" class="form-control" value="{{$data['ordering']}}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{Route('admin.cate.getList')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection()