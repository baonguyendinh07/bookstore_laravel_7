<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.html.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.html.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.html.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('admin.html.content-header')
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    @include('admin.html.script')
</body>
</html>
