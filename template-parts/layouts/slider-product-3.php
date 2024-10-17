<div uk-slider>

    <div class="uk-position-relative">

        <div class="uk-slider-container">
            <div class="uk-slider-items uk-child-width-1-1" uk-grid>
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
                    'Marvin McKinney',
                    'Kristin Watson',
                    'Albert Flores',
                ];
                $num = 0;
                $post_per_page = 8;
                $counter = count($name);
                for ($i = 0; $i < $counter; $i++) { ?>
                    <?php if ($num % $post_per_page == 0): ?>
                    <div><div class="uk-child-width-1-4 uk-grid-20" uk-grid>
                    <?php endif; ?>
                    <div class="uk-inline-clip uk-transition-toggle row-gap-30">
                        <div class="uk-cover-container border-16">
                            <img class="uk-transition-scale-up uk-transition-opaque" src="about:blank" uk-img data-src="https://picsum.photos/205/314/?random=<?= $i ?>" alt="" uk-cover>
                            <canvas width="205" height="314"></canvas>
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
                            <div class="item-8px fz-18 be-vietnam-pro-semibold" style="color: #04C5BA;">170.000<span class="fz-16">đ</span></div>
                        </div>
                    </div>
                    <?php if ($num % $post_per_page == $post_per_page - 1 || $num == $counter - 1): ?>
                        </div></div>
                    <?php endif; ?>
                <?php $num++; } ?>
            </div>
        </div>

        <div class="uk-hidden@s uk-light">
            <a class="common__slidenav common__slidenav--prev uk-position-center-left uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="common__slidenav common__slidenav--next uk-position-center-right uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
        </div>

        <div class="uk-visible@s">
            <a class="position-center common__slidenav common__slidenav--prev uk-position-center-left-out uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="position-center common__slidenav common__slidenav--next uk-position-center-right-out uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
        </div>

    </div>

    <ul class="common__dotnav uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-grid-16" uk-grid></ul>

</div>