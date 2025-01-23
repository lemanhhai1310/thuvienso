
<?php $data["title"] = "Chi tiết tác giả"; ?>
<?php $isHome = false; ?>
<?php $isLogin = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <div class="space-h-20"></div>
    <nav class="" aria-label="Breadcrumb">
        <ul class="breadcrumb uk-breadcrumb uk-margin-remove">
            <li><a href=".">Trang chủ</a></li>
            <li><a href="danhsachtacgia.php">Danh sách tác giả</a></li>
            <li><span aria-current="page">Jeffry Christiansen</span></li>
        </ul>
    </nav>
    <div class="space-h-30"></div>

    <!--Tiểu sử-->
    <nav class="sachdamua__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left">
            <div class="uk-navbar-item" style="gap: 12px">
                <div class="icon24 icon24--thongtintaikhoain"></div>
                <div class="fz-14 be-vietnam-pro-semibold" style="color: #000;">Tiểu sử</div>
            </div>
        </div>
        <div class="uk-navbar-right">

        </div>
    </nav>
    <div class="divider"></div>
    <div class="space-h-24"></div>
    <div uk-grid>
        <div class="uk-width-auto">
            <div class="uk-cover-container border-20 uk-overflow-hidden">
                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                <canvas width="217" height="325"></canvas>
            </div>
        </div>
        <div class="uk-width-expand">
            <h1 class="uk-margin fz-24 text-000 be-vietnam-pro-semibold line-height-150">Jeffry Christiansen</h1>
            <div class="uk-margin text-5E5D5A line-height-150 be-vietnam-pro-medium">Office ipsum you must be muted. Nail price ideal dangerous site. Day container users relaxation options dangerous rehydrate shoot. Six talk fit boardroom whatever race low-hanging could base. To move left strategy harvest drive. Hard running boardroom get take picture strategy. Requirements expectations conversation no hill. Highlights three algorithm problem while ipsum race customer next let's. Break win group anyway my driving canatics any activities identify. We procrastinating vec any re-inventing users closer a.</div>
            <div class="uk-margin-top">
                <div class="uk-grid item-12px" uk-grid>
                    <div class="uk-width-2-5">
                        <div class="chitiettacgia__txt text-000 be-vietnam-pro-semibold line-height-150">Năm sinh: 1975</div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="chitiettacgia__txt text-000 be-vietnam-pro-semibold line-height-150">Chức danh: Giảng viên cao cấp</div>
                    </div>
                </div>
                <div class="uk-grid item-12px" uk-grid>
                    <div class="uk-width-2-5">
                        <div class="chitiettacgia__txt text-000 be-vietnam-pro-semibold line-height-150">Học hàm, học vị: Phó giáo sư - tiến sĩ</div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="chitiettacgia__txt text-000 be-vietnam-pro-semibold line-height-150">Đơn vị công tác: Trường Đại học Kinh tế - Đại học Quốc gia Hà Nội</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Tiểu sử-->
    <div class="space-h-30"></div>
    <!--Tác phẩm (31)-->
    <nav class="sachdamua__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left">
            <div class="uk-navbar-item" style="gap: 12px">
                <div class="icon24 icon24--thongtintaikhoain"></div>
                <div class="fz-14 be-vietnam-pro-semibold" style="color: #000;">Tác phẩm <span class="text-966412">(31)</span></div>
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
                        <div class="icon24 icon24--calendar"></div>
                        <div class="fz-12 be-vietnam-pro-semibold line-height-200 text-000">Năm xuất bản: <span class="text-966412">Mới nhất</span></div>
                    </div>
                    <div class="sachdamua__dropdown" uk-dropdown="mode: click; pos: bottom-right">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-active"><a href="#">Mới nhất</a></li>
                            <li><a href="#">Cũ nhất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="divider-vertical-20"></div>
                <div>
                    <div class="uk-flex uk-flex-middle uk-link-text gap-8 cursor-pointer">
                        <div class="icon24 icon24--money"></div>
                        <div class="fz-12 be-vietnam-pro-semibold line-height-200 text-000">Giá tiền: <span class="text-966412">Thấp tới cao</span></div>
                    </div>
                    <div class="sachdamua__dropdown" uk-dropdown="mode: click; pos: bottom-right">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="#">Cao tới thấp</a></li>
                            <li class="uk-active"><a href="#">Thấp tới cao</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="divider"></div>
    <div class="space-h-24"></div>
    <ul class="chi_tiet_sach__tab uk-margin-remove-top uk-margin-remove-bottom uk-tab" uk-tab>
        <li><a href="#">Tất cả</a></li>
        <li><a href="#">Ebook</a></li>
        <li><a href="#">Sách giấy</a></li>
        <li><a href="">Sách nói</a></li>
    </ul>
    <div class="space-h-24"></div>
    <div class="uk-child-width-1-5 uk-grid-medium" uk-grid>
        <?php
        $name = [
            'Marvin McKinney',
            'Kristin Watson',
            'Albert Flores',
            'Kristin Watson',
            'Theresa Webb',
            'Jacob Jones',
            'Ronald Richards',
            'Jerome Bell',
            'Kathryn Murphy',
            'Floyd Miles',
            'Albert Flores',
            'Leslie Alexander',
            'Marvin McKinney',
            'Kristin Watson',
            'Albert Flores',
        ];
        for ($i = 0; $i < count($name); $i++) { ?>
            <div class="uk-inline-clip uk-transition-toggle row-gap-30">
                <div class="uk-cover-container border-16">
                    <img class="uk-transition-scale-up uk-transition-opaque" src="about:blank" uk-img data-src="https://picsum.photos/280/430/?random=<?= $i ?>" alt="" uk-cover>
                    <canvas width="230" height="344"></canvas>
                    <span class="home__sachmoi__label uk-position-top-right fz-20 be-vietnam-pro-semibold" style="color: #fff;">-20<span class="fz-12">%</span></span>
                    <a href="chi_tiet_sach.php" class="uk-position-cover"></a>
                </div>
                <div class="item-15px">
                    <h6 class="fz-18 be-vietnam-pro-semibold uk-margin-remove line-height-133 uk-text-truncate"><a href="chi_tiet_sach.php" class="uk-link-toggle be-vietnam-pro-semibold"><?= $name[$i]; ?></a></h6>
                    <div class="item-8px">
                        <div class="uk-position-relative uk-text-nowrap uk-display-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                            </svg>
                            <div class="uk-position-center-left uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: <?= rand(0,99) ?>%">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item-8px fz-12 be-vietnam-pro-semibold" style="color: #999;">Nhà xuất bản Nhã Nam</div>
                    <div class="item-8px">
                        <span class="fz-18 be-vietnam-pro-semibold" style="color: #04C5BA;">170.000<span class="fz-16">đ</span></span>
                        <del class="fz-18 be-vietnam-pro-semibold" style="color: #999999; margin-left: 8px;">450.000<span class="fz-16">đ</span></del>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <!--/Tác phẩm (31)-->

    <div class="space-h-30"></div>
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
<div class="space-h-100"></div>
<div class="uk-container">
    <div class="uk-flex-middle uk-grid" uk-grid>
        <div class="uk-width-auto">
            <h2 class="common__title fz-36 be-vietnam-pro-semibold">Sách nổi bật</h2>
        </div>
        <div class="uk-width-expand">
            <div class="common__line"></div>
        </div>
        <div class="uk-width-auto">
            <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
        </div>
    </div>
</div>
<div class="space-h-60"></div>
<?php require "template-parts/layouts/slider-product-2.php"; ?>
<div class="space-h-100"></div>
    <nav id="chi_tiet_sach__navbar" class="chi_tiet_sach__navbar uk-navbar-container uk-position-fixed uk-position-bottom z-index-992">
        <div class="uk-container">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item min-height-103">
                        <div class="uk-grid uk-flex-middle uk-grid-16" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container uk-border-rounded">
                                    <img src="https://picsum.photos/60/83/?random=" alt="" uk-cover="">
                                    <canvas width="60" height="83"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="line-height-171 fz-16 sora-300" style="color: #444;">
                                    Bạn đang chọn : <span class="sora-400" style="color: #000;">The Girl and the Last Sleepover</span>
                                </div>
                                <div class="uk-flex-middle uk-grid uk-grid-8" uk-grid>
                                    <div>
                                        <div class="fz-14 sora-700" style="color: #0CB0A7;">179.000đ-379.000đ</div>
                                    </div>
                                    <div>
                                        <div class="uk-position-relative uk-text-nowrap uk-display-inline-block">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#999"/>
                                            </svg>
                                            <div class="uk-position-center-left uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: <?= rand(0,99) ?>%">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-navbar-right">
                    <div class="uk-navbar-item min-height-103">
                        <div class="uk-flex-middle uk-grid-20 uk-grid" uk-grid="">
                            <div class="uk-first-column">
                                <a href="" class="uk-link-toggle fz-16 be-vietnam-pro-semibold line-height-171 uk-flex-inline uk-flex-middle" style="gap: 9px; color: #000 !important;">
                                    Cho vào giỏ
                                    <span class="cuahang__icon cuahang__icon--cart"></span>
                                </a>
                            </div>
                            <div>
                                <a href="" style="color: #fff !important;" class="width-283px button--1 uk-button uk-button-primary uk-border-pill fz-16 be-vietnam-pro-semibold">
                                    MUA HÀNG
                                    <span class="cuahang__icon cuahang__icon--buy"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script>
        function myfunction(value) {
            const item = value.getBoundingClientRect();
            return (
                item.top >= 0 &&
                item.left >= 0 &&
                item.bottom <= (
                    window.innerHeight ||
                    document.documentElement.clientHeight) &&
                item.right <= (
                    window.innerWidth ||
                    document.documentElement.clientWidth)
            );
        }

        const elementToCheck = document.getElementById('div1');
        const elementToCheck2 = document.getElementById('chi_tiet_sach__navbar');

        window.addEventListener('scroll', () => {
            if (myfunction(elementToCheck)) {
                console.log('Element is visible in viewport');
                elementToCheck2.classList.remove('uk-open');
            } else {
                console.log('Element is not visible in viewport');
                elementToCheck2.classList.add('uk-open');
            }
        });
    </script>
<?php require "template-parts/layouts/footer.php"; ?>