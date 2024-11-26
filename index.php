<?php $data["title"] = "Home"; ?>
<?php $isHome = true; ?>
<?php $isLogin = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
    <div class="space-h-30"></div>
    <div class="uk-container">
        <div class="uk-grid uk-grid-20 uk-grid-match" uk-grid>
            <div class="uk-width-auto">
                <div class="width-260px" style="width: 260px;">
                    <?php require "template-parts/layouts/categories-nav.php"; ?>
                </div>
            </div>
            <div class="uk-width-expand">
                <?php require "template-parts/layouts/slideshow.php"; ?>
            </div>
            <div class="uk-width-auto">
                <div class="width-260px uk-light uk-cover-container border-20" style="width: 260px;">
                    <img src="about:blank" uk-img data-src="images/slider1.jpeg" alt="" uk-cover="">
                    <canvas width="260" height="548"></canvas>
                    <a href="" class="uk-position-cover"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="space-h-50"></div>
    <div class="uk-container">
        <div class="uk-child-width-1-6 uk-grid-collapse" uk-grid>
            <?php
            $data = [
                [
                    'icon' => 'images/cateloge/icon1.png',
                    'text' => 'Sách giấy',
                ],
                [
                    'icon' => 'images/cateloge/icon2.png',
                    'text' => 'Sách điện tử',
                ],
                [
                    'icon' => 'images/cateloge/icon3.png',
                    'text' => 'Sách nói',
                ],
                [
                    'icon' => 'images/cateloge/icon4.png',
                    'text' => 'Bài giảng điện từ',
                ],
                [
                    'icon' => 'images/cateloge/icon5.png',
                    'text' => 'Video',
                ],
                [
                    'icon' => 'images/cateloge/icon6.png',
                    'text' => 'Tài liệu số',
                ],
            ];
            foreach ($data as $k=>$v): ?>
            <div>
                <div class="home__category__item uk-position-relative uk-text-center border-10 uk-box-shadow-hover-medium">
                    <img class="home__category__img" src="about:blank" uk-img data-src="<?= $v['icon'] ?>" alt="">
                    <div class="item-8px fz-16 be-vietnam-pro-semibold"><?= $v['text'] ?></div>
                    <a href="" class="uk-position-cover"></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="space-h-100"></div>
    <div class="uk-container">
        <div class="uk-flex-middle uk-grid" uk-grid>
            <div class="uk-width-auto">
                <h2 class="common__title fz-36 be-vietnam-pro-semibold">Sách bán chạy nhất</h2>
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
    <div class="uk-container">
        <div class="uk-flex-middle uk-grid" uk-grid>
            <div class="uk-width-auto">
                <h2 class="common__title fz-36 be-vietnam-pro-semibold">Nhiều lượt đọc nhất</h2>
            </div>
            <div class="uk-width-expand">
                <div class="common__line"></div>
            </div>
            <div class="uk-width-auto">
                <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
            </div>
        </div>
        <div class="space-h-60"></div>
        <div class="uk-grid uk-grid-match uk-grid-medium" uk-grid>
            <div class="uk-width-expand">
                <div class="home__luotdoc__card uk-cover-container uk-card uk-card-body border-20 uk-light uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/luotdoc/bg.jpeg" uk-img>
                    <div class="uk-position-bottom uk-position-z-index uk-position-medium">
                        <div class="uk-text-center" style="opacity: 0;">
                            <img src="about:blank" uk-img data-src="images/luotdoc/h1-img1.png" alt="">
                        </div>
                        <div style="opacity: 0;" class="item-12px home__luotdoc__card__txt1 fz-12 line-height-171 be-vietnam-pro-semibold uk-text-uppercase"><a href="">Khám phá ngay</a></div>
                        <div class="item-22px uk-flex-bottom" uk-grid>
                            <div class="uk-width-expand" style="opacity: 0;">
                                <h3 class="home__luotdoc__card__title fz-36 be-vietnam-pro-semibold line-height-120">
                                    Đầu sách hay <br> nhất tháng 8
                                </h3>
                            </div>
                            <div class="uk-width-auto">
                                <div style="opacity: 0;" class="uk-text-right home__luotdoc__card__txt2 line-height-170 fz-14 be-vietnam-pro-semibold">Nhanh tay trước khi hết nhé</div>
                                <div class="uk-margin-small-top uk-border-pill home__luotdoc__card__countdown be-vietnam-pro-semibold">
                                    <?php
                                    $datetime = new DateTime();
                                    date_add($datetime, date_interval_create_from_date_string("7 days"));
                                    $date = $datetime->format('c');
                                    //echo $datetime->format('c');
                                    ?>
                                    <div class="uk-grid-small uk-grid-2 uk-child-width-auto uk-flex-middle" uk-grid uk-countdown="date: <?= $date ?>">
                                        <div>
                                            <div class="uk-countdown-number uk-countdown-days fz-24"></div>
                                        </div>
                                        <div class="uk-countdown-separator fz-24">:</div>
                                        <div>
                                            <div class="uk-countdown-number uk-countdown-hours fz-24"></div>
                                        </div>
                                        <div class="uk-countdown-separator fz-24">:</div>
                                        <div>
                                            <div class="uk-countdown-number uk-countdown-minutes fz-24"></div>
                                        </div>
                                        <div class="uk-countdown-separator fz-24">:</div>
                                        <div>
                                            <div class="uk-countdown-number uk-countdown-seconds fz-24"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="images/photo.jpg" alt="" uk-cover="">
                    <canvas width="900" height="602"></canvas>
                </div>
            </div>
            <div class="uk-width-auto">
                <div class="width-350px" style="width: 350px !important;">
                    <?php
                    $name = [
                        'Darrell Steward',
                        'Courtney Henry',
                        'Jane Cooper',
                    ];
                    for ($i = 0; $i < 3; $i++) { ?>
                        <div class="home__luotdoc__item uk-inline-clip uk-transition-toggle">
                            <div class="uk-grid uk-grid-16 uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container border-16">
                                        <img class="uk-transition-scale-up uk-transition-opaque" src="about:blank" uk-img data-src="https://picsum.photos/120/184/?random=<?= $i ?>" alt="" uk-cover>
                                        <canvas width="120" height="184"></canvas>
                                        <a href="" class="uk-position-cover"></a>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h6 class="fz-16 be-vietnam-pro-semibold uk-margin-remove"><a href="" class="uk-link-toggle be-vietnam-pro-semibold"><?= $name[$i]; ?></a></h6>
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
                                    <div class="item-8px fz-12 sora-400" style="color: #999;">Dana Chambers</div>
                                    <div class="item-8px fz-18 be-vietnam-pro-semibold" style="color: #04C5BA;">170.000<span class="fz-16">đ</span></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="space-h-100"></div>
    <div class="home__banner1 uk-position-relative" style="--bg1:url(images/banner/bg1.png);">
        <div class="home__banner1__bg1 uk-position-cover"></div>
        <div class="uk-container uk-position-relative">
            <div class="uk-child-width-1-2 uk-flex-middle" uk-grid>
                <div>
                    <div class="uk-text-center">
                        <h5 class="home__banner1__txt1 uk-margin-remove-bottom fz-16 line-height-125 be-vietnam-pro-semibold">DEAL HOT CỦA THÁNG</h5>
                        <h2 class="item-22px line-height-122 fz-44 be-vietnam-pro-semibold home__banner1__txt2 uk-text-capitalize uk-margin-remove-bottom">
                            <span style="color: #F65D4E;">Giảm tới 50%</span> <br>
                            trên hàng trăm <br>
                            đầu sách
                        </h2>
                        <div class="item-22px home__banner1__txt3 fz-16 line-height-125 be-vietnam-pro-semibold" style="color: #F65D4E;">Đọc quyền qua mua hàng online</div>
                        <div class="item-22px">
                            <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Vào cửa hàng</a>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="about:blank" uk-img data-src="images/banner/digital-art-style-illustration-mental-health-day-awareness1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="space-h-100"></div>
    <div class="uk-container">
        <div class="uk-flex-middle uk-grid" uk-grid>
            <div class="uk-width-auto">
                <h2 class="common__title fz-36 be-vietnam-pro-semibold">Deal <span style="color: #FF0441;">HOT</span> của tuần</span></h2>
            </div>
            <div class="uk-width-expand">
                <div class="common__line"></div>
            </div>
            <div class="uk-width-auto">
                <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
            </div>
        </div>
        <div class="space-h-60"></div>
        <div class="uk-grid uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <?php require "template-parts/layouts/slider-product-3.php"; ?>
            </div>
            <div class="uk-width-1-3">
                <a href=""><img src="images/deal_hot/Frame3.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="space-h-100"></div>
    <div class="uk-container">
        <div class="uk-flex-middle uk-grid" uk-grid>
            <div class="uk-width-auto">
                <h2 class="common__title fz-36 be-vietnam-pro-semibold">Sách  chuyên ngành</span></h2>
            </div>
            <div class="uk-width-expand">
                <div class="common__line"></div>
            </div>
            <div class="uk-width-auto">
                <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
            </div>
        </div>
        <div class="space-h-60"></div>
        <div class="uk-grid uk-grid-24 uk-child-width-1-3 uk-grid-match" uk-grid>
            <?php
            $data = [
                [
                    'title' => 'Khoa học xã hội',
                    'text' => '',
                    'icon' => 'images/sach_chuyen_nganh/khxh.png',
                    'color' => '#EDEBFC',
                ],
                [
                    'title' => 'Công nghệ thông tin',
                    'text' => '',
                    'icon' => 'images/sach_chuyen_nganh/cntt.png',
                    'color' => '#E9F9FD',
                ],
                [
                    'title' => 'Xây dựng & Hạ tầng',
                    'text' => '',
                    'icon' => 'images/sach_chuyen_nganh/xh-ht.png',
                    'color' => '#E8F6E1',
                ],
            ];
            foreach ($data as $k=>$v): ?>
            <div>
                <div class="home__sachchuyennganh__card uk-card uk-card-body uk-box-shadow-hover-medium border-15 uk-position-relative">
                    <div class="uk-flex-middle uk-grid-16" uk-grid>
                        <div class="uk-width-auto">
                            <div class="uk-cover-container uk-border-circle" style="background-color: <?= $v['color'] ?>;">
                                <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                    <img src="about:blank" uk-img data-src="<?= $v['icon'] ?>" alt="">
                                </div>
                                <canvas width="80" height="80"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="fz-26 be-vietnam-pro-semibold line-height-123 uk-margin-remove"><?= $v['title'] ?></h3>
                            <div class="item-8px uk-text-uppercase line-height-166 fz-12 be-vietnam-pro-semibold" style="color: #999999;">130 đầu sách</div>
                        </div>
                    </div>
                    <a href="" class="uk-position-cover"></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="space-h-100"></div>
    <div class="uk-container">
        <div class="uk-flex-middle uk-grid" uk-grid>
            <div class="uk-width-auto">
                <h2 class="common__title fz-36 be-vietnam-pro-semibold">Sách  theo <span style="color: #966412;">Chủ đề</span></h2>
            </div>
            <div class="uk-width-expand">
                <div class="common__line"></div>
            </div>
            <div class="uk-width-auto">
                <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
            </div>
        </div>
        <div class="space-h-60"></div>
        <div class="uk-child-width-1-4 uk-grid-medium" uk-grid>
            <?php
            $data = [
                [
                    'img' => 'images/chude/flirty-21.png',
                    'txt' => 'Tình cảm',
                    'color' => '#D60F0F',
                ],
                [
                    'img' => 'images/chude/warrior1.png',
                    'txt' => 'Kỳ thú',
                    'color' => '#0E0038',
                ],
                [
                    'img' => 'images/chude/grandparents1.png',
                    'txt' => 'Hài hước',
                    'color' => '#FBD94F',
                ],
                [
                    'img' => 'images/chude/halloween1.png',
                    'txt' => 'Kinh dị',
                    'color' => '#000',
                ],
            ];
            foreach ($data as $k=>$v): ?>
            <div>
                <div class="home__chude__item uk-position-relative border-20 uk-light" style="background-color: <?= $v['color'] ?>;">
                    <img class="home__chude__img uk-position-bottom-right" src="about:blank" uk-img data-src="<?= $v['img'] ?>" alt="">
                    <div class="uk-cover-container">
                        <canvas width="298" height="200"></canvas>
                        <h6 class="home__chude__txt fz-20 be-vietnam-pro-semibold uk-padding-small border-10 uk-position-bottom-left uk-position-small"><?= $v['txt'] ?></h6>
                    </div>
                    <a href="" class="uk-position-cover"></a>
                </div>
            </div>
            <?php endforeach; ?>
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
    <div class="uk-container">
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-auto">
                <div class="home__tacgia__card border-20 uk-card uk-card-body width-380px" style="width: 380px !important;">
                    <h2 class="home__tacgia__title uk-margin-remove fz-26 be-vietnam-pro-semibold">Tác giả nổi tiếng</h2>
                    <div class="uk-margin-small-top">
                        <?php
                        $name = [
                            'Guy Hawkins',
                            'Leslie Alexander',
                            'Albert Flores',
                            'Robert Fox',
                            'Marvin McKinney',
                            'Darlene Robertson',
                            'Jane Cooper',
                            'Brooklyn Simmons',
                        ];
                        for ($i = 0; $i < 8; $i++) { ?>
                            <div class="<?= ($i == 0)?'uk-active':'' ?> home__tacgia__item border-14 uk-position-relative">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container border-15">
                                            <img src="about:blank" uk-img data-src="https://i.pravatar.cc/60?v=<?= $i ?>" alt="" uk-cover="">
                                            <canvas width="60" height="60"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h6 class="fz-16 be-vietnam-pro-semibold"><?= $name[$i] ?></h6>
                                    </div>
                                </div>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div>
                    <div class="uk-flex-middle uk-grid" uk-grid>
                        <div class="uk-width-auto">
                            <h2 class="common__title fz-36 be-vietnam-pro-semibold">Sách theo tác giả</h2>
                        </div>
                        <div class="uk-width-expand">
                            <div class="common__line"></div>
                        </div>
                        <div class="uk-width-auto">
                            <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
                        </div>
                    </div>
                    <div class="space-h-24"></div>
                    <div class="uk-inline-clip uk-transition-toggle">
                        <div class="uk-grid-42 uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container border-15">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="about:blank" uk-img data-src="https://picsum.photos/170/260/?random" alt="" uk-cover>
                                    <canvas width="170" height="260"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h6 class="fz-20 be-vietnam-pro-semibold uk-margin-remove"><a href="" class="uk-link-toggle be-vietnam-pro-semibold">Esther Howard</a></h6>
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
                                <div class="item-8px fz-14 sora-300" style="color: #444;">Est numquam harum aut ut. Pariatur cum blanditiis est delectus accusamus eveniet. Quis
                                    fugiat eligendi magni eos dignissimos numquam.</div>
                                <div class="item-8px fz-12 be-vietnam-pro-semibold" style="color: #999;">Nhà xuất bản Nhã Nam</div>
                                <div class="item-28px fz-18 be-vietnam-pro-semibold" style="color: #04C5BA;">170.000<span class="fz-16">đ</span></div>
                            </div>
                        </div>
                    </div>
                    <hr class="home__tacgia__divider">
                    <div class="uk-child-width-1-2 uk-grid-20" uk-grid>
                        <?php
                        $name = [
                            'Albert Flores',
                            'Esther Howard',
                            'Bessie Cooper',
                            'Kathryn Murphy',
                        ];
                        for ($i = 0; $i < 4; $i++) { ?>
                            <div class="home__tacgia__column22">
                                <div class="uk-inline-clip uk-transition-toggle">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <div class="uk-width-auto">
                                            <div class="uk-cover-container border-16">
                                                <img class="uk-transition-scale-up uk-transition-opaque" src="about:blank" uk-img data-src="https://picsum.photos/120/184/?random=<?= $i ?>" alt="" uk-cover>
                                                <canvas width="120" height="184"></canvas>
                                                <a href="" class="uk-position-cover"></a>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <h6 class="fz-18 be-vietnam-pro-semibold uk-margin-remove"><a href="" class="uk-link-toggle be-vietnam-pro-semibold"><?= $name[$i]; ?></a></h6>
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
                                            <div class="item-8px fz-12 be-vietnam-pro-semibold" style="color: #999;">NXB Nhã Nam</div>
                                            <div class="item-8px fz-18 be-vietnam-pro-semibold" style="color: #04C5BA;">170.000<span class="fz-16">đ</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-h-100"></div>
    <div class="uk-container">
        <div class="uk-grid-20 uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <!--Sách điện tử-->
                <div class="uk-flex-middle uk-grid" uk-grid>
                    <div class="uk-width-auto">
                        <h2 class="common__title fz-36 be-vietnam-pro-semibold">Sách điện tử</h2>
                    </div>
                    <div class="uk-width-expand">
                        <div class="common__line"></div>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
                    </div>
                </div>
                <div class="space-h-40"></div>
                <?php require "template-parts/layouts/slider-product-1.php"; ?>
                <div class="space-h-60"></div>
                <!--/Sách điện tử-->


                <!--Sách nói-->
                <div class="uk-flex-middle uk-grid" uk-grid>
                    <div class="uk-width-auto">
                        <h2 class="common__title fz-36 be-vietnam-pro-semibold">Sách nói</h2>
                    </div>
                    <div class="uk-width-expand">
                        <div class="common__line"></div>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
                    </div>
                </div>
                <div class="space-h-40"></div>
                <?php require "template-parts/layouts/slider-product-1.php"; ?>
                <div class="space-h-60"></div>
                <!--/Sách nói-->

                <!--Bài giảng điện tử-->
                <div class="uk-flex-middle uk-grid" uk-grid>
                    <div class="uk-width-auto">
                        <h2 class="common__title fz-36 be-vietnam-pro-semibold">Bài giảng điện tử</h2>
                    </div>
                    <div class="uk-width-expand">
                        <div class="common__line"></div>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
                    </div>
                </div>
                <div class="space-h-40"></div>
                <?php require "template-parts/layouts/slider-product-1.php"; ?>
                <!--/Bài giảng điện tử-->
            </div>
            <div class="uk-width-auto">
                <div class="uk-box-sizing-content width-326px home__top10__card uk-card uk-card-body border-20" style="width: 326px !important;">
                    <div class="home__top10__card__heading border-10"><h2 class="fz-20 be-vietnam-pro-semibold uk-margin-remove">Top 10 theo lượt đọc</h2></div>
                    <div class="home__top10__card__body">
                        <?php
                        $name = [
                            'Annie Leibovitz: Wonderland',
                            'Annie Leibovitz: Wonderland',
                            'Annie Leibovitz: Wonderland',
                            'Annie Leibovitz: Wonderland',
                            'Annie Leibovitz: Wonderland',
                            'Annie Leibovitz: Wonderland',
                            'Annie Leibovitz: Wonderland',
                            'Annie Leibovitz: Wonderland',
                            'Annie Leibovitz: Wonderland',
                            'Annie Leibovitz: Wonderland',
                        ];
                        for ($i = 0; $i < 10; $i++) { ?>
                            <div class="home__top10__card__item">
                                <div class="uk-grid-20 uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container border-10">
                                            <img src="about:blank" uk-img data-src="https://picsum.photos/80/112/?random=<?= $i ?>" alt="" uk-cover>
                                            <canvas width="80" height="112"></canvas>
                                            <a href="" class="uk-position-cover"></a>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h6 class="fz-16 be-vietnam-pro-semibold uk-margin-remove"><a href="" class="uk-link-toggle be-vietnam-pro-semibold"><?= $name[$i]; ?></a></h6>
                                        <div class="item-12px">
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
                                        <div class="item-6px fz-12 sora-400" style="color: #999;">Dana Chambers</div>
                                        <div class="item-6px fz-18 be-vietnam-pro-semibold" style="color: #04C5BA;">170.000<span class="fz-16">đ</span></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-h-100"></div>
    <div class="uk-container">
        <div class="uk-flex-middle uk-grid" uk-grid>
            <div class="uk-width-auto">
                <h2 class="common__title fz-36 be-vietnam-pro-semibold">Danh sách nhà xuất bản</h2>
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
    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="autoplay: true;">

        <div class="uk-slider-items uk-child-width-auto uk-grid uk-flex-middle uk-grid-80">
            <?php for ($i=1;$i<=20;$i++): ?>
            <div>
                <div class="uk-cover-container">
                    <div class="uk-position-cover uk-flex uk-flex-middle">
                        <img class="uk-object-contain" src="about:blank" uk-img data-src="images/nxb/<?= $i ?>.png" alt="">
                    </div>
                    <canvas width="120" height="120"></canvas>
                </div>
            </div>
            <?php endfor; ?>
        </div>

        <a class="position-160 common__slidenav common__slidenav--prev uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="position-160 common__slidenav common__slidenav--next uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

    </div>
    <div class="space-h-100"></div>
    <div class="uk-container">
        <div class="uk-flex-middle uk-grid" uk-grid>
            <div class="uk-width-auto">
                <h2 class="common__title fz-36 be-vietnam-pro-semibold">Tác giả nổi tiếng</h2>
            </div>
            <div class="uk-width-expand">
                <div class="common__line"></div>
            </div>
            <div class="uk-width-auto">
                <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
            </div>
        </div>
        <div class="space-h-60"></div>
        <div class="uk-grid uk-grid-8 uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: img; delay: 10; repeat: true">
            <div class="uk-width-auto">
                <div class="home__author__card uk-cover-container uk-light uk-inline-clip uk-transition-toggle">
                    <img class="home__author__img uk-transition-scale-up uk-transition-opaque" src="about:blank" data-src="https://i.pravatar.cc/367?v=0" uk-img alt="" uk-cover>
                    <div class="home__author__overlay uk-position-cover"></div>
                    <div class="position-30 uk-position-bottom uk-position-small">
                        <h3 class="be-vietnam-pro-semibold fz-26 uk-margin-remove">Randal Adkins</h3>
                        <div class="home__author__txt fz-16 be-vietnam-pro-semibold item-7px">12 Tác phẩm</div>
                    </div>
                    <a href="" class="uk-position-cover"></a>
                    <canvas width="367" height="520"></canvas>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-grid uk-grid-8 uk-child-width-1-5 uk-grid-match" uk-grid>
                    <?php
                    $name = [
                        'Jenny Wilson',
                        'Kristin Watson',
                        'Wade Warren',
                        'Arlene McCoy',
                        'Jane Cooper',
                        'Devon Lane',
                        'Jerome Bell',
                        'Ralph Edwards',
                        'Cameron Willi',
                        'Jacob Jones',
                    ];
                    for ($i=1;$i<=10;$i++): ?>
                    <div>
                        <div class="home__author__card uk-cover-container uk-light uk-inline-clip uk-transition-toggle">
                            <img class="home__author__img uk-transition-scale-up uk-transition-opaque" src="about:blank" data-src="https://i.pravatar.cc/175?v=<?= $i ?>" uk-img alt="" uk-cover>
                            <div class="home__author__overlay uk-position-cover"></div>
                            <div class="position-16 uk-position-bottom uk-position-small">
                                <h3 class="be-vietnam-pro-semibold fz-16 uk-margin-remove"><?= $name[$i-1] ?></h3>
                            </div>
                            <a href="" class="uk-position-cover"></a>
                            <canvas width="175" height="255"></canvas>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="space-h-100"></div>
<?php require "template-parts/layouts/footer.php"; ?>