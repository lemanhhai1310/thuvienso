<?php $data["title"] = "Lịch sử nạp tiền"; ?>
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
                                    <div class="fz-14 be-vietnam-pro-semibold" style="color: #000;">Lịch sử nạp tiền</div>
                                </div>
                            </div>
                            <div class="uk-navbar-right">
                                <div class="uk-navbar-item gap-24">
                                    <div>
                                        <div class="uk-flex uk-flex-middle uk-link-text gap-8 cursor-pointer">
                                            <div class="icon24 icon24--calendar"></div>
                                            <div class="fz-12 be-vietnam-pro-semibold line-height-200 text-000">Tất cả khoảng thời gian</div>
                                        </div>
                                        <div class="sachdamua__dropdown" uk-dropdown="mode: click; pos: bottom-right">
                                            <ul class="uk-nav uk-dropdown-nav">
                                                <li class="uk-active"><a href="#">Tất cả khoảng thời gian</a></li>
                                                <li><a href="#">7 ngày trước</a></li>
                                                <li><a href="#">30 ngày trước</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="divider-vertical-20"></div>
                                    <div>
                                        <div class="uk-flex uk-flex-middle uk-link-text gap-8 cursor-pointer">
                                            <div class="icon24 icon24--sort-arrow-down"></div>
                                            <div class="fz-12 be-vietnam-pro-semibold line-height-200 text-000">Mới nhất</div>
                                        </div>
                                        <div class="sachdamua__dropdown" uk-dropdown="mode: click; pos: bottom-right">
                                            <ul class="uk-nav uk-dropdown-nav">
                                                <li class="uk-active"><a href="#">Mới nhất</a></li>
                                                <li><a href="#">Cũ nhất</a></li>
                                                <div class="divider" style="margin-left: 15px;margin-right: 15px;"></div>
                                                <li><a href="#"><span class="text-00A3FF">Đang giao</span></a></li>
                                                <li><a href="#"><span class="text-F1416C">Chờ giao</span></a></li>
                                                <li><a href="#"><span class="text-F19541">Chờ xử lý</span></a></li>
                                                <li><a href="#"><span class="text-50CD89">Hoàn thành</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <div class="divider"></div>
                        <div class="space-h-40"></div>
                        <div>
                            <table class="lichsumuahang__table uk-table uk-table-hover uk-table-divider uk-margin-remove-bottom">
                                <thead>
                                <tr>
                                    <th class="uk-padding-remove-left">STT</th>
                                    <th>Mã giao dịch</th>
                                    <th>Thông tin giao dịch</th>
                                    <th class="uk-text-center">Trạng thái</th>
                                    <th>Ví chính</th>
                                    <th>Ví khuyến mãi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i = 0; $i < 10; $i++) { ?>
                                    <tr>
                                        <td class="text-7E8299"><?= $i+1; ?></td>
                                        <td class="text-7E8299">423344</td>
                                        <td class="text-3F4254">Nạp tiền </td>
                                        <td class="uk-text-center">
                                            <?php if ($i==0): ?>
                                                <div class="lichsumuahang__label lichsumuahang__label--danggiao">Đang giao</div>
                                            <?php elseif ($i==1): ?>
                                                <div class="lichsumuahang__label lichsumuahang__label--chogiao">Chờ giao</div>
                                            <?php elseif ($i==2): ?>
                                                <div class="lichsumuahang__label lichsumuahang__label--choxuly">Chờ xử lý</div>
                                            <?php else: ?>
                                                <div class="lichsumuahang__label lichsumuahang__label--hoanthanh">Hoàn thành</div>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-3F4254">400.000đ</td>
                                        <td class="text-3F4254">400.000đ</td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
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