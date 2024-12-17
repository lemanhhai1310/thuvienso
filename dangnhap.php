<?php $data["title"] = "Đăng nhập"; ?>
<?php $isHome = false; ?>
<?php $isLogin = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-height-viewport"></div>
<!-- This is the modal with the default close button -->
<div id="modal-close-login" uk-modal>
    <div class="uk-modal-dialog uk-card uk-card-body width-1024px border-10">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-child-width-1-2 uk-flex-middle" uk-grid>
            <div>
                <a href=""><img src="about:blank" data-src="images/Frame3.png" uk-img alt=""></a>
            </div>
            <div>
                <div class="uk-form-stacked uk-card uk-card-body uk-padding-remove-top uk-padding-remove-bottom">
                    <div class="uk-text-center">
                        <div class="line-height-126 fz-30 sora-600" style="color: #111827;">Chào quý độc giả</div>
                        <div class="item-8px fz-14 line-height-142" style="color: #4B5563;">Chào mừng tới Thư viện số</div>
                    </div>
                    <div class="space-h-12"></div>
                    <div class="divider"></div>
                    <div class="space-h-24"></div>
                    <div class="uk-margin-bottom">
                        <label class="uk-form-label fz-14 be-vietnam-pro-medium" style="color: #4B5563;" for="form-stacked-email">Email <sup class="uk-text-danger">*</sup></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width">
                                <span class="dangnhap__form__icon uk-form-icon">
                                    <span class="icon24 icon24--email"></span>
                                </span>
                                <input style="height: 48px;" id="form-stacked-email" class="dangnhap__form__input uk-input uk-border-pill" type="email" placeholder="Nhập Email" aria-label="Nhập Email">
                            </div>
                            <div class="item-6px fz-14 be-vietnam-pro-regular" style="color: #D83A40;">Vui lòng nhập email hoặc tên đăng nhập</div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label fz-14 be-vietnam-pro-medium" style="color: #4B5563;" for="form-stacked-password">Mật khẩu <sup class="uk-text-danger">*</sup></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width">
                                <span class="dangnhap__form__icon uk-form-icon">
                                    <span class="icon24 icon24--lock"></span>
                                </span>
                                <a class="dangnhap__form__icon uk-form-icon uk-form-icon-flip" href="#">
                                    <span class="icon24 icon24--eye"></span>
                                </a>
                                <input style="height: 48px;" id="form-stacked-password" class="dangnhap__form__input uk-input uk-border-pill" type="password" placeholder="Nhập mật khẩu" aria-label="Nhập mật khẩu">
                            </div>
                            <div class="item-6px fz-14 be-vietnam-pro-regular" style="color: #D83A40;">Vui lòng nhập mật khẩu</div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label fz-14 be-vietnam-pro-medium" style="color: #4B5563;" for="form-stacked-password-eye-slash">Mật khẩu <sup class="uk-text-danger">*</sup></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width">
                                <span class="dangnhap__form__icon uk-form-icon">
                                    <span class="icon24 icon24--lock"></span>
                                </span>
                                <a class="dangnhap__form__icon uk-form-icon uk-form-icon-flip" href="#">
                                    <span class="icon24 icon24--eye-slash"></span>
                                </a>
                                <input style="height: 48px;" id="form-stacked-password-eye-slash" class="dangnhap__form__input uk-input uk-border-pill" type="text" placeholder="Nhập mật khẩu" aria-label="Nhập mật khẩu">
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <label class="dangnhap__form__checkLabel"><input class="uk-checkbox" type="checkbox" checked> <span class="fz-14 be-vietnam-pro-medium" style="color: #6B6B6B;">Ghi nhớ tôi</span></label>
                        </div>
                        <div class="uk-width-auto">
                            <div class="uk-text-center fz-14 be-vietnam-pro-medium" style="color: #6B6B6B;"><a href="quenmatkhau.php" style="text-decoration: underline; color: #000;" class="be-vietnam-pro-semibold">Quên mật khẩu</a></div>
                        </div>
                    </div>
                    <a href="dadangnhap.php" class="dangnhap__btn1 dangnhap__btn1--c2 uk-button uk-button-primary uk-border-pill uk-width uk-margin-top">
                        <span class="fz-16 be-vietnam-pro-semibold" style="color: #fff;">Đăng nhập</span>
                    </a>
                    <div class="space-h-12"></div>
                    <div class="uk-grid uk-flex-middle uk-grid-12" uk-grid>
                        <div class="uk-width-expand">
                            <div class="divider"></div>
                        </div>
                        <div class="uk-width-auto">
                            <span class="fz-14 be-vietnam-pro-medium" style="color: #6B6B6B;">Hoặc</span>
                        </div>
                        <div class="uk-width-expand">
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="space-h-12"></div>
                    <a href="" class="dangnhap__btn1 dangnhap__btn1--c1 uk-button uk-button-primary uk-border-pill uk-width">
                        <span class="icon20 icon20--google"></span>
                        <span class="fz-16 be-vietnam-pro-semibold" style="color: #000;">Đăng nhập với Google</span>
                    </a>
                    <div class="space-h-12"></div>
                    <a href="" class="dangnhap__btn1 dangnhap__btn1--c1 uk-button uk-button-primary uk-border-pill uk-width">
                        <span class="icon20 icon20--facebook"></span>
                        <span class="fz-16 be-vietnam-pro-semibold" style="color: #000;">Đăng nhập với Facebook</span>
                    </a>
                    <div class="uk-text-center fz-14 be-vietnam-pro-medium uk-margin-top" style="color: #6B6B6B;">Bạn chưa có tài khoản? <a href="dangky.php" style="text-decoration: underline; color: #000;" class="be-vietnam-pro-semibold">Đăng ký</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const element = document.getElementById("modal-close-login");
    UIkit.modal(element).show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>