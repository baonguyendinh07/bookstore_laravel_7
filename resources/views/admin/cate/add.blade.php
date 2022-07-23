@extends('admin.master')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    <ul style="padding: 0; margin: 0">
                        @foreach($errors->all() as $error)
                        <li style="display:block; margin: 10px 0">{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('admin.cate.getAdd') }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label fw-bold">Name <span class="text-danger">*</span></label><input type="text" name="cateName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Status </label><select class="custom-select" name="status">
                                    <option value="inactive">Inactive</option>
                                    <option value="active" selected>Active</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Special </label><select class="custom-select" name="special">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">Ordering </label><input type="number" name="ordering" class="form-control" id="" value="10" placeholder="">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="category-index" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection()