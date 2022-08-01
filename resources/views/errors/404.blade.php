<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/public/template/frontend/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/public/template/frontend/images/favicon.png" type="image/x-icon">

    <title>BOOKSTORE - PAGE NOT FOUND</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/css/color16.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/css/phone-ring.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/bookstore_laravel_7/public/frontend/css/my-style.css" />
</head>

<body>
    <div class="loader_skeleton">
        <div class="typography_section">
            <div class="typography-box">
                <div class="typo-content loader-typo">
                    <div class="pre-loader"></div>
                </div>
            </div>
        </div>
    </div> <!-- header start -->
    <header class="my-header sticky">
        <div class="mobile-fix-option"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="brand-logo">
                                <a href="http://localhost/bookstore_laravel_7">
                                    <h2 class="mb-0" style="color: #5fcbc4">BookStore</h2>
                                </a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                        </li>
                                        <li>
                                            <a href="http://localhost/bookstore_laravel_7" class="my-menu-link" data-active="index">
                                                Trang chủ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="book.html" class="my-menu-link" data-active="list">
                                                Sách
                                            </a>
                                        </li>
                                        <li>
                                            <a href="category.html" class="my-menu-link" data-active="category">
                                                Danh mục
                                            </a>
                                            <ul>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="top-header">
                                <ul class="header-dropdown">
                                    <li class="onhover-dropdown mobile-account">
                                        <img src="http://localhost/bookstore_laravel_7/resources/upload/user/avatars/default.png" alt="avatar" style="width:35px; height:35px;">
                                        <ul class="onhover-show-div">

                                            <li><a href="http://localhost/bookstore_laravel_7/login">Đăng nhập</a></li>
                                            <li><a href="http://localhost/bookstore_laravel_7/register">Đăng ký</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div>
                                                <img src="search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt="">
                                                <i class="ti-search" onclick="openSearch()"></i>
                                            </div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div>
                                                    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form action="book.html" method="GET">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="search" id="search-input" placeholder="Tìm kiếm sách...">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div>
                                                <a href="cart.html" id="cart" class="position-relative">
                                                    <img src="http://localhost/bookstore_laravel_7/public/frontend/images/cart.png" class="img-fluid blur-up lazyload" alt="cart">
                                                    <i class="ti-shopping-cart"></i>
                                                    <span class="badge badge-warning" id="totalQuantities"></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- header end -->

    <!-- Content -->

    <div class="breadcrumb-section" style="margin-top: 107px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <h2 class="py-2">Không tìm thấy trang yêu cầu</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="error-section">
                        <h1>404</h1>
                        <h2>Đường dẫn không hợp lệ</h2>
                        <a href="http://localhost/bookstore_laravel_7" class="btn btn-solid">Quay lại trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content end -->

    <!-- footer -->
    <div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
        <div class="phonering-alo-ph-circle"></div>
        <div class="phonering-alo-ph-circle-fill"></div>
        <a href="tel:0905744470" class="pps-btn-img" title="Liên hệ">
            <div class="phonering-alo-ph-img-circle"></div>
        </a>
    </div>
    <footer class="footer-light mt-5">
        <section class="section-b-space light-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>Giới thiệu</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo">
                                <h2 style="color: #5fcbc4">BookStore</h2>
                            </div>
                            <p>Tự hào là website bán sách trực tuyến lớn nhất Việt Nam, cung cấp đầy đủ các thể loại
                                sách, đặc biệt với những đầu sách độc quyền trong nước và quốc tế</p>
                        </div>
                    </div>
                    <div class="col offset-xl-1">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Danh mục nổi bật</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="list.html">Bà mẹ - Em bé</a></li>
                                    <li><a href="list.html">Học Ngoại Ngữ</a></li>
                                    <li><a href="list.html">Công Nghệ Thông Tin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Chính sách</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">Điều khoản sử dụng</a></li>
                                    <li><a href="#">Chính sách bảo mật</a></li>
                                    <li><a href="#">Hợp tác phát hành</a></li>
                                    <li><a href="#">Phương thức vận chuyển</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Thông tin</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-phone"></i>Hotline: <a href="tel:0905744470">0938 502 093</a></li>
                                    <li><i class="fa fa-envelope-o"></i>Email: <a href="mailto:training@zend.vn" class="text-lowercase">bao.nguyendinh07@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- footer end -->

    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/notify.min.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/adminlte.min.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/custom.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/jquery.exitintent.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/notifyjs/notify.min.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/exit.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/menu.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/lazysizes.min.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/popper.min.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/slick.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/bootstrap.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/script.js"></script>
    <script type="text/javascript" src="http://localhost/bookstore_laravel_7/public/frontend/js/my-custom.js"></script>
    <!-- <script src="http://localhost/bookstore_laravel_7/public/frontend/dist/js/myscript.js"></script> -->
</body>

</html>