<?php $data["title"] = "Thông tin chuyển khoản"; ?>
<?php $isHome = false; ?>
<?php $isLogin = true; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <div class="space-h-30"></div>
    <nav class="" aria-label="Breadcrumb">
        <ul class="breadcrumb uk-breadcrumb uk-margin-remove">
            <li><a href=".">Trang chủ</a></li>
            <li><span aria-current="page">Thanh toán</span></li>
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
                            <div class="fz-14 be-vietnam-pro-semibold" style="color: #000;">Thông tin chuyển khoản</div>
                        </div>
                    </div>
                    <div class="uk-navbar-right">

                    </div>
                </nav>
                <div class="divider"></div>
                <div class="space-h-40"></div>
                <div class="uk-child-width-1-2 uk-grid-24 uk-flex-middle" uk-grid>
                    <div>
                        <figure class="uk-text-center">
                            <img data-src="images/image6321-qr.png" uk-img alt="">
                            <figcaption class="text-999 fz-12 item-16px">
                                Để thanh toán bằng QR-code, quý khách cần sử dụng một ứng dụng Ngân hàng bất kỳ để thanh toán nhanh hơn hoặc chuyển khoản chính xác các thông tin phía dưới:
                            </figcaption>
                        </figure>
                    </div>
                    <div>
                        <div class="thongtinchuyenkhoan__box border-10 background-FFF4D6 uk-text-center">
                            <div class="fz-14 be-vietnam-pro-medium text-966412">Nội dung chuyển khoản vui lòng điền dãy kí tự:</div>
                            <div class="space-h-16"></div>
                            <div class="thongtinchuyenkhoan__box1 background-fff border-16">
                                <div class="uk-grid-24 uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="thongtinchuyenkhoan__randomText uk-flex uk-flex-middle uk-flex-between">
                                            <span>1</span>
                                            <span>r</span>
                                            <span>3</span>
                                            <span>B</span>
                                            <span>H</span>
                                            <span>8</span>
                                            <span>w</span>
                                            <span>s</span>
                                            <span>k</span>
                                            <span>5</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <a href="" class="icon24 icon24--copy" uk-tooltip="Copy"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-24px fz-12 text-966412">
                                Lưu ý: “<strong class="be-vietnam-pro-bold">NỘI DUNG CHUYỂN KHOẢN</strong>” và “<strong class="be-vietnam-pro-bold">SỐ TIỀN CHUYỂN KHOẢN</strong>” cần nhập chính xác để đơn hàng được kích hoạt tự động.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-h-40"></div>
                <table class="chi_tiet_sach__table uk-table uk-table-striped uk-table-hover uk-margin-remove">
                    <tbody>
                    <?php
                    $data = [
                        [
                            'icon' => 'icon20--home',
                            'label' => 'Ngân hàng:',
                            'value' => 'Ngân hàng Thương mại Cổ phần Quân Đội',
                            'copy' => false,
                        ],
                        [
                            'icon' => 'icon20--time',
                            'label' => 'Chi nhánh:',
                            'value' => 'Lãn Ông',
                            'copy' => false,
                        ],
                        [
                            'icon' => 'icon20--size',
                            'label' => 'Số tài khoản:',
                            'value' => '0601119779999',
                            'copy' => true,
                        ],
                        [
                            'icon' => 'icon20--country',
                            'label' => 'Chủ tài khoản:',
                            'value' => 'Nhà Xuất Bản Xây Dựng',
                            'copy' => false,
                        ],
                        [
                            'icon' => 'icon20--size',
                            'label' => 'Nội dung:',
                            'value' => '1r3BH8wsqk5',
                            'copy' => true,
                        ],
                    ];
                    $num = 0;
                    foreach ($data as $k=>$v): ?>
                    <tr>
                        <td class="uk-width-1-2">
                            <div class="uk-flex-middle uk-grid-small uk-grid" uk-grid>
                                <div>
                                    <div class="width-140px uk-flex uk-flex-middle" style="padding: 10px 10px;gap: 12px;">
                                        <div class="icon20 <?= $v['icon'] ?>"></div>
                                        <div class="fz-14 be-vietnam-pro-medium" style="color: #6B6B6B;"><?= $v['label'] ?></div>
                                    </div>
                                </div>
                                <div>
                                    <?php if ($v['copy']): ?>
                                        <div class="uk-flex-middle uk-grid-20" uk-grid>
                                            <div>
                                                <div class="fz-14 be-vietnam-pro-medium" style="color: #000;"><?= $v['value'] ?></div>
                                            </div>
                                            <div>
                                                <a href="" class="icon24 icon24--copy" uk-tooltip="Copy"></a>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="fz-14 be-vietnam-pro-medium" style="color: #000;"><?= $v['value'] ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php $num++; endforeach; ?>
                    </tbody>
                </table>
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
                    <div class="uk-width-expand"><div class="fz-12 be-vietnam-pro-semibold text-000">Mã đơn hàng</div></div>
                    <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-semibold text-000">#240929232314636</div></div>
                </div>
                <div class="space-h-12"></div>
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
                    <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-semibold text-000">20.000 VNĐ</div></div>
                </div>
                <div class="space-h-16"></div>
                <div class="uk-text-center fz-12 be-vietnam-pro-regular text-999 line-height-150">Phí ship tính theo đơn (không giới hạn số lượng sách) đồng giá miền Bắc 20k, miền Trung 25k, miền Nam 35k</div>
                <div class="space-h-16"></div>
                <div class="divider"></div>
                <div class="space-h-16"></div>
                <div style="padding: 0 10px">
                    <div class="uk-grid uk-flex-middle" uk-grid>
                        <div class="uk-width-expand"><div class="fz-12 be-vietnam-pro-semibold text-000">Tổng thanh toán:</div></div>
                        <div class="uk-width-auto"><div class="fz-12 be-vietnam-pro-semibold text-000">140.000 VNĐ</div></div>
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
                    <button class="thongtintaikhoan__btnSave uk-button uk-border-pill uk-width">Xác nhận đã chuyển khoản</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-h-100"></div>
<?php require "template-parts/layouts/footer.php"; ?>