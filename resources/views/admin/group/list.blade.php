@extends('admin.master')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Group List</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">List</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle text-center table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Group ACP</th>
                                        <th>Status</th>
                                        <th>Members</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- content -->
                                    @foreach($data as $item)
                                    <tr>
                                        <td>{{$item['id']}}</td>
                                        <td>{{$item['name']}}</td>
                                        <td>{{showStatus($item['group_acp'])}}</td>
                                        <td>{{showStatus($item['status'])}}</td>
                                        <td>{{$count[$item['id']]}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()