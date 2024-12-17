<?php $data["title"] = "Sách đã mua"; ?>
<?php $isHome = false; ?>
<?php $isLogin = true; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <div class="space-h-40"></div>
    <nav class="" aria-label="Breadcrumb">
        <ul class="breadcrumb uk-breadcrumb uk-margin-remove">
            <li><a href=".">Trang chủ</a></li>
            <li><span aria-current="page">Thông tin tài khoản</span></li>
        </ul>
    </nav>
    <div class="space-h-30"></div>
    <div class="uk-grid uk-grid-medium" uk-grid>
        <div class="uk-width-auto">
            <?php require "template-parts/layouts/sidebar-left.php"; ?>
        </div>
        <div class="uk-width-expand">
            <div class="uk-child-width-1-2 uk-grid-24 uk-grid uk-grid-match" uk-grid>
                <div class="row-gap-50">
                    <div class="sachdamua__card">
                        <nav class="sachdamua__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                            <div class="uk-navbar-left">
                                <div class="uk-navbar-item" style="gap: 12px">
                                    <div class="icon24 icon24--soducoin"></div>
                                    <div class="fz-14 be-vietnam-pro-semibold" style="color: #000;">Số dư Book Coin</div>
                                </div>
                            </div>
                            <div class="uk-navbar-right">
                                <div class="uk-navbar-item">
                                    <a href="" class="sachdamua__btn uk-button uk-button-primary uk-border-pill" style="padding-right: 17px;gap: 12px">
                                        <span class="fz-16 be-vietnam-pro-semibold" style="color: #fff;">Nạp thêm</span>
                                        <span class="icon24 icon24--plus"></span>
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <div class="divider"></div>
                        <div class="be-vietnam-pro-semibold fz-18 item-16px" style="color: #966412;">580.450 <span class="fz-16">Coin</span></div>
                    </div>
                </div>
                <div class="row-gap-50">
                    <div class="sachdamua__card">
                        <nav class="sachdamua__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                            <div class="uk-navbar-left">
                                <div class="uk-navbar-item" style="gap: 12px">
                                    <div class="icon24 icon24--soducoinkm"></div>
                                    <div class="fz-14 be-vietnam-pro-semibold" style="color: #000;">Số dư Book Coin khuyến mãi</div>
                                </div>
                            </div>
                            <div class="uk-navbar-right">
                                <div class="uk-navbar-item">
                                    <div class="fz-14 be-vietnam-pro-semibold" style="color: #4B5563;">(Giới hạn)</div>
                                </div>
                            </div>
                        </nav>
                        <div class="divider"></div>
                        <div class="be-vietnam-pro-semibold fz-18 item-16px" style="color: #966412;">860.450 <span class="fz-16">Coin</span></div>
                    </div>
                </div>
                <div class="row-gap-50 uk-width-1-1">
                    <div class="sachdamua__card">
                        <nav class="sachdamua__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                            <div class="uk-navbar-left">
                                <div class="uk-navbar-item" style="gap: 12px">
                                    <div class="icon24 icon24--thongtintaikhoain"></div>
                                    <div class="fz-14 be-vietnam-pro-semibold" style="color: #000;">Sách đã mua</div>
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
                                            <div class="fz-12 be-vietnam-pro-semibold line-height-200 text-000">Phân loại sách</div>
                                        </div>
                                        <div class="sachdamua__dropdown" uk-dropdown="mode: click; pos: bottom-right">
                                            <ul class="uk-nav uk-dropdown-nav">
                                                <li class="uk-active"><a href="#">Active</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="divider-vertical-20"></div>
                                    <div>
                                        <div class="uk-flex uk-flex-middle uk-link-text gap-8 cursor-pointer">
                                            <div class="icon24 icon24--sort-arrow-down"></div>
                                            <div class="fz-12 be-vietnam-pro-semibold line-height-200 text-000">Tình trạng đọc</div>
                                        </div>
                                        <div class="sachdamua__dropdown" uk-dropdown="mode: click; pos: bottom-right">
                                            <ul class="uk-nav uk-dropdown-nav">
                                                <li class="uk-active"><a href="#">Mới nhất</a></li>
                                                <li><a href="#">Cũ nhất</a></li>
                                                <li><a href="#">Item</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <div class="divider"></div>
                        <div class="space-h-40"></div>
                        <div class="uk-child-width-1-4 uk-grid-24" uk-grid>
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
                            ];
                            for ($i = 0; $i < count($name); $i++) { ?>
                                <div class="uk-inline-clip uk-transition-toggle row-gap-40">
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
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="space-h-40"></div>
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
        </div>
    </div>
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
<?php require "template-parts/layouts/footer.php"; ?>