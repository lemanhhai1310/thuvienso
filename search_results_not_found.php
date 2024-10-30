<?php $data["title"] = "Kết quả tìm kiếm"; ?>
<?php $isHome = false; ?>
<?php $isLogin = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-light" style="background: #000;min-height: 170px;">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <h1 class="uk-margin-remove fz-54 line-height-126 sora-600 uk-text-capitalize">Kết quả tìm kiếm</h1>
                <nav class="item-9px" aria-label="Breadcrumb">
                    <ul class="breadcrumb uk-breadcrumb uk-margin-remove">
                        <li><a href=".">Trang chủ</a></li>
                        <li><span aria-current="page">Kết quả tìm kiếm</span></li>
                    </ul>
                </nav>
            </div>
            <div class="uk-width-auto">
                <div class="uk-flex-middle" uk-grid>
                    <div>
                        <div class="cuahang__banner__txt width-245px uk-text-center fz-34 sora-600 line-height-126">
                            <span style="color: #F65D4E;">Giảm tới 50%</span>
                            trên hàng trăm
                            đầu sách
                        </div>
                    </div>
                    <div>
                        <img src="images/1920/digital-art-style-illustration-mental-health-day-awareness1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-h-60"></div>
<div class="uk-container">
    <div class="uk-grid-medium" uk-grid>
        <div class="uk-width-auto">
            <div class="width-258px" uk-sticky="offset: 72;start: 1;end: !.uk-container;">
                <div class="cuahang__fillter__card uk-card border-15 uk-margin">
                    <h3 class="cuahang__fillter__title fz-16 be-vietnam-pro-semibold line-height-150">Chủ đề</h3>
                    <div class="uk-grid-16 uk-child-width-1-1 uk-grid" uk-grid>
                        <?php
                        $data = [
                            'Phiêu lưu, hành động',
                            'Nghệ thuật - Giải trí',
                            'Truyện ngắn - Tản văn',
                            'Tâm lý học',
                            'Kiến thức bách khoa',
                            'Nhân vật nổi tiếng',
                            'Câu chuyện cuộc đời',
                            'Chính trị',
                            'Kinh tế',
                            'Cẩm nang làm mẹ',
                            'Ngôn ngữ',
                        ];
                        for ($i = 0; $i < count($data); $i++) { ?>
                        <label class="cuahang__fillter__labelCheck uk-flex uk-flex-middle" style="gap: 4px">
                            <input class="uk-checkbox" type="checkbox">
                            <span class="fz-14 be-vietnam-pro-regular" style="color: #444;"><?= $data[$i] ?></span>
                        </label>
                        <?php } ?>
                    </div>
                </div>
                <div class="cuahang__fillter__card uk-card border-15 uk-margin">
                    <h3 class="cuahang__fillter__title fz-16 be-vietnam-pro-semibold line-height-150 uk-position-relative">
                        Tác giả
                        <div class="uk-position-top-right">
                            <a class="uk-navbar-toggle" style="min-height: 25px" href uk-search-icon></a>
                            <div class="uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !.uk-navbar; flip: false">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <form class="uk-search uk-search-navbar uk-width-1-1">
                                            <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search" autofocus>
                                        </form>
                                    </div>
                                    <div class="uk-width-auto">
                                        <a class="uk-drop-close" href="#" uk-close></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h3>
                    <div class="article-1 uk-overflow-hidden">
                        <div class=" uk-grid-16 uk-child-width-1-1 uk-grid" uk-grid>
                            <?php
                            $data = [
                                'Guy Hawkins',
                                'Cameron Williamson',
                                'Leslie Alexander',
                                'Devon Lane',
                                'Brooklyn Simmons',
                                'Jenny Wilson',
                                'Esther Howard',
                                'Guy Hawkins',
                                'Cameron Williamson',
                                'Leslie Alexander',
                                'Devon Lane',
                                'Brooklyn Simmons',
                                'Jenny Wilson',
                                'Esther Howard',
                            ];
                            for ($i = 0; $i < count($data); $i++) { ?>
                                <label class="cuahang__fillter__labelCheck uk-flex uk-flex-middle">
                                    <div class="uk-flex-1 uk-flex uk-flex-middle" style="gap: 4px">
                                        <input class="uk-checkbox" type="checkbox">
                                        <span class="fz-14 be-vietnam-pro-regular" style="color: #444;"><?= $data[$i] ?></span>
                                    </div>
                                    <span class="fz-14 sora-300" style="color: #999;">(<?= rand(1,100) ?>)</span>
                                </label>
                            <?php } ?>
                        </div>
                    </div>
                    <script>
                        Defer.js('https://code.jquery.com/jquery-3.5.1.min.js','jquery',0, function () {
                            Defer.js('https://theoceanresortquynhon.com/wp-content/themes/oceanvillasquynhon/assets/js/readmore.js','readmore-js',0, function () {
                                $('.article-1').readmore({
                                    speed: 75,
                                    lessLink: '<div class="uk-margin-small-top"><a href="#" class="read-less cuahang__fillter__moreLink uk-link-toggle">Thu gọn</a></div>',
                                    moreLink: '<div class="uk-margin-small-top"><a href="#" class="read-more cuahang__fillter__moreLink uk-link-toggle">Mở rộng</a></div>',
                                    collapsedHeight: 240,
                                });
                            })
                        })
                    </script>
                </div>
                <div class="cuahang__fillter__card uk-card border-15 uk-margin">
                    <h3 class="cuahang__fillter__title fz-16 be-vietnam-pro-semibold line-height-150">Lọc theo giá</h3>
                    <div class="item-16px boloc__ranger">
                        <input type="text" class="js-range-slider" name="my_range" value="" />
                    </div>
                    <div class="js-output__d1"></div>
                    <div class="item-16px fz-12 be-vietnam-pro-regular line-height-171" style="color: #999;">
                        Price: <span style="color: #000;">$30</span> — <span style="color: #000;">$1,000</span>
                    </div>
                    <div class="item-16px"><a href="" class="cuahang__fillter__moreLink uk-link-toggle">Lọc</a></div>
                    <script>
                        Defer.css('https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css');
                        Defer.js('https://code.jquery.com/jquery-3.5.1.min.js','jquery',0, function () {
                            Defer.js('https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js','rangeSlider-js',0, function () {
                                var output1 = $(".js-output__d1");
                                $(".js-range-slider").ionRangeSlider({
                                    type: "double",
                                    min: 0,
                                    max: 1000,
                                    from: 30,
                                    to: 1000,
                                    max_postfix: "$",
                                    onStart: function (data) {
                                        output(data, output1);
                                        // console.log('onStart');
                                    },
                                    onChange: function (data) {
                                        output(data, output1);
                                        // console.log('onChange');
                                    },
                                    onFinish: function (data) {
                                        output(data, output1);
                                        // console.log('onFinish');
                                    },
                                    onUpdate: function (data) {
                                        output(data, output1);
                                        // console.log('onUpdate');
                                    }
                                });
                            })
                        })
                    </script>
                </div>
                <div class="cuahang__fillter__card uk-card border-15 uk-margin-top">
                    <h3 class="cuahang__fillter__title fz-16 be-vietnam-pro-semibold line-height-150">Hạng đánh giá</h3>
                    <div class="width-125px">
                        <?php
                        $k=5;
                        while ($k > 0) { ?>
                        <div class="uk-flex-middle uk-grid-small" uk-grid>
                            <div class="uk-width-expand">
                                <?php for ($j = 0; $j < $k; $j++) { ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_2409_75267)">
                                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFCC00"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2409_75267">
                                                <rect width="12" height="12" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                <?php } ?>
                            </div>
                            <div class="uk-width-auto">
                                <span class="fz-14 sora-300" style="color: #999;">(<?= rand(1,100) ?>)</span>
                            </div>
                        </div>
                        <?php $k--; } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-expand">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <h3 class="fz-18 sora-600 line-height-150">Kết quả tìm kiếm <span style="color: #966412;">(0)</span></h3>
                </div>
                <div class="uk-width-auto">
                    <div class="uk-grid-divider uk-grid-medium" uk-grid>
                        <div>
                            <div class="uk-flex uk-flex-middle" style="gap: 8px">
                                <span class="cuahang__icon cuahang__icon--sort"></span>
                                <span class="fz-12 sora-600">Sắp xếp</span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-flex uk-flex-middle" style="gap: 10px">
                                <span class="cuahang__icon cuahang__icon--grid"></span>
                                <span class="cuahang__icon cuahang__icon--list"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-h-10"></div>
            <div class="divider"></div>
            <div class="space-h-160"></div>
            <div class="uk-text-center">
                <div class="uk-cover-container uk-border-circle uk-flex-inline uk-margin-auto uk-margin-auto background-EDEBFC">
                    <svg class="uk-position-center" xmlns="http://www.w3.org/2000/svg" width="85" height="77" viewBox="0 0 85 77" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M41.2497 11.2751C40.5093 11.1631 39.7898 10.8839 39.1531 10.4378C30.3044 4.23727 17.8859 1.42738 8.64271 0.382903C4.0681 -0.134023 0.333008 3.68604 0.333008 8.39919V55.3357C0.333008 60.0489 4.0681 63.8703 8.64271 64.3873C17.8859 65.4317 30.3044 68.2416 39.1531 74.4422C39.7898 74.8883 40.5093 75.1674 41.2497 75.2795V11.2751ZM42.7497 75.2795C43.49 75.1674 44.2096 74.8883 44.8462 74.4422C47.7934 72.377 51.1366 70.688 54.6266 69.315C54.5427 68.5557 54.4997 67.7842 54.4997 67.0026C54.4997 55.4967 63.8271 46.1693 75.333 46.1693C78.2959 46.1693 81.1144 46.7878 83.6663 47.9028V8.39919C83.6663 3.68604 79.9312 -0.134023 75.3566 0.382903C66.1134 1.42738 53.695 4.23727 44.8462 10.4378C44.2096 10.8839 43.49 11.1631 42.7497 11.2751V75.2795ZM12.0918 22.1155C12.1552 21.7061 12.5385 21.4257 12.9478 21.4891C18.2589 22.3116 24.1973 23.6809 29.7702 25.8359C30.1565 25.9853 30.3486 26.4196 30.1992 26.8059C30.0498 27.1923 29.6155 27.3843 29.2292 27.2349C23.7835 25.1291 17.9553 23.7825 12.7182 22.9714C12.3089 22.908 12.0285 22.5248 12.0918 22.1155ZM12.9478 38.1558C12.5385 38.0924 12.1552 38.3728 12.0918 38.7822C12.0285 39.1915 12.3089 39.5747 12.7182 39.6381C15.3625 40.0476 18.1594 40.594 20.9829 41.3063C21.3845 41.4076 21.7922 41.1642 21.8936 40.7626C21.9949 40.3609 21.7514 39.9532 21.3498 39.8519C18.4758 39.1268 15.6326 38.5716 12.9478 38.1558ZM65.958 62.8359C65.958 59.9595 68.2899 57.6276 71.1663 57.6276C74.0428 57.6276 76.3747 59.9595 76.3747 62.8359C76.3747 65.7124 74.0428 68.0443 71.1663 68.0443C68.2899 68.0443 65.958 65.7124 65.958 62.8359ZM71.1663 51.3776C64.8381 51.3776 59.708 56.5077 59.708 62.8359C59.708 69.1642 64.8381 74.2943 71.1663 74.2943C73.1949 74.2943 75.1004 73.7671 76.7533 72.8423L79.3733 75.4623C80.5937 76.6827 82.5723 76.6827 83.7927 75.4623C85.0131 74.2419 85.0131 72.2633 83.7927 71.0429L81.1727 68.4229C82.0975 66.77 82.6247 64.8645 82.6247 62.8359C82.6247 56.5077 77.4946 51.3776 71.1663 51.3776Z" fill="#9747FF"/>
                    </svg>
                    <canvas width="180" height="180"></canvas>
                </div>
                <div class="item-24px fz-26 be-vietnam-pro-semibold line-height-138 text-000">Không có kết quả nào</div>
                <div class="item-12px fz-14 text-999 line-height-171">Bạn hãy thử tìm từ khóa khác</div>
            </div>
        </div>
    </div>
</div>
<div class="space-h-100"></div>
<div class="uk-container">
    <div class="uk-flex-middle uk-grid" uk-grid>
        <div class="uk-width-auto">
            <h2 class="common__title fz-36 be-vietnam-pro-semibold">Sách mới</h2>
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