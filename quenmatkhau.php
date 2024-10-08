<?php $data["title"] = "Quên mật khẩu"; ?>
<?php $isHome = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-height-viewport"></div>
<!-- This is the modal with the default close button -->
<div id="modal-close-forgotpass" uk-modal>
    <div class="uk-modal-dialog uk-card uk-card-body width-1024px border-10">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-child-width-1-2 uk-flex-middle" uk-grid>
            <div>
                <a href=""><img src="about:blank" data-src="images/Frame3.png" uk-img alt=""></a>
            </div>
            <div>
                <div class="uk-form-stacked uk-card uk-card-body uk-padding-remove-top uk-padding-remove-bottom">
                    <div class="uk-text-center">
                        <div class="line-height-126 fz-30 sora-600" style="color: #111827;">Quên Mật Khẩu</div>
                        <div class="item-8px fz-14 line-height-142" style="color: #4B5563;">Đừng lo lắng! Nhập địa chỉ email của bạn để chúng tôi đặt lại mật khẩu cho bạn.</div>
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
                                <input style="height: 48px;" id="form-stacked-email" class="dangnhap__form__input uk-input uk-border-pill" type="email" placeholder="Nhập địa chỉ email của bạn" aria-label="Nhập địa chỉ email của bạn">
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <img uk-img data-src="images/captcha.png" alt="">
                    </div>
                    <a href="" class="dangnhap__btn1 dangnhap__btn1--c2 uk-button uk-button-primary uk-border-pill uk-width uk-margin-top">
                        <span class="fz-16 be-vietnam-pro-semibold" style="color: #000;">Đặt lại mật khẩu</span>
                    </a>
                    <div class="uk-text-center fz-14 be-vietnam-pro-medium uk-margin-top" style="color: #6B6B6B;">Bạn đã có tài khoản? <a href="dangnhap.php" style="text-decoration: underline; color: #000;" class="be-vietnam-pro-semibold">Đăng nhập</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const element = document.getElementById("modal-close-forgotpass");
    UIkit.modal(element).show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>