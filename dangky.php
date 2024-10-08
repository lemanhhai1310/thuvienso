<?php $data["title"] = "Đăng ký"; ?>
<?php $isHome = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-height-viewport"></div>
<!-- This is the modal with the default close button -->
<div id="modal-close-register" uk-modal>
    <div class="uk-modal-dialog uk-card uk-card-body width-1024px border-10">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-child-width-1-2 uk-flex-middle" uk-grid>
            <div>
                <a href=""><img src="about:blank" data-src="images/Frame3.png" uk-img alt=""></a>
            </div>
            <div>
                <div class="uk-form-stacked uk-card uk-card-body uk-padding-remove-top uk-padding-remove-bottom">
                    <div class="uk-text-center">
                        <div class="line-height-126 fz-30 sora-600" style="color: #111827;">Đăng ký tài khoản</div>
                        <div class="item-8px fz-14 line-height-142" style="color: #4B5563;">Chào mừng tới Thư viện số</div>
                    </div>
                    <div class="space-h-12"></div>
                    <div class="divider"></div>
                    <div class="space-h-24"></div>
                    <div class="uk-margin-bottom">
                        <label class="uk-form-label fz-14 be-vietnam-pro-medium" style="color: #4B5563;" for="form-stacked-email">Họ và tên <sup class="uk-text-danger">*</sup></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width">
                                <span class="dangnhap__form__icon uk-form-icon">
                                    <span class="icon24 icon24--user"></span>
                                </span>
                                <input style="height: 48px;" id="form-stacked-email" class="dangnhap__form__input uk-input uk-border-pill" type="text" placeholder="Nguyen Van A" aria-label="Nguyen Van A">
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label fz-14 be-vietnam-pro-medium" style="color: #4B5563;" for="form-stacked-email">Email <sup class="uk-text-danger">*</sup></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width">
                                <span class="dangnhap__form__icon uk-form-icon">
                                    <span class="icon24 icon24--emailR"></span>
                                </span>
                                <input style="height: 48px;" id="form-stacked-email" class="dangnhap__form__input uk-input uk-border-pill" type="email" placeholder="Nhập Email" aria-label="Nhập Email">
                            </div>
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
                                <input style="height: 48px;" id="form-stacked-password" class="dangnhap__form__input uk-input uk-border-pill" type="password" placeholder="Mật khẩu" aria-label="Mật khẩu">
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label fz-14 be-vietnam-pro-medium" style="color: #4B5563;" for="form-stacked-password-eye-slash">Nhập lại mật khẩu <sup class="uk-text-danger">*</sup></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width">
                                <span class="dangnhap__form__icon uk-form-icon">
                                    <span class="icon24 icon24--lock"></span>
                                </span>
                                <a class="dangnhap__form__icon uk-form-icon uk-form-icon-flip" href="#">
                                    <span class="icon24 icon24--eye-slash"></span>
                                </a>
                                <input style="height: 48px;" id="form-stacked-password-eye-slash" class="dangnhap__form__input uk-input uk-border-pill" type="text" placeholder="" aria-label="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <label class="dangnhap__form__checkLabel">
                                <input class="uk-checkbox" type="checkbox" checked>
                                <span class="fz-14 be-vietnam-pro-medium" style="color: #6B6B6B;">
                                    Tôi đồng ý với các <a href="" style="text-decoration-line: underline;color: #000;" class="be-vietnam-pro-semibold">Điều khoản sử dụng</a> và <a href="" style="text-decoration-line: underline;color: #000;" class="be-vietnam-pro-semibold">Chính sách bảo mật</a>
                                </span>
                            </label>
                        </div>
                    </div>
                    <a href="" class="dangnhap__btn1 dangnhap__btn1--c2 uk-button uk-button-primary uk-border-pill uk-width uk-margin-top">
                        <span class="fz-16 be-vietnam-pro-semibold" style="color: #000;">Đăng ký</span>
                    </a>
                    <div class="uk-text-center fz-14 be-vietnam-pro-medium uk-margin-top" style="color: #6B6B6B;">Bạn đã có tài khoản? <a href="dangnhap.php" style="text-decoration: underline; color: #000;" class="be-vietnam-pro-semibold">Đăng nhập</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const element = document.getElementById("modal-close-register");
    UIkit.modal(element).show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>