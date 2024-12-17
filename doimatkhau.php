<?php $data["title"] = "Đổi mật khẩu"; ?>
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
                        <div class="uk-grid uk-grid-16 row-gap-20 uk-child-width-1-3 uk-form-stacked" uk-grid>
                            <div>
                                <label class="thongtintaikhoan__form__label uk-form-label fz-14 be-vietnam-pro-medium" for="form-stacked-pass">Mật khẩu</label>
                                <div class="uk-inline uk-width">
                                    <span class="dangnhap__form__icon uk-form-icon">
                                        <span class="icon24 icon24--lock"></span>
                                    </span>
                                    <input style="height: 48px;" id="form-stacked-pass" class="dangnhap__form__input uk-input border-16" type="password" value="123456hy" placeholder="" aria-label="">
                                </div>
                            </div>
                            <div>
                                <label class="thongtintaikhoan__form__label uk-form-label fz-14 be-vietnam-pro-medium" for="form-stacked-pass">Mật khẩu mới</label>
                                <div class="uk-form-controls">
                                    <div class="uk-inline uk-width">
                                        <span class="dangnhap__form__icon uk-form-icon">
                                            <span class="icon24 icon24--lock"></span>
                                        </span>
                                        <a class="dangnhap__form__icon uk-form-icon uk-form-icon-flip" href="#">
                                            <span class="icon24 icon24--eye"></span>
                                        </a>
                                        <input style="height: 48px;" id="form-stacked-password-eye-slash" class="dangnhap__form__input uk-input uk-border-pill" type="password" value="123456hy" placeholder="Nhập mật khẩu" aria-label="Nhập mật khẩu">
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <div></div>
                            <div>
                                <label class="thongtintaikhoan__form__label uk-form-label fz-14 be-vietnam-pro-medium" for="form-stacked-pass">Nhập lại mật khẩu</label>
                                <div class="uk-form-controls">
                                    <div class="uk-inline uk-width">
                                        <span class="dangnhap__form__icon uk-form-icon">
                                            <span class="icon24 icon24--lock"></span>
                                        </span>
                                        <a class="dangnhap__form__icon uk-form-icon uk-form-icon-flip" href="#">
                                            <span class="icon24 icon24--eye"></span>
                                        </a>
                                        <input style="height: 48px;" id="form-stacked-password-eye-slash" class="dangnhap__form__input uk-input uk-border-pill" type="password" value="123456hy" placeholder="Nhập mật khẩu" aria-label="Nhập mật khẩu">
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