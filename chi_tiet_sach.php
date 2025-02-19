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
    </div>
    <div class="space-h-40"></div>
    <ul class="chi_tiet_sach__tab uk-margin-remove-top uk-margin-remove-bottom uk-tab" uk-tab>
        <li><a href="#">Đánh giá (5)</a></li>
    </ul>
    <div class="space-h-60"></div>
    <div class="uk-grid-match uk-flex-middle" uk-grid>
        <div class="uk-width-expand">
            <div class="uk-text-center uk-card uk-card-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" fill="none">
                    <g clip-path="url(#clip0_12276_19273)">
                        <path d="M93.332 184.333C139.999 184.333 177.832 146.5 177.832 99.6667C177.832 52.8333 139.999 15 93.332 15C46.6654 15 8.83203 52.8333 8.83203 99.6667C8.83203 146.5 46.6654 184.333 93.332 184.333Z" fill="#EAEEF9"/>
                        <path d="M187.497 73.1667C191.271 73.1667 194.331 70.1073 194.331 66.3333C194.331 62.5594 191.271 59.5 187.497 59.5C183.723 59.5 180.664 62.5594 180.664 66.3333C180.664 70.1073 183.723 73.1667 187.497 73.1667Z" fill="#EAEEF9"/>
                        <path d="M197.499 46.3333C200.076 46.3333 202.165 44.244 202.165 41.6667C202.165 39.0893 200.076 37 197.499 37C194.921 37 192.832 39.0893 192.832 41.6667C192.832 44.244 194.921 46.3333 197.499 46.3333Z" fill="#EAEEF9"/>
                        <path d="M2.9987 78.0003C5.57603 78.0003 7.66537 75.911 7.66537 73.3337C7.66537 70.7563 5.57603 68.667 2.9987 68.667C0.421369 68.667 -1.66797 70.7563 -1.66797 73.3337C-1.66797 75.911 0.421369 78.0003 2.9987 78.0003Z" fill="#EAEEF9"/>
                        <path d="M122.331 50.7383C151.102 50.7383 174.311 71.6624 174.311 97.3855C174.311 112.167 166.638 125.412 154.555 134.051V153.439C154.555 156.127 151.486 157.47 149.568 155.935L133.072 143.073C129.62 143.649 126.167 144.033 122.523 144.033C93.7517 144.033 70.543 123.109 70.543 97.3855C70.543 71.6624 93.7517 50.7383 122.331 50.7383Z" fill="#CBD4E0"/>
                        <g filter="url(#filter0_d_12276_19273)">
                            <path d="M71.504 48.4346C39.4721 48.4346 13.5781 71.6622 13.5781 100.265C13.5781 116.774 22.2095 131.555 35.636 140.961V162.461C35.636 165.341 38.8967 167.068 41.1984 165.149L59.6119 150.943C63.448 151.711 67.2842 152.095 71.3121 152.095C103.344 152.095 129.238 128.867 129.238 100.265C129.238 71.6622 103.344 48.4346 71.504 48.4346Z" fill="url(#paint0_linear_12276_19273)"/>
                        </g>
                        <path d="M57.2359 43.563C57.0047 43.563 56.7734 43.563 56.5421 43.563C55.3858 43.1 54.6919 41.9427 54.9232 40.7855L58.8548 28.0552C59.3174 26.8979 60.4737 26.2035 61.6301 26.435C62.7864 26.8979 63.4802 28.0552 63.249 29.2125L59.5486 41.9427C59.3174 42.8686 58.3923 43.563 57.2359 43.563Z" fill="#B5BCCE"/>
                        <path d="M47.5214 46.3407C46.5963 46.3407 45.6712 45.6464 45.2087 44.7205L39.1957 26.4352C38.7331 25.2779 39.4269 23.8892 40.5833 23.4263C41.7396 22.9633 43.1273 23.6577 43.5898 24.815L49.6028 43.1003C50.0654 44.2576 49.3716 45.6464 48.2152 46.1093C47.984 46.3407 47.7527 46.3407 47.5214 46.3407Z" fill="#B5BCCE"/>
                        <path d="M38.5024 50.738C37.8086 50.738 37.3461 50.5066 36.8835 50.0436L29.4829 42.8684C28.5578 41.9426 28.5578 40.5538 29.4829 39.628C30.408 38.7021 31.7956 38.7021 32.7207 39.628L40.1213 46.8032C41.0464 47.7291 41.0464 49.1178 40.1213 50.0436C39.6588 50.5066 38.965 50.738 38.5024 50.738Z" fill="#B5BCCE"/>
                    </g>
                    <defs>
                        <filter id="filter0_d_12276_19273" x="-8.42188" y="37.4346" width="159.66" height="161.524" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="11"/>
                            <feGaussianBlur stdDeviation="11"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0.397708 0 0 0 0 0.47749 0 0 0 0 0.575 0 0 0 0.27 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12276_19273"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12276_19273" result="shape"/>
                        </filter>
                        <linearGradient id="paint0_linear_12276_19273" x1="71.3704" y1="45.7161" x2="71.3704" y2="167.226" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FDFEFF"/>
                            <stop offset="0.9964" stop-color="#ECF0F5"/>
                        </linearGradient>
                        <clipPath id="clip0_12276_19273">
                            <rect width="200" height="200" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <div class="space-h-24"></div>
                <h2 class="uk-margin-remove text-111827 fz-20 line-height-138 be-vietnam-pro-semibold">Chưa có bình luận</h2>
                <div class="item-8px fz-14 text-4B5563 line-height-142">Hãy là người đầu tiên khám phá cuốn sách này và chia sẻ cảm xúc của bạn với chúng tôi!</div>
                <div class="uk-margin-top">
                    <a href="" class="sachdamua__btn uk-button uk-button-primary uk-border-pill uk-flex-inline" style="padding-right: 17px;gap: 12px">
                        <span class="fz-16 be-vietnam-pro-semibold" style="color: #fff;">Thêm bình luận</span>
                        <span class="icon24 icon24--edit"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="uk-width-auto">
            <div class="uk-cover-container border-20">
                <img src="images/slider4.jpeg" alt="" uk-cover="">
                <canvas width="320" height="534"></canvas>
            </div>
        </div>
    </div>
    <div class="space-h-60"></div>
    <div class="" uk-grid>
        <div class="uk-width-expand">
            <div class="uk-text-center line-height-125 text-9A96AA be-vietnam-pro-semibold">Hãy cho chúng mình biết độ yêu thích của bạn với tựa sách này nha.</div>
            <div class="space-h-12"></div>
            <div class="uk-child-width-auto uk-flex-center uk-grid-8 uk-hidden" uk-grid>
                <div>
                    <div class="width-104px uk-text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                            <path d="M22.5 8L25.6432 17.6738H35.8148L27.5858 23.6525L30.729 33.3262L22.5 27.3475L14.271 33.3262L17.4142 23.6525L9.18521 17.6738H19.3568L22.5 8Z" fill="#E6E6E6"/>
                        </svg>
                        <div class="fz-14 be-vietnam-pro-medium text-9A96AA">Thất vọng</div>
                    </div>
                </div>
                <div>
                    <div class="width-104px uk-text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                            <path d="M22.5 8L25.6432 17.6738H35.8148L27.5858 23.6525L30.729 33.3262L22.5 27.3475L14.271 33.3262L17.4142 23.6525L9.18521 17.6738H19.3568L22.5 8Z" fill="#E6E6E6"/>
                        </svg>
                        <div class="fz-14 be-vietnam-pro-medium text-9A96AA">Không thích</div>
                    </div>
                </div>
                <div>
                    <div class="width-104px uk-text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                            <path d="M22.5 8L25.6432 17.6738H35.8148L27.5858 23.6525L30.729 33.3262L22.5 27.3475L14.271 33.3262L17.4142 23.6525L9.18521 17.6738H19.3568L22.5 8Z" fill="#E6E6E6"/>
                        </svg>
                        <div class="fz-14 be-vietnam-pro-medium text-9A96AA">Bình thường</div>
                    </div>
                </div>
                <div>
                    <div class="width-104px uk-text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                            <path d="M22.5 8L25.6432 17.6738H35.8148L27.5858 23.6525L30.729 33.3262L22.5 27.3475L14.271 33.3262L17.4142 23.6525L9.18521 17.6738H19.3568L22.5 8Z" fill="#E6E6E6"/>
                        </svg>
                        <div class="fz-14 be-vietnam-pro-medium text-9A96AA">Thích</div>
                    </div>
                </div>
                <div>
                    <div class="width-104px uk-text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                            <path d="M22.5 8L25.6432 17.6738H35.8148L27.5858 23.6525L30.729 33.3262L22.5 27.3475L14.271 33.3262L17.4142 23.6525L9.18521 17.6738H19.3568L22.5 8Z" fill="#E6E6E6"/>
                        </svg>
                        <div class="fz-14 be-vietnam-pro-medium text-9A96AA">Tuyệt vời</div>
                    </div>
                </div>
            </div>
            <div class="rates uk-grid uk-flex-center uk-grid-collapse row-gap-4 uk-child-width-auto uk-flex-row-reverse" uk-grid>
                <input id="rate-5" class="uk-radio uk-hidden rates__radio" type="radio" name="rate" data-text="Tuyệt vời">
                <label for="rate-5" class="rates__icon"></label>

                <input id="rate-4" class="uk-radio uk-hidden rates__radio" type="radio" name="rate" data-text="Thích">
                <label for="rate-4" class="rates__icon"></label>

                <input id="rate-3" class="uk-radio uk-hidden rates__radio" type="radio" name="rate" data-text="Bình thường">
                <label for="rate-3" class="rates__icon"></label>

                <input id="rate-2" class="uk-radio uk-hidden rates__radio" type="radio" name="rate" data-text="Không thích">
                <label for="rate-2" class="rates__icon"></label>

                <input id="rate-1" class="uk-radio uk-hidden rates__radio" type="radio" name="rate" data-text="Thất vọng">
                <label for="rate-1" class="rates__icon"></label>

                <div class="uk-width uk-text-center rates__txt fz-14 be-vietnam-pro-medium text-9A96AA" data-txt="Please rate this game"></div>
                <script>
                    let element = document.querySelector(".rates__txt");
                    document.querySelectorAll('.rates__radio').forEach((el)=>{
                        console.log(el.getAttribute('data-text'));
                    });

                    document.querySelectorAll('.rates__icon').forEach((el)=>{
                        el.addEventListener('mouseover',(event)=>{
                            console.log(event)
                            var x = event.target.previousElementSibling.getAttribute('data-text');
                            console.log(x);
                            element.setAttribute('data-txt',x);
                        })
                    });
                </script>
            </div>
            <textarea class="chi_tiet_sach__comment__textarea uk-textarea item-24px border-10 fz-14 be-vietnam-pro-semibold text-9A96AA" rows="5" placeholder="Để lại bình luận của bạn..." aria-label="Để lại bình luận của bạn..."></textarea>
            <div class="uk-text-right item-12px">
                <button class="thongtintaikhoan__btnSave uk-button uk-border-pill">Gửi bình luận</button>
            </div>
            <div class="space-h-40"></div>
            <div>
                <?php for ($j = 0; $j < 6; $j++) { ?>
                    <div class="chi_tiet_sach__comment__item border-10 item-12px">
                        <div class="uk-grid-8" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container uk-border-circle">
                                    <img src="https://picsum.photos/24/24/?random=<?= $j ?>" alt="" uk-cover>
                                    <canvas width="24" height="24"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="fz-12 be-vietnam-pro-medium text-2A2928">Nguyễn Mạnh Cường</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="fz-12 text-999">10/12/2024</div>
                                    </div>
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
                                <div class="item-4px fz-12 be-vietnam-pro-medium line-height-133 text-5E5D5A">Lorem ipsum dolor sit amet consectetur. Ac purus arcu nunc mauris adipiscing faucibus pharetra.</div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="space-h-20"></div>
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
        <div class="uk-width-auto">
            <div class="uk-cover-container border-20">
                <img src="images/slider4.jpeg" alt="" uk-cover="">
                <canvas width="320" height="534"></canvas>
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