@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('admin.html.error')
                <form action="{{route('admin.book.getAdd')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label fw-bold">
                                    Name
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Short Description </label>
                                <textarea name="short_description" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Description </label>
                                <textarea name="description" class="form-control" id="editor" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Price <span class="text-danger">*</span></label>
                                <input type="number" name="price" class="form-control" id="" value="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Sale Off </label>
                                <input type="number" name="sale_off" class="form-control" id="" value="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Status <span class="text-danger">*</span></label>
                                <select class="custom-select" name="status">
                                    <option value="inactive">Inactive</option>
                                    <option value="active" selected="">Active</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Special </label>
                                <select class="custom-select" name="special">
                                    <option value="0" selected="">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Category <span class="text-danger">*</span></label>
                                <select class="custom-select" name="cate_id">
                                    {{options($arrCate)}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Ordering </label>
                                <input type="number" name="ordering" class="form-control" id="" value="10" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Picture </label>
                                <input type="file" name="picture" class="form-control" id="" value="" placeholder="" style="width:220px; border:none">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="book-index" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection()