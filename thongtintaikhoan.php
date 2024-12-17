<?php $data["title"] = "Thông tin tài khoản"; ?>
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
                                    <div class="fz-14 be-vietnam-pro-semibold" style="color: #000;">Thông tin tài khoản</div>
                                </div>
                            </div>
                            <div class="uk-navbar-right">
                                <div class="uk-navbar-item">
                                    <button class="thongtintaikhoan__btnSave uk-button uk-border-pill">Lưu thay đổi</button>
                                </div>
                            </div>
                        </nav>
                        <div class="divider"></div>
                        <div class="space-h-40"></div>
                        <div class="uk-grid uk-grid-16 uk-child-width-1-3 uk-form-stacked" uk-grid>
                            <div class="uk-width-1-1">
                                <div class="thongtintaikhoan__title">Thông tin cá nhân</div>
                            </div>
                            <div>
                                <label class="thongtintaikhoan__form__label uk-form-label fz-14 be-vietnam-pro-medium" for="form-stacked-name">Họ và tên</label>
                                <div class="uk-inline uk-width">
                                    <span class="dangnhap__form__icon uk-form-icon">
                                        <span class="icon24 icon24--user1"></span>
                                    </span>
                                    <input style="height: 48px;" id="form-stacked-name" class="dangnhap__form__input uk-input border-16" type="text" value="Nguyễn Trung Kiên" placeholder="" aria-label="">
                                </div>
                            </div>
                            <div>
                                <label class="thongtintaikhoan__form__label uk-form-label fz-14 be-vietnam-pro-medium" for="form-stacked-calendar">Ngày sinh</label>
                                <div class="uk-inline uk-width">
                                    <span class="dangnhap__form__icon uk-form-icon">
                                        <span class="icon24 icon24--calendar"></span>
                                    </span>
                                    <input style="height: 48px;" id="form-stacked-calendar" class="dangnhap__form__input uk-input border-16" type="text" value="Nguyễn Trung Kiên" placeholder="" aria-label="">
                                </div>
                            </div>
                            <div>
                                <label class="thongtintaikhoan__form__label uk-form-label fz-14 be-vietnam-pro-medium" for="form-stacked-sex">Giới tính</label>
                                <div class="uk-inline uk-width">
                                    <span class="dangnhap__form__icon uk-form-icon uk-position-z-index">
                                        <span class="icon24 icon24--sex"></span>
                                    </span>
                                    <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                        <select aria-label="Custom controls">
                                            <option value="1">Nam</option>
                                            <option value="2">Nữ</option>
                                        </select>
                                        <button class="uk-width uk-button border-16 uk-text-left uk-flex uk-flex-middle uk-flex-between" style="line-height: 48px;text-transform: inherit;padding-right: 22px;" type="button" tabindex="-1">
                                            <span class="text-4B5563 fz-14 be-vietnam-pro-semibold"></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-h-24"></div>
                        <div class="divider"></div>
                        <div class="space-h-24"></div>
                        <div class="uk-grid uk-grid-16 uk-child-width-1-3 uk-form-stacked" uk-grid>
                            <div class="uk-width-1-1">
                                <div class="thongtintaikhoan__title">Thông tin liên hệ</div>
                            </div>
                            <div>
                                <label class="thongtintaikhoan__form__label uk-form-label fz-14 be-vietnam-pro-medium" for="form-stacked-phone">Số điện thoại của bạn</label>
                                <div class="uk-inline uk-width">
                                    <span class="dangnhap__form__icon uk-form-icon">
                                        <span class="icon24 icon24--phone"></span>
                                    </span>
                                    <input style="height: 48px;" id="form-stacked-phone" class="dangnhap__form__input uk-input border-16" type="tel" value="" placeholder="+84" aria-label="">
                                </div>
                            </div>
                            <div>
                                <label class="thongtintaikhoan__form__label uk-form-label fz-14 be-vietnam-pro-medium" for="form-stacked-email">Email của bạn</label>
                                <div class="uk-inline uk-width">
                                    <span class="dangnhap__form__icon uk-form-icon">
                                        <span class="icon24 icon24--email1"></span>
                                    </span>
                                    <input style="height: 48px;" id="form-stacked-email" class="dangnhap__form__input uk-input border-16" type="email" value="thuvienso@gmail.com" placeholder="" aria-label="">
                                </div>
                            </div>
                        </div>
                        <div class="space-h-24"></div>
                        <div class="divider"></div>
                        <div class="space-h-24"></div>
                        <div class="uk-grid uk-grid-16 uk-child-width-1-3 uk-form-stacked" uk-grid>
                            <div class="uk-width-1-1">
                                <div class="thongtintaikhoan__title">Địa chỉ nhận hàng</div>
                            </div>
                            <div>
                                <label class="thongtintaikhoan__form__label uk-form-label fz-14 be-vietnam-pro-medium" for="form-stacked-sex">Tỉnh/ thành phố</label>
                                <div class="uk-inline uk-width">
                                    <span class="dangnhap__form__icon uk-form-icon uk-position-z-index">
                                        <span class="icon24 icon24--city"></span>
                                    </span>
                                    <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                        <select aria-label="Custom controls">
                                            <option value="1">Hà Nội</option>
                                        </select>
                                        <button class="uk-width uk-button border-16 uk-text-left uk-flex uk-flex-middle uk-flex-between" style="line-height: 48px;text-transform: inherit;padding-right: 22px;" type="button" tabindex="-1">
                                            <span class="text-4B5563 fz-14 be-vietnam-pro-semibold"></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="thongtintaikhoan__form__label uk-form-label fz-14 be-vietnam-pro-medium" for="form-stacked-sex">Quận huyện</label>
                                <div class="uk-inline uk-width">
                                    <span class="dangnhap__form__icon uk-form-icon uk-position-z-index">
                                        <span class="icon24 icon24--location"></span>
                                    </span>
                                    <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                        <select aria-label="Custom controls">
                                            <option value="1">Láng Hạ</option>
                                        </select>
                                        <button class="uk-width uk-button border-16 uk-text-left uk-flex uk-flex-middle uk-flex-between" style="line-height: 48px;text-transform: inherit;padding-right: 22px;" type="button" tabindex="-1">
                                            <span class="text-4B5563 fz-14 be-vietnam-pro-semibold"></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-2-3">
                                <label class="thongtintaikhoan__form__label uk-form-label fz-14 be-vietnam-pro-medium" for="form-stacked-calendar">Địa chỉ chi tiết</label>
                                <div class="uk-inline uk-width">
                                    <span class="dangnhap__form__icon uk-form-icon">
                                        <span class="icon24 icon24--address"></span>
                                    </span>
                                    <input style="height: 48px;" id="form-stacked-calendar" class="dangnhap__form__input uk-input border-16" type="text" value="35 Tô Vĩnh Diện" placeholder="" aria-label="">
                                </div>
                            </div>
                        </div>
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