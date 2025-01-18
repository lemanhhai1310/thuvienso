
<?php $data["title"] = "Chi tiết tin tức"; ?>
<?php $isHome = false; ?>
<?php $isLogin = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <div class="space-h-20"></div>
    <nav class="" aria-label="Breadcrumb">
        <ul class="breadcrumb uk-breadcrumb uk-margin-remove">
            <li><a href=".">Trang chủ</a></li>
            <li><a href="">tin tức</a></li>
            <li><span aria-current="page">The best children’s and YA books of 2024</span></li>
        </ul>
    </nav>
    <div class="space-h-60"></div>
    <div class="uk-grid uk-grid-20" uk-grid>
        <div class="uk-width-expand">
            <h1 class="fz-20 uk-margin-remove be-vietnam-pro-semibold text-000 line-height-158">The best children's and ya books of 2024</h1>
            <div class="item-12px fz-16 text-5E5D5A line-height-150 be-vietnam-pro-medium">Thứ ba, 18/06/2024</div>
            <div class="item-12px text-2A2928 fz-16 line-height-150 be-vietnam-pro-semibold">Lorem ipsum dolor sit amet consectetur. At enim penatibus purus purus rutrum arcu eget mattis nulla. Adipiscing mauris amet nullam lobortis blandit. Nec nullam pellentesque dolor consectetur ut cursus. Dui urna orci at aliquam adipiscing.</div>
            <div class="item-12px uk-cover-container">
                <img src="https://picsum.photos/910/331/?random=" alt="" uk-cover="">
                <canvas width="910" height="331"></canvas>
            </div>
            <article class="uk-article item-12px text-5E5D5A fz-14 be-vietnam-pro-medium line-height-142">
                <p>Lorem ipsum dolor sit amet consectetur. Ipsum diam risus egestas tortor sollicitudin egestas adipiscing dictum in. Metus id nisi fringilla odio molestie ut. Sodales tristique duis id dignissim. Cras consectetur consequat enim massa faucibus orci habitasse. Tincidunt lobortis feugiat tempor viverra scelerisque. Leo posuere dolor eget morbi pellentesque sed imperdiet sed sed. Tincidunt convallis amet mi vel a in. Nunc imperdiet cursus dolor augue et elementum massa in lacus. Scelerisque nisl condimentum maecenas venenatis mattis ac nunc. In felis vivamus gravida ultricies. Vitae dictum vulputate et convallis eget risus.</p>
                <p>Scelerisque et diam vitae urna a feugiat tristique. Dis cursus luctus nisi lobortis dignissim nam est enim. Lorem habitant justo mollis aliquam arcu tortor. Adipiscing sed dictum id bibendum imperdiet egestas. Tristique leo velit porta proin fermentum porttitor feugiat. Mattis libero tellus pulvinar scelerisque aliquam donec velit. Nisl amet eu mauris massa dictum ultricies semper. Accumsan orci ultrices vestibulum orci enim id commodo. Hendrerit convallis non arcu nibh tellus nisi egestas nulla. Nisl feugiat dui tellus aenean amet. Montes diam enim eu volutpat quisque lectus eget non laoreet. Massa eget egestas elit in amet non elementum. Quis aliquam imperdiet ipsum ultrices sed.</p>
                <p>Libero dui justo tincidunt etiam phasellus fringilla. Praesent praesent imperdiet tempus nisi. Vel ac id id maecenas diam luctus pharetra. Eget a aliquam faucibus mattis porttitor vel vestibulum. A non pellentesque dictum at integer. In sed massa ultricies ac. Dolor amet cum viverra aliquam et cursus sollicitudin ut. Enim commodo ultrices nulla auctor etiam volutpat cras ipsum. Mauris phasellus netus in dui viverra. Ut purus nulla suspendisse ullamcorper auctor. Ac posuere netus tortor praesent nunc libero et eget turpis.</p>
                <p>Eget a quam et neque vel. Maecenas diam etiam amet nisl diam et non. Posuere sagittis egestas at et faucibus facilisis sollicitudin lorem quam. Est mus rhoncus amet scelerisque proin massa faucibus mauris. Augue velit nibh integer amet. Feugiat aliquet vitae augue est tellus eu massa. Malesuada volutpat nullam risus tincidunt metus lacus quam amet.</p>
            </article>
        </div>
        <div class="uk-width-1-3">
            <div class="tintuc__card uk-card uk-card-body border-20">
                <div class="uk-grid uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h3 class="fz-20 be-vietnam-pro-semibold text-000">Tin nổi bật</h3>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
                    </div>
                </div>
                <?php for ($j = 0; $j < 5; $j++) { ?>
                    <div class="tintuc__sidebar__item">
                        <div class="uk-grid uk-grid-12" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container border-8">
                                    <img src="https://picsum.photos/101/101/?random=<?= $j ?>" alt="" uk-cover>
                                    <canvas width="101" height="101"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h4 class="line-clamp-2 uk-margin-remove fz-18 line-height-133 text-000 be-vietnam-pro-medium"><a href="" class="uk-link-toggle">Office ipsum you must be muted. Hiring only box algorithm these tent any strategies.</a></h4>
                                <div class="line-clamp-2 item-8px fz-14 line-height-142 be-vietnam-pro-medium text-5E5D5A">Lorem ipsum dolor sit amet consectetur. At enim penatibus purus purus rutrum arcu eget mattis nulla. Adipiscing mauris amet nullam lobortis blandit. Nec nullam pellentesque dolor consectetur ut cursus. Dui urna orci at aliquam adipiscing.</div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="uk-flex-middle uk-grid uk-grid-12" uk-grid>
        <div class="uk-width-auto">
            <h2 class="fz-20 be-vietnam-pro-semibold text-000">Bài viết cùng thể loại</h2>
        </div>
        <div class="uk-width-expand">
            <div class="common__line"></div>
        </div>
        <div class="uk-width-auto">
            <a href="" class="common__btnAll be-vietnam-pro-semibold fz-16 uk-button uk-button-default uk-border-pill">Xem tất cả</a>
        </div>
    </div>
    <div class="uk-child-width-1-4 uk-grid uk-grid-40" uk-grid>
        <?php for ($i = 0; $i < 16; $i++) { ?>
            <div>
                <div class="uk-cover-container border-10">
                    <img src="https://picsum.photos/290/153/?random=<?= $i ?>" alt="" uk-cover>
                    <canvas width="290" height="153"></canvas>
                    <a href="" class="uk-position-cover"></a>
                </div>
                <h4 class="line-clamp-3 text-000 be-vietnam-pro-medium fz-20 line-height-140 item-16px"><a href="" class="uk-link-toggle">Internet of Things: Connecting the World in the Digital Era</a></h4>
            </div>
        <?php } ?>
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