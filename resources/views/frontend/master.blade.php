<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.html.head')
</head>

<body>
    @include('frontend.html.loader-skeleton')
    <!-- header start -->
    @include('frontend.html.my-header')
    <!-- header end -->

    <!-- Content -->

    @yield('content')

    <!-- Content end -->

    <!-- footer -->
    @include('frontend.html.phonering')
    @include('frontend.html.footer')

    <!-- footer end -->

    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->
    @include('frontend.html.script')
</body>

</html>