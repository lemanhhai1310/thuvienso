<?php $data["title"] = "Cửa hàng"; ?>
<?php $isHome = false; ?>
<?php $isLogin = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-light" style="background: #000;min-height: 170px;">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <h1 class="uk-margin-remove fz-54 line-height-126 sora-600 uk-text-capitalize">Tài liệu</h1>
                <nav class="item-9px" aria-label="Breadcrumb">
                    <ul class="breadcrumb uk-breadcrumb uk-margin-remove">
                        <li><a href=".">Trang chủ</a></li>
                        <li><span aria-current="page">thủ tục hành chính</span></li>
                    </ul>
                </nav>
            </div>
            <div class="uk-width-auto">
                <div class="uk-flex-middle" uk-grid>
                    <div>
                        <div class="cuahang__banner__txt width-245px uk-text-center fz-34 sora-600 line-height-126">
                            <span style="color: #F65D4E;">Giảm tới 50%</span>
                            trên hàng trăm
                            đầu sách
                        </div>
                    </div>
                    <div>
                        <img src="images/1920/digital-art-style-illustration-mental-health-day-awareness1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-h-60"></div>
<div class="uk-container">
    <div class="uk-grid uk-grid-medium" uk-grid>
        <div class="uk-width-auto">
            <div class="width-258px rounded-20px bd-1-E6E6E6 padding-20 uk-box-sizing-border" uk-sticky="offset: 72;start: 1;end: !.uk-container;">
                <h3 class="fz-16 line-height-150 text-000 be-vietnam-pro-semibold mb-16">Danh mục tài liệu</h3>
                <ul class="uk-nav-default tailieu__nav" uk-nav="multiple: true">
                    <li class="tailieu__nav__li uk-parent uk-open">
                        <a href="#" class="tailieu__nav__a">Parent <span uk-nav-parent-icon></span></a>
                        <ul class="uk-nav-sub uk-padding-remove">
                            <li class="tailieu__nav__li"><a class="tailieu__nav__a" href="#" style="--data-num: '4'"><span class="uk-text-truncate">Cơ quan thực hiện: Cục Giám định nhà nước về chất lượng công trình xây dựng</span></a></li>
                            <li class="tailieu__nav__li"><a class="tailieu__nav__a" href="#" style="--data-num: '4'"><span class="uk-text-truncate">Sub item</span></a></li>
                        </ul>
                    </li>
                    <li class="tailieu__nav__li uk-parent">
                        <a href="#" class="tailieu__nav__a">Parent <span uk-nav-parent-icon></span></a>
                        <ul class="uk-nav-sub uk-padding-remove">
                            <li class="tailieu__nav__li"><a class="tailieu__nav__a" href="#" style="--data-num: '4'"><span class="uk-text-truncate">Sub item</span></a></li>
                            <li class="tailieu__nav__li"><a class="tailieu__nav__a" href="#" style="--data-num: '4'"><span class="uk-text-truncate">Sub item</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="uk-width-expand">
            <div class="uk-card uk-card-body rounded-15px padding-32" style="background: linear-gradient(270deg, rgba(253, 239, 203, 0.50) -8.75%, rgba(255, 243, 140, 0.50) 68.84%), #FFF6AD;">
                <h2 class="be-vietnam-pro-medium line-height-120 fz-28px text-966412">Hướng dẫn mua tài liệu</h2>
                <div class="uk-grid uk-child-width-expand item-32px" uk-grid>
                    <div>
                        <div class="uk-grid uk-grid-8" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container uk-background-default uk-border-circle">
                                    <span class="uk-position-center fz-26 be-vietnam-pro-semibold line-height-138 text-966412">1</span>
                                    <canvas width="50" height="50"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand text-2A2928">
                                <h3 class="uk-margin-remove fz-20 be-vietnam-pro-medium line-height-120">Đăng ký/ đăng nhập</h3>
                                <div class="item-4px fz-14 line-height-158">Tài khoản người dùng</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-grid uk-grid-8" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container uk-background-default uk-border-circle">
                                    <span class="uk-position-center fz-26 be-vietnam-pro-semibold line-height-138 text-966412">2</span>
                                    <canvas width="50" height="50"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand text-2A2928">
                                <h3 class="uk-margin-remove fz-20 be-vietnam-pro-medium line-height-120">Vào trang Tài liệu</h3>
                                <div class="item-4px fz-14 line-height-158">Tìm tài liệu cần xem</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-grid uk-grid-8" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container uk-background-default uk-border-circle">
                                    <span class="uk-position-center fz-26 be-vietnam-pro-semibold line-height-138 text-966412">3</span>
                                    <canvas width="50" height="50"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand text-2A2928">
                                <h3 class="uk-margin-remove fz-20 be-vietnam-pro-medium line-height-120">Mua tài liệu và sử dụng</h3>
                                <div class="item-4px fz-14 line-height-158">Sau khi chọn được tài liệu, nhấn nút mua để có thể tải và sử dụng</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-h-9"></div>
            <nav class="sachdamua__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item" style="gap: 12px">
                        <h3 class="fz-16 be-vietnam-pro-semibold line-height-150 text-000">Thủ tục hành chính <span style="color: #966412;">(82)</span></h3>
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item gap-24">
                        <form class="sachdamua__search uk-search uk-search-default">
                            <input class="sachdamua__search__input uk-search-input" type="search" placeholder="Tìm theo tên sách" aria-label="Tìm theo tên sách">
                            <span class="sachdamua__search__icon uk-search-icon-flip" uk-search-icon></span>
                        </form>
                        <div class="divider-vertical-20"></div>
                        <div>
                            <div class="uk-flex uk-flex-middle uk-link-text gap-8 cursor-pointer">
                                <div class="icon24 icon24--filter"></div>
                                <div class="fz-12 be-vietnam-pro-semibold line-height-200 text-000">Mức độ</div>
                            </div>
                            <div class="sachdamua__dropdown" uk-dropdown="mode: click; pos: bottom-right">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="divider"></div>
            <div class="space-h-30"></div>
            <div class="padding-20 rounded-15px bd-1-E6E6E6">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="tailieu__content__item">
                        <div class="uk-grid uk-grid-42" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-box-sizing-border width-129px uk-text-center padding-32">
                                    <div class="uk-cover-container uk-border-circle bg-E9F9FD uk-flex-inline">
                                        <div class="uk-position-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                <path d="M22.5 17.5V10.5C22.5 8.29086 20.7091 6.5 18.5 6.5H15.8333C14.9679 6.5 14.1257 6.21929 13.4333 5.7L11.5667 4.3C10.8743 3.78071 10.0321 3.5 9.16667 3.5H6.5C4.29086 3.5 2.5 5.29086 2.5 7.5V17.5C2.5 19.7091 4.29086 21.5 6.5 21.5H18.5C20.7091 21.5 22.5 19.7091 22.5 17.5Z" stroke="#4DC1DB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <canvas width="60" height="60"></canvas>
                                    </div>
                                    <div class="fz-14 be-vietnam-pro-semibold text-2A2928 line-height-142 item-8px">Mức độ 3</div>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-margin-remove fz-16 text-000 line-height-150 be-vietnam-pro-semibold"><a
                                            href="" class="uk-link-toggle">Thủ tục Thẩm định thiết kế xây dựng triển khai sau thiết kế cơ sở/điều chỉnh thiết kế xây dựng triển khai sau thiết kế cơ sở</a></h3>
                                <div class="item-8px uk-flex uk-flex-middle">
                                    <div class="tailieu__content__box">
                                        <div class="uk-position-relative">
                                            <span class="tailieu__content__star tailieu__content__star--off"></span>
                                            <span class="tailieu__content__star tailieu__content__star--off"></span>
                                            <span class="tailieu__content__star tailieu__content__star--off"></span>
                                            <span class="tailieu__content__star tailieu__content__star--off"></span>
                                            <span class="tailieu__content__star tailieu__content__star--off"></span>
                                            <div class="uk-position-top-left uk-overflow-hidden uk-text-nowrap" style="width: 60%;">
                                                <span class="tailieu__content__star tailieu__content__star--on"></span>
                                                <span class="tailieu__content__star tailieu__content__star--on"></span>
                                                <span class="tailieu__content__star tailieu__content__star--on"></span>
                                                <span class="tailieu__content__star tailieu__content__star--on"></span>
                                                <span class="tailieu__content__star tailieu__content__star--on"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tailieu__content__box">
                                        <div class="text-999 fz-12">352 Trang</div>
                                    </div>
                                    <div class="tailieu__content__box">
                                        <div class="text-999 fz-12">Xuất bản: 2022</div>
                                    </div>
                                </div>
                                <div class="item-8px fz-14 text-444 line-height-142 be-vietnam-pro-medium">
                                    <span class="uk-text-light">Thể loại:</span> Thủ tục hành chính
                                </div>
                                <div class="item-8px fz-14 text-444 line-height-142 be-vietnam-pro-medium">
                                    <span class="uk-text-light">Cơ quan thực hiện:</span> Cục Giám định nhà nước về chất lượng công trình xây dựng
                                </div>
                                <div class="item-28px fz-16 line-height-125">
                                    <span class="be-vietnam-pro-medium text-444241">Giá trọn bộ:</span> <span class="be-vietnam-pro-semibold text-04C5BA">170.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="space-h-50"></div>
            <nav aria-label="Pagination">
                <ul class="pagination uk-pagination uk-flex-center uk-margin-remove-bottom">
                    <li><a href="#"><span uk-pagination-previous></span></a></li>
                    <li><a href="#">1</a></li>
                    <li class="uk-disabled"><span>…</span></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li class="uk-active"><span aria-current="page">7</span></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#"><span uk-pagination-next></span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="space-h-100"></div>
<?php require "template-parts/layouts/footer.php"; ?>