<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Search & Filter -->
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Search &amp; Filter</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row justify-content-between align-items-center">
                                <div class="area-filter-status mb-2">
                                    <a href="index.php?module=backend&amp;controller=user&amp;action=index&amp;filterStatus=all" class="btn btn-info">All <span class="badge badge-pill badge-light">9</span></a> <a href="index.php?module=backend&amp;controller=user&amp;action=index&amp;filterStatus=active" class="btn btn-secondary">Active <span class="badge badge-pill badge-light">9</span></a> <a href="index.php?module=backend&amp;controller=user&amp;action=index&amp;filterStatus=inactive" class="btn btn-secondary">Inactive <span class="badge badge-pill badge-light">0</span></a>
                                </div>
                                <div class="area-filter-attribute mb-2">
                                    <form action="index.php" method="GET" id="filter-form">
                                        <input type="hidden" name="module" class="form-control" id="" value="backend" placeholder=""> <input type="hidden" name="controller" class="form-control" id="" value="user" placeholder=""> <input type="hidden" name="action" class="form-control" id="" value="index" placeholder=""> <select class="custom-select filter-element" name="group_id">
                                            <option value="default" selected=""> - Select Group - </option>
                                            <option value="1">Admin</option>
                                            <option value="2">Manager</option>
                                            <option value="3">Member</option>
                                            <option value="4">Register</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="area-search mb-2">
                                    <form action="index.php" method="GET">
                                        <input type="hidden" name="module" class="form-control" id="" value="backend" placeholder=""> <input type="hidden" name="controller" class="form-control" id="" value="user" placeholder=""> <input type="hidden" name="action" class="form-control" id="" value="index" placeholder="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search-key" value="">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-info">Search</button>
                                                <a href="index.php?module=backend&amp;controller=user&amp;action=index" class="btn btn-danger">Clear</a>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- List -->
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">List</h3>

                        <div class="card-tools">
                            <a href="index.php?module=backend&amp;controller=user&amp;action=index" class="btn btn-tool" data-card-widget="refresh">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row align-items-center justify-content-between mb-2">
                                <div>
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-danger" id="submit-main-form">Multi Delete</button>
                                        </span>
                                    </div>
                                </div>
                                <div><a href="user-form" class="btn btn-info  "><i class="fas fa-plus"></i> Add New</a></div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle text-center table-bordered">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="checkAll"></th>
                                        <th>ID</th>
                                        <th class="text-left">Info</th>
                                        <th>Group</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- content here -->
                                    <form action="index.php?module=backend&amp;controller=user&amp;action=multiDelete" method="post" name="main-form" id="main-form"></form>
                                    <tr>
                                        <td><input type="checkbox" name="form[id][]" value="41"></td>
                                        <td>41</td>
                                        <td class="text-left">
                                            <p class="mb-0"><b>Username</b>: messi.leo123</p>
                                            <p class="mb-0"><b>FullName</b>: Leonal Messi 1</p>
                                            <p class="mb-0"><b>Email</b>: messi.leo@yahoo.com</p>
                                        </td>
                                        <td class="position-relative"><select class="custom-select btn-ajax-group-id" name="" data-url="index.php?module=backend&amp;controller=user&amp;action=changeGroupId&amp;id=41">
                                                <option value="1">Admin</option>
                                                <option value="2">Manager</option>
                                                <option value="3" selected="">Member</option>
                                                <option value="4">Register</option>
                                            </select></td>
                                        <td class="position-relative"><a href="index.php?module=backend&amp;controller=user&amp;action=changeStatus&amp;id=41&amp;status=active" class="btn btn-success rounded-circle btn-sm btn-ajax-status"><i class="fas fa-check" "=""></i></a></td>
                        <td>
                            <p class=" mb-0"><i class="far fa-user"></i>mrbean</p>
                                                    <p class="mb-0"><i class="far fa-clock"></i>2022-07-09 17:45:20</p>
                                        </td>
                                        <td>
                                            <p class="mb-0"><i class="far fa-user"></i>admin</p>
                                            <p class="mb-0"><i class="far fa-clock"></i>2022-07-23 16:59:18</p>
                                        </td>
                                        <td><a href="index.php?module=backend&amp;controller=user&amp;action=changePassword&amp;id=41" class="btn btn-secondary rounded-circle btn-sm"><i class="fas fa-key "></i></a><a href="index.php?module=backend&amp;controller=user&amp;action=form&amp;id=41" class="btn btn-info rounded-circle btn-sm"><i class="fas fa-pen"></i></a><a href="index.php?module=backend&amp;controller=user&amp;action=delete&amp;id=41" class="btn btn-danger btn-delete rounded-circle btn-sm"><i class="fas fa-trash "></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="form[id][]" value="40"></td>
                                        <td>40</td>
                                        <td class="text-left">
                                            <p class="mb-0"><b>Username</b>: ronaldo.chris</p>
                                            <p class="mb-0"><b>FullName</b>: Ronaldo CR7</p>
                                            <p class="mb-0"><b>Email</b>: ronaldo.chris07@gmail.com</p>
                                        </td>
                                        <td class="position-relative"><select class="custom-select btn-ajax-group-id" name="" data-url="index.php?module=backend&amp;controller=user&amp;action=changeGroupId&amp;id=40">
                                                <option value="1">Admin</option>
                                                <option value="2">Manager</option>
                                                <option value="3" selected="">Member</option>
                                                <option value="4">Register</option>
                                            </select></td>
                                        <td class="position-relative"><a href="index.php?module=backend&amp;controller=user&amp;action=changeStatus&amp;id=40&amp;status=active" class="btn btn-success rounded-circle btn-sm btn-ajax-status"><i class="fas fa-check" "=""></i></a></td>
                        <td>
                            <p class=" mb-0"><i class="far fa-user"></i>mrbean</p>
                                                    <p class="mb-0"><i class="far fa-clock"></i>2022-07-09 17:44:25</p>
                                        </td>
                                        <td>
                                            <p class="mb-0"><i class="far fa-user"></i>mrbean</p>
                                            <p class="mb-0"><i class="far fa-clock"></i>2022-07-10 08:02:38</p>
                                        </td>
                                        <td><a href="index.php?module=backend&amp;controller=user&amp;action=changePassword&amp;id=40" class="btn btn-secondary rounded-circle btn-sm"><i class="fas fa-key "></i></a><a href="index.php?module=backend&amp;controller=user&amp;action=form&amp;id=40" class="btn btn-info rounded-circle btn-sm"><i class="fas fa-pen"></i></a><a href="index.php?module=backend&amp;controller=user&amp;action=delete&amp;id=40" class="btn btn-danger btn-delete rounded-circle btn-sm"><i class="fas fa-trash "></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="form[id][]" value="39"></td>
                                        <td>39</td>
                                        <td class="text-left">
                                            <p class="mb-0"><b>Username</b>: newregister1</p>
                                            <p class="mb-0"><b>FullName</b>: New Register 2022</p>
                                            <p class="mb-0"><b>Email</b>: register1@gmail.com</p>
                                        </td>
                                        <td class="position-relative"><select class="custom-select btn-ajax-group-id" name="" data-url="index.php?module=backend&amp;controller=user&amp;action=changeGroupId&amp;id=39">
                                                <option value="1">Admin</option>
                                                <option value="2">Manager</option>
                                                <option value="3">Member</option>
                                                <option value="4" selected="">Register</option>
                                            </select></td>
                                        <td class="position-relative"><a href="index.php?module=backend&amp;controller=user&amp;action=changeStatus&amp;id=39&amp;status=active" class="btn btn-success rounded-circle btn-sm btn-ajax-status"><i class="fas fa-check" "=""></i></a></td>
                        <td>
                            <p class=" mb-0"><i class="far fa-user"></i>mrbean</p>
                                                    <p class="mb-0"><i class="far fa-clock"></i>2022-07-09 17:42:52</p>
                                        </td>
                                        <td>
                                            <p class="mb-0"><i class="far fa-user"></i>mrbean</p>
                                            <p class="mb-0"><i class="far fa-clock"></i>2022-07-10 08:05:14</p>
                                        </td>
                                        <td><a href="index.php?module=backend&amp;controller=user&amp;action=changePassword&amp;id=39" class="btn btn-secondary rounded-circle btn-sm"><i class="fas fa-key "></i></a><a href="index.php?module=backend&amp;controller=user&amp;action=form&amp;id=39" class="btn btn-info rounded-circle btn-sm"><i class="fas fa-pen"></i></a><a href="index.php?module=backend&amp;controller=user&amp;action=delete&amp;id=39" class="btn btn-danger btn-delete rounded-circle btn-sm"><i class="fas fa-trash "></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination m-0 float-right">
                            <li class="page-item disabled"><a class="page-link"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="page-item disabled"><a class="page-link"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="index.php?module=backend&amp;controller=user&amp;action=index&amp;page=1">1</a></li>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&amp;controller=user&amp;action=index&amp;page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&amp;controller=user&amp;action=index&amp;page=3">3</a></li>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&amp;controller=user&amp;action=index&amp;page=2"><i class="fa fa-angle-right"></i></a></li>
                            <li class="page-item"><a class="page-link" href="index.php?module=backend&amp;controller=user&amp;action=index&amp;page=3"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>