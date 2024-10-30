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
                    <h3 class="fz-18 sora-600 line-height-150">Kết quả tìm kiếm <span style="color: #966412;">(2)</span></h3>
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
            <div class="space-h-30"></div>
            <div class="uk-child-width-1-4 uk-grid-24" uk-grid>
                <?php
                $name = [
                    'Marvin McKinney',
                    'Kristin Watson',
                ];
                for ($i = 0; $i < count($name); $i++) { ?>
                    <div class="uk-inline-clip uk-transition-toggle row-gap-30">
                        <div class="uk-cover-container border-16">
                            <img class="uk-transition-scale-up uk-transition-opaque" src="about:blank" uk-img data-src="https://picsum.photos/280/430/?random=<?= $i ?>" alt="" uk-cover>
                            <canvas width="230" height="344"></canvas>
                            <span class="home__sachmoi__label uk-position-top-right fz-20 be-vietnam-pro-semibold" style="color: #704500;">-20<span class="fz-12">%</span></span>
                            <a href="chi_tiet_sach.php" class="uk-position-cover"></a>
                        </div>
                        <div class="item-15px">
                            <h6 class="fz-18 be-vietnam-pro-semibold uk-margin-remove line-height-133 uk-text-truncate"><a href="chi_tiet_sach.php" class="uk-link-toggle be-vietnam-pro-semibold"><?= $name[$i]; ?></a></h6>
                            <div class="item-8px">
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
                            <div class="item-8px fz-12 be-vietnam-pro-semibold" style="color: #999;">Nhà xuất bản Nhã Nam</div>
                            <div class="item-8px">
                                <span class="fz-18 be-vietnam-pro-semibold" style="color: #04C5BA;">170.000<span class="fz-16">đ</span></span>
                                <del class="fz-18 be-vietnam-pro-semibold" style="color: #999999; margin-left: 8px;">450.000<span class="fz-16">đ</span></del>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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