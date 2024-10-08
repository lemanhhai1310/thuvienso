<div uk-slider>

    <div class="uk-position-relative">

        <div class="uk-slider-container">
            <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-medium" uk-grid>
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
                            <img class="uk-transition-scale-up uk-transition-opaque" src="about:blank" uk-img data-src="https://picsum.photos/205/314/?random=<?= $i ?>" alt="" uk-cover>
                            <canvas width="205" height="314"></canvas>
                            <a href="" class="uk-position-cover"></a>
                        </div>
                        <div class="item-15px">
                            <h6 class="fz-20 be-vietnam-pro-semibold uk-margin-remove"><a href="" class="uk-link-toggle be-vietnam-pro-semibold"><?= $name[$i]; ?></a></h6>
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
                <?php } ?>
            </div>
        </div>

        <div class="uk-hidden@s uk-light">
            <a class="common__slidenav common__slidenav--prev uk-position-center-left uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="common__slidenav common__slidenav--next uk-position-center-right uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
        </div>

        <div class="uk-visible@s">
            <a class="position-center common__slidenav common__slidenav--center-out common__slidenav--prev uk-position-center-left-out uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="position-center common__slidenav common__slidenav--center-out common__slidenav--next uk-position-center-right-out uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
        </div>

    </div>

    <ul class="uk-slider-nav uk-hidden uk-dotnav uk-flex-center uk-margin"></ul>

</div>