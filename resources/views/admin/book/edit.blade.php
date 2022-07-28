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
                <h1 class="m-0">Book Edit</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('admin.html.error')
                <form action="{{route('admin.book.getEdit',$id)}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label fw-bold">
                                    Name
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="name" class="form-control" value="{{old('name') ?? $data['name']}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Short Description </label>
                                <textarea name="short_description" class="form-control" rows="5">{{old('short_description') ?? $data['short_description']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="description" class="form-control" id="editor" rows="5">{{old('description') ?? $data['description']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Price <span class="text-danger">*</span></label>
                                <input type="number" name="price" class="form-control" value="{{old('price') ?? $data['price']}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Sale Off </label>
                                <input type="number" name="sale_off" class="form-control" value="{{old('sale_off') ?? $data['sale_off']}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Status <span class="text-danger">*</span></label>
                                <select class="custom-select" name="status">
                                    {{options($statusOptions, old('status') ?? $data['status'])}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Special </label>
                                <select class="custom-select" name="special">
                                    {{options($specialOptions, old('special') ?? $data['special'])}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Category <span class="text-danger">*</span></label>
                                <select class="custom-select" name="cate_id">
                                    {{options($cateOptions, old('cate_id') ?? $data['cate_id'])}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Ordering </label>
                                <input type="number" name="ordering" class="form-control" value="{{old('ordering') ?? $data['ordering']}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Picture </label>
                                <input type="file" name="picture" class="form-control" style="width:220px; border:none">
                                @if(!empty($data['picture']))
                                <img src="{{asset('resources/upload/book/images/'.$data['picture'])}}" style="width:120px">
                                @endif
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{route('admin.book.getList')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection()