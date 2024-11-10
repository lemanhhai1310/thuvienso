<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push;autoplay: true;pause-on-hover: false;">

    <div class="uk-slideshow-items uk-height-1-1 border-20">
        <?php for ($i = 0; $i < 3; $i++) { ?>
            <div>
                <a href="">
                    <img src="images/photo.jpg" alt="" uk-cover>
                </a>
            </div>
        <?php } ?>
    </div>

    <div class="uk-position-bottom-center uk-position-small position-20 uk-light uk-position-z-index-high">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div>
                <a class="" href uk-slidenav-previous1 uk-slideshow-item="previous">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M10 8L6 12M6 12L10 16M6 12L18 12" stroke="url(#paint0_linear_2209_11209)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                            <linearGradient id="paint0_linear_2209_11209" x1="18" y1="16" x2="16.9804" y2="3.87681" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFC01F"/>
                                <stop offset="1" stop-color="#FFF38C"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
            </div>
            <div>
                <ul class="common__slideshownav uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
            <div>
                <a class="" href uk-slidenav-next1 uk-slideshow-item="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M14 16L18 12M18 12L14 8M18 12L6 12" stroke="url(#paint0_linear_2209_11214)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                            <linearGradient id="paint0_linear_2209_11214" x1="6" y1="8" x2="7.01955" y2="20.1232" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFC01F"/>
                                <stop offset="1" stop-color="#FFF38C"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</div>