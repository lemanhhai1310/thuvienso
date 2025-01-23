
<?php $data["title"] = "NXB"; ?>
<?php $isHome = false; ?>
<?php $isLogin = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <div class="space-h-60"></div>
    <div class="uk-flex-middle uk-grid uk-grid-12" uk-grid>
        <div class="uk-width-auto">
            <h2 class="common__title fz-36 be-vietnam-pro-semibold">Danh sách NXB</h2>
        </div>
        <div class="uk-width-expand">
            <div class="common__line"></div>
        </div>
        <div class="uk-width-auto">
            <form class="danhmucsach__search uk-search uk-search-default width-284px">
                <span class="danhmucsach__search__icon" uk-search-icon></span>
                <input class="danhmucsach__search__input uk-search-input uk-border-pill" type="search" placeholder="Tìm kiếm NXB" aria-label="Tìm kiếm NXB">
            </form>
        </div>
    </div>
    <div class="space-h-48"></div>
    <div class="uk-grid uk-grid-16 row-gap-24 uk-child-width-1-3" uk-grid>
        <?php
        $data = [
            [
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="32" viewBox="0 0 26 32" fill="none">
  <path d="M3.4 19.2474C2.98579 19.2474 2.65 19.5832 2.65 19.9974C2.65 20.4116 2.98579 20.7474 3.4 20.7474V19.2474ZM22.6 20.7474C23.0142 20.7474 23.35 20.4116 23.35 19.9974C23.35 19.5832 23.0142 19.2474 22.6 19.2474V20.7474ZM22.4136 29.3307L22.0678 29.9962C22.2887 30.111 22.552 30.1087 22.7709 29.9902C22.9897 29.8717 23.1355 29.6523 23.16 29.4046L22.4136 29.3307ZM19.1292 26.4521L19.8067 26.1305L19.1292 26.4521ZM21.2254 28.7133L21.5712 28.0478L21.2254 28.7133ZM22.0065 24.4313L21.3289 24.7529L22.0065 24.4313ZM22.5682 27.7703L23.3145 27.8442L22.5682 27.7703ZM3.58636 29.3307L2.84001 29.4046C2.86454 29.6523 3.01032 29.8717 3.22914 29.9902C3.44797 30.1087 3.71134 30.111 3.93217 29.9962L3.58636 29.3307ZM3.99351 24.4313L3.31595 24.1097L3.99351 24.4313ZM3.43181 27.7703L4.17816 27.6964H4.17816L3.43181 27.7703ZM6.87084 26.4521L6.19328 26.1305L6.87084 26.4521ZM4.77457 28.7133L4.42876 28.0478H4.42876L4.77457 28.7133ZM13.7501 2.66407C13.7501 2.24986 13.4143 1.91407 13.0001 1.91406C12.5859 1.91406 12.2501 2.24984 12.2501 2.66405L13.7501 2.66407ZM3.4 20.7474H22.6V19.2474H3.4V20.7474ZM21.8218 27.6964L21.6673 29.2568L23.16 29.4046L23.3145 27.8442L21.8218 27.6964ZM22.7594 28.6652L21.5712 28.0478L20.8796 29.3788L22.0678 29.9962L22.7594 28.6652ZM18.4516 26.7737C18.9918 27.9118 19.8351 28.8361 20.8796 29.3788L21.5712 28.0478C20.8529 27.6745 20.2251 27.012 19.8067 26.1305L18.4516 26.7737ZM21.3289 24.7529C21.7473 25.6344 21.9236 26.6686 21.8218 27.6964L23.3145 27.8442C23.442 26.5568 23.2242 25.2478 22.684 24.1097L21.3289 24.7529ZM4.42876 28.0478L3.24055 28.6652L3.93217 29.9962L5.12038 29.3788L4.42876 28.0478ZM4.33271 29.2568L4.17816 27.6964L2.68546 27.8442L2.84001 29.4046L4.33271 29.2568ZM3.31595 24.1097C2.77581 25.2478 2.55795 26.5568 2.68546 27.8442L4.17816 27.6964C4.07637 26.6686 4.25269 25.6344 4.67106 24.7529L3.31595 24.1097ZM6.19328 26.1305C5.77494 27.012 5.14711 27.6745 4.42876 28.0478L5.12038 29.3788C6.16495 28.8361 7.00824 27.9118 7.5484 26.7737L6.19328 26.1305ZM10.4276 9.40003C10.4276 7.438 11.7101 6.10845 13 6.10845V4.60845C10.6201 4.60845 8.92758 6.89786 8.92758 9.40003H10.4276ZM13 6.10845C14.29 6.10845 15.5725 7.438 15.5725 9.40003H17.0725C17.0725 6.89786 15.3799 4.60845 13 4.60845V6.10845ZM15.5725 9.40003C15.5725 10.0439 15.427 10.6384 15.1813 11.1389L16.5277 11.8C16.8764 11.0899 17.0725 10.2687 17.0725 9.40003H15.5725ZM15.177 11.791L21.3289 24.7529L22.684 24.1097L16.5321 11.1479L15.177 11.791ZM10.8188 11.1388C10.573 10.6384 10.4276 10.0439 10.4276 9.40003H8.92758C8.92758 10.2687 9.12364 11.0898 9.47229 11.7999L10.8188 11.1388ZM4.67106 24.7529L10.8231 11.791L9.46797 11.1478L3.31595 24.1097L4.67106 24.7529ZM15.1813 11.1389C14.7025 12.114 13.8835 12.6773 13.0337 12.6913L13.0585 14.1911C14.5967 14.1657 15.8613 13.1573 16.5277 11.8L15.1813 11.1389ZM13.0337 12.6913C13.0225 12.6915 13.0113 12.6916 13 12.6916V14.1916C13.0195 14.1916 13.039 14.1914 13.0585 14.1911L13.0337 12.6913ZM12.3685 13.1196L6.19328 26.1305L7.5484 26.7737L13.7236 13.7628L12.3685 13.1196ZM13 12.6916C12.9888 12.6916 12.9775 12.6915 12.9663 12.6913L12.9415 14.1911C12.961 14.1914 12.9805 14.1916 13 14.1916V12.6916ZM12.9663 12.6913C12.1166 12.6773 11.2975 12.114 10.8188 11.1388L9.47229 11.7999C10.1387 13.1572 11.4033 14.1657 12.9415 14.1911L12.9663 12.6913ZM19.8067 26.1305L13.6315 13.1196L12.2763 13.7628L18.4516 26.7737L19.8067 26.1305ZM13.75 5.35846L13.7501 2.66407L12.2501 2.66405L12.25 5.35844L13.75 5.35846Z" fill="#7261D4"/>
</svg>',
                'color' => '#EDEBFC',
                'title' => 'Kỹ thuật xây dựng',
                'text' => '880 đầu sách',
            ],
            [
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <path d="M10.6667 23.9974H21.3333M10.6667 23.9974C10.6667 26.9429 13.0545 29.3307 16 29.3307C18.9455 29.3307 21.3333 26.9429 21.3333 23.9974M10.6667 23.9974V21.049C10.6667 20.1773 10.2221 19.3792 9.5887 18.7802C7.78934 17.0788 6.66666 14.6692 6.66666 11.9974C6.66666 6.84274 10.8453 2.66406 16 2.66406C21.1546 2.66406 25.3333 6.84274 25.3333 11.9974C25.3333 14.6692 24.2106 17.0788 22.4113 18.7802C21.7779 19.3792 21.3333 20.1773 21.3333 21.049V23.9974M13.3333 11.9974L16 14.6641M16 14.6641L18.6667 11.9974M16 14.6641V23.9974" stroke="#72C949" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>',
                'color' => '#E8F6E1',
                'title' => 'Kỹ thuật xây dựng',
                'text' => '130 đầu sách',
            ],
            [
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
  <path d="M16.2 5.33073V2.66406M16.2 27.9974V23.9974M8.19999 29.3307L10.8667 23.9974M24.2 29.3307L21.5333 23.9974M9.53332 23.9974H22.8667C25.0758 23.9974 26.8667 22.2065 26.8667 19.9974V9.33073C26.8667 7.12159 25.0758 5.33073 22.8667 5.33073H9.53332C7.32419 5.33073 5.53333 7.12159 5.53333 9.33073V19.9974C5.53333 22.2065 7.32419 23.9974 9.53332 23.9974Z" stroke="#4DC1DB" stroke-width="1.5" stroke-linecap="round"/>
</svg>',
                'color' => '#E9F9FD',
                'title' => 'Kinh tế xây dựng',
                'text' => '130 đầu sách',
            ],
            [
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
  <path d="M16.2 5.33073V2.66406M16.2 27.9974V23.9974M8.19999 29.3307L10.8667 23.9974M24.2 29.3307L21.5333 23.9974M9.53332 23.9974H22.8667C25.0758 23.9974 26.8667 22.2065 26.8667 19.9974V9.33073C26.8667 7.12159 25.0758 5.33073 22.8667 5.33073H9.53332C7.32419 5.33073 5.53333 7.12159 5.53333 9.33073V19.9974C5.53333 22.2065 7.32419 23.9974 9.53332 23.9974Z" stroke="#4DC1DB" stroke-width="1.5" stroke-linecap="round"/>
</svg>',
                'color' => '#E9F9FD',
                'title' => 'Sách Xây dựng',
                'text' => '130 đầu sách',
            ],
            [
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="32" viewBox="0 0 26 32" fill="none">
  <path d="M3.4 19.2474C2.98579 19.2474 2.65 19.5832 2.65 19.9974C2.65 20.4116 2.98579 20.7474 3.4 20.7474V19.2474ZM22.6 20.7474C23.0142 20.7474 23.35 20.4116 23.35 19.9974C23.35 19.5832 23.0142 19.2474 22.6 19.2474V20.7474ZM22.4136 29.3307L22.0678 29.9962C22.2887 30.111 22.552 30.1087 22.7709 29.9902C22.9897 29.8717 23.1355 29.6523 23.16 29.4046L22.4136 29.3307ZM19.1292 26.4521L19.8067 26.1305L19.1292 26.4521ZM21.2254 28.7133L21.5712 28.0478L21.2254 28.7133ZM22.0065 24.4313L21.3289 24.7529L22.0065 24.4313ZM22.5682 27.7703L23.3145 27.8442L22.5682 27.7703ZM3.58636 29.3307L2.84001 29.4046C2.86454 29.6523 3.01032 29.8717 3.22914 29.9902C3.44797 30.1087 3.71134 30.111 3.93217 29.9962L3.58636 29.3307ZM3.99351 24.4313L3.31595 24.1097L3.99351 24.4313ZM3.43181 27.7703L4.17816 27.6964H4.17816L3.43181 27.7703ZM6.87084 26.4521L6.19328 26.1305L6.87084 26.4521ZM4.77457 28.7133L4.42876 28.0478H4.42876L4.77457 28.7133ZM13.7501 2.66407C13.7501 2.24986 13.4143 1.91407 13.0001 1.91406C12.5859 1.91406 12.2501 2.24984 12.2501 2.66405L13.7501 2.66407ZM3.4 20.7474H22.6V19.2474H3.4V20.7474ZM21.8218 27.6964L21.6673 29.2568L23.16 29.4046L23.3145 27.8442L21.8218 27.6964ZM22.7594 28.6652L21.5712 28.0478L20.8796 29.3788L22.0678 29.9962L22.7594 28.6652ZM18.4516 26.7737C18.9918 27.9118 19.8351 28.8361 20.8796 29.3788L21.5712 28.0478C20.8529 27.6745 20.2251 27.012 19.8067 26.1305L18.4516 26.7737ZM21.3289 24.7529C21.7473 25.6344 21.9236 26.6686 21.8218 27.6964L23.3145 27.8442C23.442 26.5568 23.2242 25.2478 22.684 24.1097L21.3289 24.7529ZM4.42876 28.0478L3.24055 28.6652L3.93217 29.9962L5.12038 29.3788L4.42876 28.0478ZM4.33271 29.2568L4.17816 27.6964L2.68546 27.8442L2.84001 29.4046L4.33271 29.2568ZM3.31595 24.1097C2.77581 25.2478 2.55795 26.5568 2.68546 27.8442L4.17816 27.6964C4.07637 26.6686 4.25269 25.6344 4.67106 24.7529L3.31595 24.1097ZM6.19328 26.1305C5.77494 27.012 5.14711 27.6745 4.42876 28.0478L5.12038 29.3788C6.16495 28.8361 7.00824 27.9118 7.5484 26.7737L6.19328 26.1305ZM10.4276 9.40003C10.4276 7.438 11.7101 6.10845 13 6.10845V4.60845C10.6201 4.60845 8.92758 6.89786 8.92758 9.40003H10.4276ZM13 6.10845C14.29 6.10845 15.5725 7.438 15.5725 9.40003H17.0725C17.0725 6.89786 15.3799 4.60845 13 4.60845V6.10845ZM15.5725 9.40003C15.5725 10.0439 15.427 10.6384 15.1813 11.1389L16.5277 11.8C16.8764 11.0899 17.0725 10.2687 17.0725 9.40003H15.5725ZM15.177 11.791L21.3289 24.7529L22.684 24.1097L16.5321 11.1479L15.177 11.791ZM10.8188 11.1388C10.573 10.6384 10.4276 10.0439 10.4276 9.40003H8.92758C8.92758 10.2687 9.12364 11.0898 9.47229 11.7999L10.8188 11.1388ZM4.67106 24.7529L10.8231 11.791L9.46797 11.1478L3.31595 24.1097L4.67106 24.7529ZM15.1813 11.1389C14.7025 12.114 13.8835 12.6773 13.0337 12.6913L13.0585 14.1911C14.5967 14.1657 15.8613 13.1573 16.5277 11.8L15.1813 11.1389ZM13.0337 12.6913C13.0225 12.6915 13.0113 12.6916 13 12.6916V14.1916C13.0195 14.1916 13.039 14.1914 13.0585 14.1911L13.0337 12.6913ZM12.3685 13.1196L6.19328 26.1305L7.5484 26.7737L13.7236 13.7628L12.3685 13.1196ZM13 12.6916C12.9888 12.6916 12.9775 12.6915 12.9663 12.6913L12.9415 14.1911C12.961 14.1914 12.9805 14.1916 13 14.1916V12.6916ZM12.9663 12.6913C12.1166 12.6773 11.2975 12.114 10.8188 11.1388L9.47229 11.7999C10.1387 13.1572 11.4033 14.1657 12.9415 14.1911L12.9663 12.6913ZM19.8067 26.1305L13.6315 13.1196L12.2763 13.7628L18.4516 26.7737L19.8067 26.1305ZM13.75 5.35846L13.7501 2.66407L12.2501 2.66405L12.25 5.35844L13.75 5.35846Z" fill="#7261D4"/>
</svg>',
                'color' => '#EDEBFC',
                'title' => 'Cơ khí xây dựng',
                'text' => '880 đầu sách',
            ],
            [
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <path d="M10.6667 23.9974H21.3333M10.6667 23.9974C10.6667 26.9429 13.0545 29.3307 16 29.3307C18.9455 29.3307 21.3333 26.9429 21.3333 23.9974M10.6667 23.9974V21.049C10.6667 20.1773 10.2221 19.3792 9.5887 18.7802C7.78934 17.0788 6.66666 14.6692 6.66666 11.9974C6.66666 6.84274 10.8453 2.66406 16 2.66406C21.1546 2.66406 25.3333 6.84274 25.3333 11.9974C25.3333 14.6692 24.2106 17.0788 22.4113 18.7802C21.7779 19.3792 21.3333 20.1773 21.3333 21.049V23.9974M13.3333 11.9974L16 14.6641M16 14.6641L18.6667 11.9974M16 14.6641V23.9974" stroke="#72C949" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>',
                'color' => '#E8F6E1',
                'title' => 'Tin học xây dựng',
                'text' => '130 đầu sách',
            ],
        ];
        foreach ($data as $k=>$v): ?>
            <div>
                <div class="danhmucsach__card uk-card uk-card-body border-15 uk-position-relative">
                    <div class="uk-grid uk-grid-14 uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <div class="uk-cover-container">
                                <img src="images/photo.jpg" alt="" uk-cover="">
                                <canvas width="60" height="60"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="text-000 fz-22 be-vietnam-pro-semibold line-height-127">NXB ĐH Kinh tế quốc dân</div>
                            <div class="uk-margin-small-top fz-12 text-999 uk-text-uppercase line-height-166 be-vietnam-pro-semibold"><?= $v['text'] ?></div>
                        </div>
                    </div>
                    <a href="" class="uk-position-cover"></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="space-h-60"></div>
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