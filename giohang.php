<?php $data["title"] = "Giỏ hàng"; ?>
<?php $isHome = false; ?>
<?php $isLogin = true; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <div class="space-h-30"></div>
    <nav class="" aria-label="Breadcrumb">
        <ul class="breadcrumb uk-breadcrumb uk-margin-remove">
            <li><a href=".">Trang chủ</a></li>
            <li><span aria-current="page">Giỏ hàng</span></li>
        </ul>
    </nav>
    <div class="space-h-30"></div>
    <div class="uk-grid uk-grid-medium" uk-grid>
        <div class="uk-width-expand">
            <div class="sachdamua__card">
                <nav class="sachdamua__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item" style="gap: 12px">
                            <div class="icon24 icon24--thongtintaikhoain"></div>
                            <div class="fz-14 be-vietnam-pro-semibold" style="color: #000;">Danh sách sản phẩm</div>
                        </div>
                    </div>
                    <div class="uk-navbar-right">

                    </div>
                </nav>
                <div class="divider"></div>
                <div class="space-h-16"></div>
                <div class="giohang__list">
                    <?php for ($i = 0; $i < 2; $i++) { ?>
                        <div class="giohang__item">
                            <div class="uk-grid uk-grid-16" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container border-6">
                                        <img class="uk-transition-scale-up uk-transition-opaque" src="about:blank" uk-img data-src="https://picsum.photos/280/430/?random=<?= $i ?>" alt="" uk-cover>
                                        <canvas width="123" height="187"></canvas>
                                        <span class="giohang__label uk-position-top-right fz-12 be-vietnam-pro-semibold" style="color: #fff;">-20<span class="fz-12">%</span></span>
                                        <a href="chi_tiet_sach.php" class="uk-position-cover"></a>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h4 class="fz-16 be-vietnam-pro-semibold uk-margin-remove"><a href="" class="uk-link-toggle">Guy Hawkins</a></h4>
                                    <div class="">
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
                                    <div class="item-8px fz-12 be-vietnam-pro-semibold" style="color: #999;">NXB Nhã Nam</div>
                                    <div class="space-h-16"></div>
                                    <div style="padding: 13px 18px;" class="border-8 uk-background-muted uk-padding-small">
                                        <div class="uk-grid uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <div class="uk-grid uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div>
                                                        <span class="cuahang__icon cuahang__icon--sachdientu"></span>
                                                    </div>
                                                    <div>
                                                        <div class="uk-text-uppercase fz-12 be-vietnam-pro-medium" style="color: #000;">Sách Điện tử</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-auto">
                                                <div class="uk-grid uk-grid-50 uk-flex-middle" uk-grid>
                                                    <div>
                                                        <div class="uk-inline">
                                                            <button class="chi_tiet_sach__btnDropnav uk-button uk-button-small uk-button-default uk-border-pill" type="button">
                                                                <span>1 Tháng</span>
                                                                <span uk-drop-parent-icon></span>
                                                            </button>
                                                            <div class="uk-card uk-card-default" uk-drop="mode: click">
                                                                <ul class="uk-nav uk-dropdown-nav">
                                                                    <li><label><input class="uk-radio" type="radio" name="radio2"> 1 Tháng</label></li>
                                                                    <li><label><input class="uk-radio" type="radio" name="radio2"> 3 Tháng</label></li>
                                                                    <li><label><input class="uk-radio" type="radio" name="radio2"> 6 Tháng</label></li>
                                                                    <li><label><input class="uk-radio" type="radio" name="radio2"> Vĩnh viễn</label></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-grid uk-flex-middle" uk-grid>
                                                            <div>
                                                                <div class="fz-12 be-vietnam-pro-bold" style="color: #000;">379.000đ</div>
                                                                <div class="fz-12 be-vietnam-pro-regular" style="color: #777;"><del>279.000đ</del></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-auto">
                                    <ul class="uk-iconnav">
                                        <li><a href="" uk-icon="icon: trash"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="uk-width-auto">
            <div class="sachdamua__card uk-width-medium" uk-sticky="offset: 72;start: 1;end: !.uk-grid;">
                <nav class="sachdamua__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item" style="gap: 12px">
                            <div class="icon24 icon24--thongtintaikhoain"></div>
                            <div class="fz-14 be-vietnam-pro-semibold" style="color: #000;">Thông tin đơn hàng</div>
                        </div>
                    </div>
                    <div class="uk-navbar-right">

                    </div>
                </nav>
                <div class="divider"></div>
                <div class="space-h-16"></div>
                <div class="uk-grid uk-flex-middle" uk-grid>
                    <div class="uk-width-expand"><div class="fz-12 be-vietnam-pro-semibold text-000">Tạm tính</div></div>
                    <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-semibold text-000">120.000 VNĐ</div></div>
                </div>
                <div class="space-h-12"></div>
                <div class="uk-grid uk-flex-middle" uk-grid>
                    <div class="uk-width-expand"><div class="fz-12 be-vietnam-pro-semibold text-000">Giảm giá</div></div>
                    <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-semibold text-000">0</div></div>
                </div>
                <div class="space-h-12"></div>
                <div class="uk-grid uk-flex-middle" uk-grid>
                    <div class="uk-width-expand"><div class="fz-12 be-vietnam-pro-semibold text-000">Phí vận chuyển</div></div>
                    <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-semibold text-000">0</div></div>
                </div>
                <div class="space-h-16"></div>
                <div class="uk-text-center fz-12 be-vietnam-pro-regular text-999 line-height-150">Phí ship tính theo đơn (không giới hạn số lượng sách) đồng giá miền Bắc 20k, miền Trung 25k, miền Nam 35k</div>
                <div class="space-h-16"></div>
                <div class="divider"></div>
                <div class="space-h-16"></div>
                <div style="padding: 0 10px">
                    <div class="uk-grid uk-flex-middle" uk-grid>
                        <div class="uk-width-expand"><div class="fz-12 be-vietnam-pro-semibold text-000">Thành tiền</div></div>
                        <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-semibold text-000">120.000 VNĐ</div></div>
                    </div>
                </div>
                <div class="space-h-16"></div>
                <div class="divider"></div>
                <div class="space-h-16"></div>
                <div class="uk-text-center fz-12 be-vietnam-pro-regular text-999 line-height-150">
                    Bằng việc nhấn thanh toán,
                    bạn đồng ý với <a href="" class="be-vietnam-pro-bold text-0CB0A7" style="text-decoration-line: underline;">Các điều khoản khách hàng</a>
                    của Nhà xuất bản Xây dựng
                </div>
                <div class="space-h-16"></div>
                <div class="uk-text-center">
                    <a href="chonphuongthucthanhtoan.php" class="thongtintaikhoan__btnSave uk-button uk-border-pill">Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-h-100"></div>
<?php require "template-parts/layouts/footer.php"; ?>