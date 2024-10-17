<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="autoplay: true;center: true;">

    <div class="uk-slider-items uk-child-width-auto uk-grid uk-grid-30">
        <?php
        $name = [
            'Marvin McKinney',
            'Kristin Watson',
            'Albert Flores',
            'Kristin Watson',
            'Theresa Webb',
            'Jacob Jones',
            'Ronald Richards',
            'Jerome Bell',
            'Kathryn Murphy',
            'Floyd Miles',
            'Albert Flores',
            'Leslie Alexander',
        ];
        for ($i = 0; $i < count($name); $i++) { ?>
            <div class="uk-inline-clip uk-transition-toggle">
                <div class="uk-cover-container border-16">
                    <img class="uk-transition-scale-up uk-transition-opaque" src="about:blank" uk-img data-src="https://picsum.photos/280/430/?random=<?= $i ?>" alt="" uk-cover>
                    <canvas width="280" height="430"></canvas>
                    <span class="home__sachmoi__label uk-position-top-right fz-20 be-vietnam-pro-semibold" style="color: #704500;">-20<span class="fz-12">%</span></span>
                    <a href="chi_tiet_sach.php" class="uk-position-cover"></a>
                </div>
                <div class="item-15px">
                    <h6 class="fz-20 be-vietnam-pro-semibold uk-margin-remove"><a href="chi_tiet_sach.php" class="uk-link-toggle be-vietnam-pro-semibold"><?= $name[$i]; ?></a></h6>
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

    <a class="position-160 common__slidenav common__slidenav--center common__slidenav--prev uk-position-top-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="position-160 common__slidenav common__slidenav--center common__slidenav--next uk-position-top-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

</div>