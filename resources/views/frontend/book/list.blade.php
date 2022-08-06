@extends('frontend.master')
@section('content')
<div class="breadcrumb-section" style="margin-top: 107px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2 class="py-2">tất cả sách</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section-b-space j-box ratio_asos">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 collection-filter">
                    <!-- side-bar colleps block stat -->
                    <div class="collection-filter-block">
                        <!-- brand filter start -->
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                        <div class="collection-collapse-block open">
                            <h3 class="collapse-block-title">Danh mục</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    @foreach($cates as $item)
                                    <div class="custom-control custom-checkbox collection-filter-checkbox pl-0 category-item">
                                        <a class="<?= $item->id == $id ? 'my-text-primary' : 'text-dark' ?>" href="{{'c-' . $item->id .'-' . Str::slug($item->name)}}">{{$item->name}}</a>
                                    </div>
                                    @endforeach
                                    <div class="custom-control custom-checkbox collection-filter-checkbox pl-0 text-center">
                                        <span class="text-dark font-weight-bold" id="btn-view-more">Xem thêm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="theme-card">
                        <h5 class="title-border">Sách nổi bật</h5>
                        <div class="offer-slider slide-1 slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button">Previous</button>
                            <div class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 1890px; transform: translate3d(-210px, 0px, 0px);">
                                    <div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 210px;" tabindex="-1">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=95" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/d85Cq9s7.PNG" alt="Sách thiếu nhi tiếng Pháp - M..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=95" title="Sách thiếu nhi tiếng Pháp - M..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>Sách thiếu nhi tiếng Pháp - M...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">230,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=126" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/ZYL7ge0f.PNG" alt="Biệt Đội Stem - Thế Giới P..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=126" title="Biệt Đội Stem - Thế Giới P..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>Biệt Đội Stem - Thế Giới P...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">50,150đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=67" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/jogHJCZd.PNG" alt="Tiểu Thuyết Mẹ Chồng" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=67" title="Tiểu Thuyết Mẹ Chồng" style="display:block;height:70px" tabindex="-1">
                                                            <h6>Tiểu Thuyết Mẹ Chồng</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">190,000đ</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 210px;">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=71" tabindex="0">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/q9ChWp07.PNG" alt="Văn Học Ý - Tác Phẩm Chọn ..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=71" title="Văn Học Ý - Tác Phẩm Chọn ..." style="display:block;height:70px" tabindex="0">
                                                            <h6>Văn Học Ý - Tác Phẩm Chọn ...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">162,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=90" tabindex="0">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/dG8lnhTm.PNG" alt="Collins Pocket Vietnamese Dictionar..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=90" title="Collins Pocket Vietnamese Dictionar..." style="display:block;height:70px" tabindex="0">
                                                            <h6>Collins Pocket Vietnamese Dictionar...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">229,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=93" tabindex="0">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/m80nD1vJ.PNG" alt="Clean Code" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=93" title="Clean Code" style="display:block;height:70px" tabindex="0">
                                                            <h6>Clean Code</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">1,150,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=100" tabindex="0">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/ZplANVvh.PNG" alt="KHOA HỌC KỸ NĂNG CHO THỜI Đ..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=100" title="KHOA HỌC KỸ NĂNG CHO THỜI Đ..." style="display:block;height:70px" tabindex="0">
                                                            <h6>KHOA HỌC KỸ NĂNG CHO THỜI Đ...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">98,100đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=102" tabindex="0">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/tiW3PMLF.PNG" alt="CHÚ BÉ CÓ TÀI MỞ KHÓA (TÁI ..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=102" title="CHÚ BÉ CÓ TÀI MỞ KHÓA (TÁI ..." style="display:block;height:70px" tabindex="0">
                                                            <h6>CHÚ BÉ CÓ TÀI MỞ KHÓA (TÁI ...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">103,500đ</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 210px;" tabindex="-1">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=104" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/1ZYDvPmU.PNG" alt="EVERYTHING, EVERYTHING" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=104" title="EVERYTHING, EVERYTHING" style="display:block;height:70px" tabindex="-1">
                                                            <h6>EVERYTHING, EVERYTHING</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">199,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=72" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/KtF0MDHm.PNG" alt="Văn Học Scotland - Tác Phẩm C..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=72" title="Văn Học Scotland - Tác Phẩm C..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>Văn Học Scotland - Tác Phẩm C...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">40,500đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=82" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/5KtwRySx.PNG" alt="THE HAUNTING OF HILL HOUSE : A NOVE..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=82" title="THE HAUNTING OF HILL HOUSE : A NOVE..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>THE HAUNTING OF HILL HOUSE : A NOVE...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">199,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=83" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/VEgUZce0.PNG" alt="ALL KIDS ARE GOOD KIDS" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=83" title="ALL KIDS ARE GOOD KIDS" style="display:block;height:70px" tabindex="-1">
                                                            <h6>ALL KIDS ARE GOOD KIDS</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">143,100đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=88" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/e0GR5BxZ.PNG" alt="TEACH YOUR CHILD HOW TO THINK" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=88" title="TEACH YOUR CHILD HOW TO THINK" style="display:block;height:70px" tabindex="-1">
                                                            <h6>TEACH YOUR CHILD HOW TO THINK</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">149,000đ</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 210px;" tabindex="-1">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=94" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/7M1QkYnB.PNG" alt="The Way To Encourage Others" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=94" title="The Way To Encourage Others" style="display:block;height:70px" tabindex="-1">
                                                            <h6>The Way To Encourage Others</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">153,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=97" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/xyC6FbLt.PNG" alt="TRỞ VỀ KHÔNG - TRẢI NGHIỆM..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=97" title="TRỞ VỀ KHÔNG - TRẢI NGHIỆM..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>TRỞ VỀ KHÔNG - TRẢI NGHIỆM...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">143,100đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=101" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/XOc5pWAK.PNG" alt="NGƯỜI GIẢI MÃ THỊ TRƯỜNG..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=101" title="NGƯỜI GIẢI MÃ THỊ TRƯỜNG..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>NGƯỜI GIẢI MÃ THỊ TRƯỜNG...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">206,100đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=87" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/cGm0CQSM.PNG" alt="QUIZ BOOK FOR CLEVER KIDS" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=87" title="QUIZ BOOK FOR CLEVER KIDS" style="display:block;height:70px" tabindex="-1">
                                                            <h6>QUIZ BOOK FOR CLEVER KIDS</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">143,100đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=91" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/jzUuXvGZ.PNG" alt="Dreyer's English" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=91" title="Dreyer's English" style="display:block;height:70px" tabindex="-1">
                                                            <h6>Dreyer's English</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">249,000đ</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 210px;" tabindex="-1">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=95" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/d85Cq9s7.PNG" alt="Sách thiếu nhi tiếng Pháp - M..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=95" title="Sách thiếu nhi tiếng Pháp - M..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>Sách thiếu nhi tiếng Pháp - M...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">230,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=126" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/ZYL7ge0f.PNG" alt="Biệt Đội Stem - Thế Giới P..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=126" title="Biệt Đội Stem - Thế Giới P..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>Biệt Đội Stem - Thế Giới P...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">50,150đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=67" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/jogHJCZd.PNG" alt="Tiểu Thuyết Mẹ Chồng" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=67" title="Tiểu Thuyết Mẹ Chồng" style="display:block;height:70px" tabindex="-1">
                                                            <h6>Tiểu Thuyết Mẹ Chồng</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">190,000đ</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 210px;" tabindex="-1">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=71" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/q9ChWp07.PNG" alt="Văn Học Ý - Tác Phẩm Chọn ..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=71" title="Văn Học Ý - Tác Phẩm Chọn ..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>Văn Học Ý - Tác Phẩm Chọn ...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">162,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=90" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/dG8lnhTm.PNG" alt="Collins Pocket Vietnamese Dictionar..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=90" title="Collins Pocket Vietnamese Dictionar..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>Collins Pocket Vietnamese Dictionar...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">229,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=93" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/m80nD1vJ.PNG" alt="Clean Code" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=93" title="Clean Code" style="display:block;height:70px" tabindex="-1">
                                                            <h6>Clean Code</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">1,150,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=100" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/ZplANVvh.PNG" alt="KHOA HỌC KỸ NĂNG CHO THỜI Đ..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=100" title="KHOA HỌC KỸ NĂNG CHO THỜI Đ..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>KHOA HỌC KỸ NĂNG CHO THỜI Đ...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">98,100đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=102" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/tiW3PMLF.PNG" alt="CHÚ BÉ CÓ TÀI MỞ KHÓA (TÁI ..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=102" title="CHÚ BÉ CÓ TÀI MỞ KHÓA (TÁI ..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>CHÚ BÉ CÓ TÀI MỞ KHÓA (TÁI ...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">103,500đ</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 210px;" tabindex="-1">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=104" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/1ZYDvPmU.PNG" alt="EVERYTHING, EVERYTHING" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=104" title="EVERYTHING, EVERYTHING" style="display:block;height:70px" tabindex="-1">
                                                            <h6>EVERYTHING, EVERYTHING</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">199,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=72" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/KtF0MDHm.PNG" alt="Văn Học Scotland - Tác Phẩm C..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=72" title="Văn Học Scotland - Tác Phẩm C..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>Văn Học Scotland - Tác Phẩm C...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">40,500đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=82" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/5KtwRySx.PNG" alt="THE HAUNTING OF HILL HOUSE : A NOVE..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=82" title="THE HAUNTING OF HILL HOUSE : A NOVE..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>THE HAUNTING OF HILL HOUSE : A NOVE...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">199,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=83" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/VEgUZce0.PNG" alt="ALL KIDS ARE GOOD KIDS" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=83" title="ALL KIDS ARE GOOD KIDS" style="display:block;height:70px" tabindex="-1">
                                                            <h6>ALL KIDS ARE GOOD KIDS</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">143,100đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=88" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/e0GR5BxZ.PNG" alt="TEACH YOUR CHILD HOW TO THINK" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=88" title="TEACH YOUR CHILD HOW TO THINK" style="display:block;height:70px" tabindex="-1">
                                                            <h6>TEACH YOUR CHILD HOW TO THINK</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">149,000đ</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 210px;" tabindex="-1">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=94" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/7M1QkYnB.PNG" alt="The Way To Encourage Others" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=94" title="The Way To Encourage Others" style="display:block;height:70px" tabindex="-1">
                                                            <h6>The Way To Encourage Others</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">153,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=97" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/xyC6FbLt.PNG" alt="TRỞ VỀ KHÔNG - TRẢI NGHIỆM..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=97" title="TRỞ VỀ KHÔNG - TRẢI NGHIỆM..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>TRỞ VỀ KHÔNG - TRẢI NGHIỆM...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">143,100đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=101" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/XOc5pWAK.PNG" alt="NGƯỜI GIẢI MÃ THỊ TRƯỜNG..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=101" title="NGƯỜI GIẢI MÃ THỊ TRƯỜNG..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>NGƯỜI GIẢI MÃ THỊ TRƯỜNG...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">206,100đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=87" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/cGm0CQSM.PNG" alt="QUIZ BOOK FOR CLEVER KIDS" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=87" title="QUIZ BOOK FOR CLEVER KIDS" style="display:block;height:70px" tabindex="-1">
                                                            <h6>QUIZ BOOK FOR CLEVER KIDS</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">143,100đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=91" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/jzUuXvGZ.PNG" alt="Dreyer's English" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=91" title="Dreyer's English" style="display:block;height:70px" tabindex="-1">
                                                            <h6>Dreyer's English</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">249,000đ</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 210px;" tabindex="-1">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=95" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/d85Cq9s7.PNG" alt="Sách thiếu nhi tiếng Pháp - M..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=95" title="Sách thiếu nhi tiếng Pháp - M..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>Sách thiếu nhi tiếng Pháp - M...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">230,000đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=126" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/ZYL7ge0f.PNG" alt="Biệt Đội Stem - Thế Giới P..." style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=126" title="Biệt Đội Stem - Thế Giới P..." style="display:block;height:70px" tabindex="-1">
                                                            <h6>Biệt Đội Stem - Thế Giới P...</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">50,150đ</h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=67" tabindex="-1">
                                                        <img class="img-fluid blur-up lazyloaded" src="/public/files/book/jogHJCZd.PNG" alt="Tiểu Thuyết Mẹ Chồng" style="width: 110px">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="index.php?module=frontend&amp;controller=book&amp;action=item&amp;id=67" title="Tiểu Thuyết Mẹ Chồng" style="display:block;height:70px" tabindex="-1">
                                                            <h6>Tiểu Thuyết Mẹ Chồng</h6>
                                                        </a>
                                                        <h4 class="text-lowercase">190,000đ</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><button class="slick-next slick-arrow" aria-label="Next" type="button">Next</button>
                        </div>
                    </div> -->
                    <!-- silde-bar colleps block end here -->
                </div>
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="filter-main-btn">
                                                    <span class="filter-btn btn btn-theme"><i class="fa fa-filter" aria-hidden="true"></i> Filter</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-filter-content">
                                                    <div class="collection-view">
                                                        <ul>
                                                            <li>
                                                                <i class="fa fa-th grid-layout-view"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="collection-grid-view">
                                                        <ul>
                                                        </ul>
                                                    </div>
                                                    <div class="product-page-filter">
                                                        <form action="" id="sort-form" method="GET" class="filter-element">
                                                            <select class="" name="sort">
                                                                @foreach($arrOptions as $key => $value)
                                                                @if(isset($_GET['sort']) && $key == $_GET['sort'])
                                                                <option value="{{$key}}" selected>{{$value}}</option>
                                                                @else
                                                                <option value="{{$key}}">{{$value}}</option>
                                                                @endif
                                                                @endforeach
                                                            </select>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper-grid" id="my-product-list">
                                        <div class="row margin-res">
                                            <!-- content -->
                                            {{showProductBox($data, asset('resources/upload/book/images'), 60, 'style="height:370px"', '70px', '<div class="col-xl-3 col-6 col-grid-box">', '</div>')}}
                                            <!-- end content -->
                                        </div>
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="container-fluid p-0">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <!-- <nav aria-label="Page navigation">
                                                                <nav>
                                                                    <ul class="pagination m-0 float-right">
                                                                        <li class="page-item disabled"><a class="page-link"><i class="fa fa-angle-double-left"></i></a></li>
                                                                        <li class="page-item disabled"><a class="page-link"><i class="fa fa-angle-left"></i></a></li>
                                                                        <li class="page-item active"><a class="page-link" href="index.php?module=frontend&amp;controller=book&amp;action=list&amp;page=1">1</a></li>
                                                                        <li class="page-item"><a class="page-link" href="index.php?module=frontend&amp;controller=book&amp;action=list&amp;page=2">2</a></li>
                                                                        <li class="page-item"><a class="page-link" href="index.php?module=frontend&amp;controller=book&amp;action=list&amp;page=3">3</a></li>
                                                                        <li class="page-item"><a class="page-link" href="index.php?module=frontend&amp;controller=book&amp;action=list&amp;page=4">4</a></li>
                                                                        <li class="page-item"><a class="page-link" href="index.php?module=frontend&amp;controller=book&amp;action=list&amp;page=5">5</a></li>
                                                                        <li class="page-item"><a class="page-link" href="index.php?module=frontend&amp;controller=book&amp;action=list&amp;page=2"><i class="fa fa-angle-right"></i></a></li>
                                                                        <li class="page-item"><a class="page-link" href="index.php?module=frontend&amp;controller=book&amp;action=list&amp;page=7"><i class="fa fa-angle-double-right"></i></a></li>
                                                                    </ul>
                                                                </nav>
                                                            </nav> -->
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <div class="product-search-count-bottom">
                                                                <h5>Showing <!-- Items 1 - 12 of  -->{{$count['total']}} Results</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection('content')