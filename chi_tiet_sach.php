<?php $data["title"] = "Chi tiết sách R3"; ?>
<?php $isHome = false; ?>
<?php $isLogin = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <div class="space-h-20"></div>
    <nav class="" aria-label="Breadcrumb">
        <ul class="breadcrumb uk-breadcrumb uk-margin-remove">
            <li><a href=".">Trang chủ</a></li>
            <li><a href="cuahang.php">Hành động & phiêu lưu</a></li>
            <li><span aria-current="page">The Girl and the Last Sleepover</span></li>
        </ul>
    </nav>
    <div class="space-h-60"></div>
    <div class="uk-grid" uk-grid>
        <div class="uk-width-auto">
            <div class="width-452px">
                <?php $count=8; ?>
                <div class="slider-for">

                </div>
                <div class="slider-nav">

                </div>
                <script>

                </script>
                <div class="uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 452:647; animation: fade">

                    <div class="uk-position-relative">
                        <div class="uk-slideshow-items">
                            <?php for ($i = 0; $i < $count; $i++) { ?>
                                <div>
                                    <img class="border-20" src="about:blank" uk-img data-src="https://picsum.photos/452/647/?random=<?= $i ?>" alt="" uk-cover>
                                </div>
                            <?php } ?>
                        </div>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>
                    </div>

                    <div class="uk-position-relative uk-margin-small-top uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                        <ul class="uk-thumbnav uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-10 uk-grid" uk-grid>
                            <?php for ($i = 0; $i < $count; $i++) { ?>
                                <li uk-slideshow-item="<?= $i ?>">
                                    <div class="uk-cover-container border-10">
                                        <img src="about:blank" uk-img data-src="https://picsum.photos/452/647/?random=<?= $i ?>" alt="" uk-cover="">
                                        <canvas width="452" height="647"></canvas>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

                    </div>

                </div>
            </div>
        </div>
        <div class="uk-width-expand">
            <div uk-sticky="offset: 72;start: 1;end: !.uk-grid;">
                <div class="uk-flex-middle uk-grid" uk-grid>
                    <div class="uk-width-expand">
                        <label class="chi_tiet_sach__label fz-12 sora-300 uk-label uk-label-success border-8">Sẵn hàng</label>
                    </div>
                    <div class="uk-width-auto">
                        <div class="uk-flex-middle uk-grid-20 uk-grid" uk-grid>
                            <div>
                                <a href="" class="chi_tiet_sach__link1 fz-12 uk-link-toggle uk-flex uk-flex-middle uk-text-uppercase be-vietnam-pro-regular" style="gap: 4px;">
                                    <span class="cuahang__icon cuahang__icon--prev"></span>
                                    Quay lại
                                </a>
                            </div>
                            <div>
                                <a href="" class="chi_tiet_sach__link1 fz-12 uk-link-toggle uk-flex uk-flex-middle uk-text-uppercase be-vietnam-pro-regular" style="gap: 4px;">
                                    Tiếp
                                    <span class="cuahang__icon cuahang__icon--next"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-h-9"></div>
                <h1 class="fz-36 sora-600 line-height-122 uk-margin-remove">The Girl and the Last Sleepover</h1>
                <div class="space-h-9"></div>
                <div class="uk-grid-divider uk-grid-small uk-flex-middle" uk-grid>
                    <div>
                        <div class="be-vietnam-pro-medium fz-12" style="color: #999;">Author: <span style="color: #000;">Suzanne Casey</span></div>
                    </div>
                    <div>
                        <div class="uk-grid uk-flex-middle uk-grid-10" uk-grid>
                            <div>
                                <div class="uk-flex uk-flex-middle" style="gap: 2px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <g clip-path="url(#clip0_2209_13567)">
                                            <path d="M6.16992 0L7.51701 4.1459H11.8763L8.34955 6.7082L9.69663 10.8541L6.16992 8.2918L2.64321 10.8541L3.99029 6.7082L0.463583 4.1459H4.82284L6.16992 0Z" fill="#FFCC00"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2209_13567">
                                                <rect width="12" height="12" fill="white" transform="translate(0.169922)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <g clip-path="url(#clip0_2209_13567)">
                                            <path d="M6.16992 0L7.51701 4.1459H11.8763L8.34955 6.7082L9.69663 10.8541L6.16992 8.2918L2.64321 10.8541L3.99029 6.7082L0.463583 4.1459H4.82284L6.16992 0Z" fill="#FFCC00"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2209_13567">
                                                <rect width="12" height="12" fill="white" transform="translate(0.169922)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <g clip-path="url(#clip0_2209_13567)">
                                            <path d="M6.16992 0L7.51701 4.1459H11.8763L8.34955 6.7082L9.69663 10.8541L6.16992 8.2918L2.64321 10.8541L3.99029 6.7082L0.463583 4.1459H4.82284L6.16992 0Z" fill="#FFCC00"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2209_13567">
                                                <rect width="12" height="12" fill="white" transform="translate(0.169922)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <g clip-path="url(#clip0_2209_13567)">
                                            <path d="M6.16992 0L7.51701 4.1459H11.8763L8.34955 6.7082L9.69663 10.8541L6.16992 8.2918L2.64321 10.8541L3.99029 6.7082L0.463583 4.1459H4.82284L6.16992 0Z" fill="#FFCC00"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2209_13567">
                                                <rect width="12" height="12" fill="white" transform="translate(0.169922)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <g clip-path="url(#clip0_2209_13567)">
                                            <path d="M6.16992 0L7.51701 4.1459H11.8763L8.34955 6.7082L9.69663 10.8541L6.16992 8.2918L2.64321 10.8541L3.99029 6.7082L0.463583 4.1459H4.82284L6.16992 0Z" fill="#FFCC00"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2209_13567">
                                                <rect width="12" height="12" fill="white" transform="translate(0.169922)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="be-vietnam-pro-medium fz-12 uk-text-uppercase" style="color: #999;"><span style="color: #000;">5</span></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="be-vietnam-pro-medium fz-12 uk-text-uppercase" style="color: #999;">SKU: <span style="color: #000;">int280</span></div>
                    </div>
                </div>
                <div class="space-h-20"></div>
                <div class="divider"></div>
                <div class="space-h-20"></div>
                <div class="uk-grid uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="fz-20 sora-600 line-height-140" style="color: #0CB0A7;">179.000đ-379.000đ</div>
                    </div>
                    <div class="uk-width-auto">
                        <div class="uk-grid uk-flex-middle uk-grid-8" uk-grid>
                            <div>
                                <a href="" class="chi_tiet_sach__btn1 uk-button uk-button-primary uk-border-pill">
                                    <span class="be-vietnam-pro-semibold fz-16" style="color: #966412;">ĐỌC THỬ</span>
                                    <span class="icon24 icon24--docthu"></span>
                                </a>
                            </div>
                            <div>
                                <a href="" class="chi_tiet_sach__btn1 uk-button uk-button-primary uk-border-pill">
                                    <span class="be-vietnam-pro-semibold fz-16" style="color: #966412;">NGHE THỬ</span>
                                    <span class="icon24 icon24--nghethu"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-h-20"></div>
                <div class="be-vietnam-pro-light line-height-171 fz-14" style="color: #444;">Nihil quo dolorum debitis velit qui et inventore. Delectus aut occaecati sunt mollitia illo.
                    Odio velit mollitia ipsam explicabo nisi quisquam dolore non. Rem omnis consectetur et
                    ea.</div>
                <div class="space-h-20"></div>
                <h2 class="fz-14 sora-400 line-height-171 uk-margin-remove" style="color: #999;">Danh sách sản phẩm</h2>
                <div style="padding: 13px 18px;" class="item-8px border-8 uk-background-muted uk-padding-small">
                    <div class="uk-flex-middle uk-grid" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-grid uk-grid-10 uk-flex-middle" uk-grid>
                                <div>
                                    <span class="cuahang__icon cuahang__icon--sachgiay"></span>
                                </div>
                                <div>
                                    <div class="uk-text-uppercase fz-12 be-vietnam-pro-medium" style="color: #000;">Sách giấy</div>
                                </div>
                                <div>
                                    <div class="uk-text-uppercase fz-12 be-vietnam-pro-medium" style="color: #444;">(Tồn: 143)</div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="uk-grid uk-grid-50 uk-flex-middle" uk-grid>
                                <div>
                                    <div class="uk-grid-12 uk-grid uk-flex-middle" uk-grid>
                                        <div>
                                            <div class="chi_tiet_sach__btn2">
                                                <span class="icon16 icon16--minus"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fz-12 be-vietnam-pro-medium uk-text-center" style="color: #000;width: 20px;">1</div>
                                        </div>
                                        <div>
                                            <div class="chi_tiet_sach__btn2">
                                                <span class="icon16 icon16--plus"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-grid uk-flex-middle" uk-grid>
                                        <div>
                                            <div class="fz-12 be-vietnam-pro-bold" style="color: #000;">379.000đ</div>
                                        </div>
                                        <div>
                                            <label class="cuahang__fillter__labelCheck"><input class="uk-checkbox" type="checkbox" checked></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 13px 18px;" class="item-8px border-8 uk-background-muted uk-padding-small">
                    <div class="uk-flex-middle uk-grid" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-grid uk-grid-10 uk-flex-middle" uk-grid>
                                <div>
                                    <span class="cuahang__icon cuahang__icon--sachgiay"></span>
                                </div>
                                <div>
                                    <div class="uk-text-uppercase fz-12 be-vietnam-pro-medium" style="color: #000;">Sách giấy</div>
                                </div>
                                <div>
                                    <div class="uk-text-uppercase fz-12 be-vietnam-pro-medium" style="color: #444;">(Tồn: 143)</div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="fz-12 be-vietnam-pro-medium uk-text-uppercase" style="color: #966412;">Đã mua</div>
                        </div>
                    </div>
                </div>
                <div style="padding: 13px 18px;" class="uk-margin-small-top border-8 uk-background-muted uk-padding-small">
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
                                        <button class="chi_tiet_sach__btnDropnav uk-button uk-button-default uk-border-pill" type="button">
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
                                        <div>
                                            <label class="cuahang__fillter__labelCheck"><input class="uk-checkbox" type="checkbox" checked></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 13px 18px;" class="uk-margin-small-top border-8 uk-background-muted uk-padding-small">
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
                                    <div uk-form-custom="target: > * > span:first-child">
                                        <select aria-label="Custom controls">
                                            <option value="1">1 Tháng</option>
                                            <option value="2">3 Tháng</option>
                                            <option value="3">6 Tháng</option>
                                            <option value="4">Vĩnh viễn</option>
                                        </select>
                                        <button class="chi_tiet_sach__btnSelect uk-button uk-button-default uk-border-pill" type="button" tabindex="-1">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-grid uk-flex-middle" uk-grid>
                                        <div>
                                            <div class="fz-12 be-vietnam-pro-bold" style="color: #000;">379.000đ</div>
                                            <div class="fz-12 be-vietnam-pro-regular" style="color: #777;"><del>279.000đ</del></div>
                                        </div>
                                        <div>
                                            <label class="cuahang__fillter__labelCheck"><input class="uk-checkbox" type="checkbox" checked></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 13px 18px;" class="uk-margin-small-top border-8 uk-background-muted uk-padding-small">
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
                                    <a href="" class="fz-12 be-vietnam-pro-bold line-height-158" style="color: #0CB0A7;text-decoration-line: underline;">Gia hạn</a>
                                </div>
                                <div>
                                    <div class="fz-12 be-vietnam-pro-medium uk-text-uppercase" style="color: #966412;">Đã mua 1 tháng</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 13px 18px;" class="uk-margin-small-top border-8 uk-background-muted uk-padding-small">
                    <div class="uk-grid uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-grid uk-grid-10 uk-flex-middle" uk-grid>
                                <div>
                                    <span class="cuahang__icon cuahang__icon--sachnoi"></span>
                                </div>
                                <div>
                                    <div class="uk-text-uppercase fz-12 be-vietnam-pro-medium" style="color: #000;">Sách Nói</div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="uk-grid uk-grid-50 uk-flex-middle" uk-grid>
                                <div>
                                    <div class="uk-grid uk-flex-middle uk-grid-32" uk-grid>
                                        <div>
                                            <div class="uk-grid-12 uk-grid uk-flex-middle" uk-grid>
                                                <div>
                                                    <div class="chi_tiet_sach__btn2">
                                                        <span class="icon16 icon16--minus"></span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="fz-12 be-vietnam-pro-medium uk-text-center" style="color: #000;width: 20px;">1</div>
                                                </div>
                                                <div>
                                                    <div class="chi_tiet_sach__btn2">
                                                        <span class="icon16 icon16--plus"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div uk-form-custom="target: > * > span:first-child">
                                                <select aria-label="Custom controls">
                                                    <option value="1">1 Tháng</option>
                                                    <option value="2">3 Tháng</option>
                                                    <option value="3">6 Tháng</option>
                                                    <option value="4">Vĩnh viễn</option>
                                                </select>
                                                <button class="chi_tiet_sach__btnSelect uk-button uk-button-default uk-border-pill" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-grid uk-flex-middle" uk-grid>
                                        <div>
                                            <div class="fz-12 be-vietnam-pro-bold" style="color: #000;">179.000đ</div>
                                        </div>
                                        <div>
                                            <label class="cuahang__fillter__labelCheck"><input class="uk-checkbox" type="checkbox"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 13px 18px;" class="uk-margin-small-top border-8 uk-background-muted uk-padding-small">
                    <div class="uk-grid uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-grid uk-grid-10 uk-flex-middle" uk-grid>
                                <div>
                                    <span class="cuahang__icon cuahang__icon--sachnoi"></span>
                                </div>
                                <div>
                                    <div class="uk-text-uppercase fz-12 be-vietnam-pro-medium" style="color: #000;">Sách Nói</div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="uk-grid uk-grid-50 uk-flex-middle" uk-grid>
                                <div>
                                    <a href="" class="fz-12 be-vietnam-pro-bold line-height-158" style="color: #0CB0A7;text-decoration-line: underline;">Gia hạn</a>
                                </div>
                                <div>
                                    <div class="fz-12 be-vietnam-pro-medium uk-text-uppercase" style="color: #966412;">Đã mua 3 tháng</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-h-20"></div>
                <div class="divider"></div>
                <div class="space-h-20"></div>
                <div class="fz-12 uk-flex uk-flex-middle uk-flex-right" style="gap: 8px">
                    <span class="be-vietnam-pro-medium" style="color: #999;">Tạm tính</span>
                    <span class="be-vietnam-pro-bold" style="color: #000;">354.000 đ</span>
                </div>
                <div class="space-h-20"></div>
                <div class="uk-grid uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-flex-middle uk-flex" style="gap: 10px">
                            <a href="" uk-tooltip="Facebook" style="--background: #3B5998;" class="chi_tiet_sach__social__icon uk-icon-button" uk-icon="facebook"></a>
                            <a href="" uk-tooltip="X" style="--background: #1DA1F2;" class="chi_tiet_sach__social__icon uk-icon-button" uk-icon="x"></a>
                            <a href="" uk-tooltip="Linkedin" style="--background: #0077B5;" class="chi_tiet_sach__social__icon uk-icon-button" uk-icon="linkedin"></a>
                            <a href="" uk-tooltip="Pinterest" style="--background: #E60023;" class="chi_tiet_sach__social__icon uk-icon-button" uk-icon="pinterest"></a>
                        </div>
                    </div>
                    <div class="uk-width-auto">
                        <div id="div1" class="uk-flex-middle uk-grid-20" uk-grid>
                            <div>
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
    </div>
    <div class="space-h-60"></div>
    <div class="uk-grid uk-child-width-1-2 uk-flex-middle uk-grid-collapse" uk-grid>
        <div>
            <div class="uk-grid uk-grid-16 uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <div class="uk-cover-container uk-border-circle">
                        <img src="about:blank" data-src="https://i.pravatar.cc/70?v=0" uk-img alt="" uk-cover="">
                        <canvas width="70" height="70"></canvas>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="fz-16 sora-600 line-height-125" style="color: #000;">Jane Cooper</div>
                    <div class="fz-12 sora-600 line-height-125 item-6px" style="color: #6B6B6B;">14 Tác phẩm</div>
                </div>
            </div>
        </div>
        <div>
            <div class="fz-12 be-vietnam-pro-medium line-height-125" style="color: #999;">Xuất bản bởi</div>
            <div class="uk-grid uk-grid-13 uk-flex-middle uk-margin-small-top" uk-grid>
                <div class="uk-width-auto">
                    <div class="uk-cover-container uk-border-rounded uk-light" style="background-color: #000;">
                        <span class="uk-position-center fz-12 be-vietnam-pro-semibold">LOGO</span>
                        <canvas width="48" height="48"></canvas>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="fz-14 be-vietnam-pro-medium line-height-128" style="color: #000;">Nhà xuất bản xây dựng</div>
                    <div class="uk-flex uk-flex-middle item-9px" style="gap: 9px">
                        <div class="icon16 icon16--check"></div>
                        <div class="fz-12 be-vietnam-pro-regular" style="color: #999;">Nhà xuất bản đáng tin cậy</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-h-40"></div>
    <table class="chi_tiet_sach__table uk-table uk-table-striped uk-table-hover">
        <tbody>
        <?php
        $data = [
            [
                'icon' => 'icon20--home',
                'label' => 'Nhà XB',
                'value' => 'Nhà xuất bản Xây dựng',
            ],
            [
                'icon' => 'icon20--nguoidich',
                'label' => 'Người dịch',
                'value' => 'Trần Thu Trang',
            ],
            [
                'icon' => 'icon20--time',
                'label' => 'Năm XB',
                'value' => '2022',
            ],
            [
                'icon' => 'icon20--loaisach',
                'label' => 'Loại sách',
                'value' => 'Sách giấy, Sách điện tử, Sách nói',
            ],
            [
                'icon' => 'icon20--size',
                'label' => 'Khổ sách',
                'value' => '17 x 24 (cm)',
            ],
            [
                'icon' => 'icon20--sotrang',
                'label' => 'Số trang',
                'value' => '450',
            ],
            [
                'icon' => 'icon20--country',
                'label' => 'Quốc gia',
                'value' => 'Việt Nam',
            ],
            [
                'icon' => 'icon20--language',
                'label' => 'Ngôn ngữ',
                'value' => 'Vi',
            ],
            [
                'icon' => 'icon20--code',
                'label' => 'Mã ISBN',
                'value' => '978-604-6422-8',
            ],
            [
                'icon' => 'icon20--code',
                'label' => 'Mã ISBN ĐT',
                'value' => '978-604-6422-4',
            ],
        ];
        $num = 0;
        foreach ($data as $k=>$v):
        if ($num%2==0) echo '<tr>'; ?>
            <td class="uk-width-1-2">
                <div class="uk-flex-middle uk-grid-small uk-grid" uk-grid>
                    <div>
                        <div class="<?php if ($num%2==1) echo 'border-left'  ?> width-140px uk-flex uk-flex-middle" style="padding: 10px 10px;gap: 12px;">
                            <div class="icon20 <?= $v['icon'] ?>"></div>
                            <div class="fz-14 be-vietnam-pro-medium" style="color: #6B6B6B;"><?= $v['label'] ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="fz-14 be-vietnam-pro-medium" style="color: #000;"><?= $v['value'] ?></div>
                    </div>
                </div>
            </td>
        <?php if ($num%2==1) echo '</tr>'; $num++; endforeach; ?>
        </tbody>
    </table>
    <div class="space-h-40"></div>
    <ul class="chi_tiet_sach__tab uk-margin-remove-top uk-margin-remove-bottom uk-tab" uk-tab>
        <li><a href="#">Mô tả chi tiết</a></li>
        <li><a href="#">Thông tin bổ sung</a></li>
        <li><a href="#">Đánh giá (5)</a></li>
    </ul>
    <div class="space-h-60"></div>
    <div class="uk-switcher fz-14">
        <div>
            <p>Aut eligendi voluptatem adipisci unde iusto. Vitae aut voluptas velit beatae at nam maiores. Sunt dolorem cumque qui sit in esse quia occaecati. Eos et vero optio eaque nemo.</p>
            <p>Aut eligendi voluptatem adipisci unde iusto. Vitae aut voluptas velit beatae at nam maiores. Sunt dolorem cumque qui sit in esse quia occaecati. Eos et vero optio eaque nemo.</p>
            <p>Qui omnis nihil accusantium dolorum molestiae. Assumenda rem et non. Aut fugiat fugiat voluptatum vero vitae error. Sequi fugit vitae dolor velit. Nemo et sapiente repudiandae.</p>
            <p>Quam dolorum accusantium odio amet. Commodi consequatur distinctio voluptas repellat doloribus quia. Consectetur ad similique atque voluptas ut.</p>
            <p>Earum vel delectus in facilis. Voluptatum minus nobis cum temporibus perferendis est ut. Sed aut saepe ipsum animi asperiores. Nihil nihil repudiandae adipisci quis ea voluptatum dicta.</p>
        </div>
        <div>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
        <div>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</div>
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