<?php $projectName = "Thư viện số"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <!-- Add Defer.js here -->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js@3.8.0/dist/defer.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@100..800&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>

    <style>
        .be-vietnam-pro-thin {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .be-vietnam-pro-extralight {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .be-vietnam-pro-light {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .be-vietnam-pro-regular {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .be-vietnam-pro-medium {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .be-vietnam-pro-semibold {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .be-vietnam-pro-bold {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .be-vietnam-pro-extrabold {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .be-vietnam-pro-black {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .be-vietnam-pro-thin-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .be-vietnam-pro-extralight-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 200;
            font-style: italic;
        }

        .be-vietnam-pro-light-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .be-vietnam-pro-regular-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .be-vietnam-pro-medium-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .be-vietnam-pro-semibold-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 600;
            font-style: italic;
        }

        .be-vietnam-pro-bold-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .be-vietnam-pro-extrabold-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 800;
            font-style: italic;
        }

        .be-vietnam-pro-black-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 900;
            font-style: italic;
        }
        .sora-100 {
           font-family: "Sora", sans-serif;
           font-optical-sizing: auto;
           font-weight: 100;
           font-style: normal;
        }
        .sora-200 {
            font-family: "Sora", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
        }
        .sora-300 {
            font-family: "Sora", sans-serif;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;
        }
        .sora-400 {
            font-family: "Sora", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }
        .sora-500 {
            font-family: "Sora", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }
        .sora-600 {
            font-family: "Sora", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }
        .sora-700 {
            font-family: "Sora", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
        }
        .sora-800 {
            font-family: "Sora", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
        }
    </style>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <header class="header uk-background-default z-index-993 uk-position-relative">
        <nav class="header__top uk-navbar-container uk-light">
            <div class="uk-container">
                <div uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                            <a href="" class="header__top__icon header__top__icon--map uk-link-toggle fz-12 be-vietnam-pro-semibold">Tìm kiếm cửa hàng</a>
                        </div>
                        <div class="uk-navbar-item">
                            <a href="tel:+84 987.789.675" class="header__top__icon header__top__icon--phone uk-link-toggle fz-12 be-vietnam-pro-semibold">+84 987.789.675</a>
                        </div>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item">
                            <ul class="header__top__iconnav uk-iconnav uk-grid-6 uk-grid" uk-grid>
                                <li><a href="#" uk-icon="icon: facebook"></a></li>
                                <li><a href="#" uk-icon="icon: x"></a></li>
                                <li><a href="#" uk-icon="icon: instagram"></a></li>
                                <li><a href="#" uk-icon="icon: pinterest"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="header__center uk-navbar-container uk-navbar-transparent">
            <div class="uk-container">
                <div uk-navbar>
                    <div class="uk-navbar-left uk-flex-1">
                        <a href="." class="uk-navbar-item uk-logo"><img style="height: 60px;" src="images/logo.jpg" alt=""></a>
                        <div class="uk-navbar-item uk-flex-auto">
                            <div class="uk-inline uk-width">
                                <form class="uk-search uk-search-default uk-width">
                                    <input class="header__center__search__input fz-14 be-vietnam-pro-semibold uk-search-input uk-border-pill" type="search" placeholder="Tìm kiếm sách theo tên" aria-label="Tìm kiếm sách theo tên">
                                    <span class="header__center__search__icon uk-search-icon-flip" uk-search-icon></span>
                                </form>
                                <div class="border-10 search__dropdown uk-width" uk-dropdown="toggle: .header__center__search__input; mode: click">
                                    <div class="sora-600 text-9F9595 fz-16">Xu hướng</div>
                                    <div class="space-h-16"></div>
                                    <div class="divider"></div>
                                    <div class="space-h-16"></div>
                                    <div class="uk-grid uk-grid-14 row-gap-16" uk-grid>
                                        <?php
                                        $data = [
                                            'Dianne Russell',
                                            'Kristin Watson',
                                            'McCoy',
                                            'Arlene McCoy',
                                            'Savannah Nguyen',
                                        ];
                                        foreach ($data as $k=>$v): ?>
                                        <div>
                                            <label class="search__label uk-border-pill background-F6F6F6">
                                                <?= $v ?>
                                                <ul class="uk-iconnav">
                                                    <li><a href="#" uk-icon="icon: close; ratio: .8"></a></li>
                                                </ul>
                                            </label>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="space-h-32"></div>
                                    <div class="sora-600 text-9F9595 fz-16">Lịch sử tìm kiếm</div>
                                    <div class="space-h-16"></div>
                                    <div class="divider"></div>
                                    <div class="space-h-16"></div>
                                    <div>
                                        <?php
                                        $data = [
                                            'Phong thủy ứng dụng',
                                            'Cuộc cách mạng tiền mã',
                                            '[Sách nói] Nội thất và thiết kế nội thất - Tập 1',
                                        ];
                                        foreach ($data as $k=>$v): ?>
                                        <div class="search__item border-8" style="padding: 12px">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="fz-14 be-vietnam-pro-medium text-000"><?= $v ?></div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <a href="" class="icon24 icon24--share"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <script>
                                    // UIkit.dropdown('.search__dropdown').show();
                                </script>
                            </div>
                        </div>
                        <div class="uk-navbar-item">
                            <div class="uk-grid-12" uk-grid>
                                <div>
                                    <a href="giohang.php" class="header__center__btn header__center__btn--cart uk-button uk-button-primary uk-border-pill fz-16 be-vietnam-pro-semibold">
                                        <div class="uk-position-relative uk-light">
                                            <span class="fz-10">23</span>
                                        </div>
                                        Giỏ hàng
                                    </a>
                                </div>
                                <?php if (isset($isLogin) && $isLogin): ?>
                                    <div>
                                        <a href="sachdamua.php" style="padding-left: 5px;" class="header__center__btn header__center__btn--login uk-button uk-button-primary uk-border-pill fz-16 be-vietnam-pro-semibold">
                                            <div class="uk-cover-container uk-border-circle uk-flex-inline">
                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                <canvas width="34" height="34"></canvas>
                                            </div>
                                            Nguyễn Trung Kiên
                                        </a>
                                        <div class="width-518px thongbao__dropdown border-10 uk-overflow-auto" uk-dropdown="pos: bottom-right">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="text-000 be-vietnam-pro-semibold fz-16 line-height-125">Thông báo</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <a href="" class="thongbao__linkAll uk-link-toggle fz-12 text-5E5D5A be-vietnam-pro-semibold">Đánh dấu đọc tất cả</a>
                                                </div>
                                            </div>
                                            <div class="space-h-24"></div>
                                            <div class="thongbao__boxTop background-F6F6F6 uk-border-pill">
                                                <div class="uk-grid uk-grid-16 uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="icon30 icon30--ring"></div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <div class="text-000 be-vietnam-pro-semibold fz-16 line-height-125">Thông báo</div>
                                                        <div class="item-2px fz-12 be-vietnam-pro-semibold line-height-133 text-9F9595">Hiển thị tất cả các thông báo mới nhất</div>
                                                    </div>
                                                    <div class="uk-width-auto">
                                                        <label>
                                                            <input class="thongbao__check uk-checkbox uk-hidden" type="checkbox" checked>
                                                            <div class="thongbao__switch uk-border-pill">

                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space-h-24"></div>
                                            <div class="fz-16 text-9F9595 sora-600">Hôm nay</div>
                                            <div class="space-h-16"></div>
                                            <div class="divider"></div>
                                            <div class="space-h-16"></div>
                                            <div>
                                                <div class="thongbao__item border-16 un-read">
                                                    <div class="uk-flex-middle uk-grid uk-grid-16" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-cover-container uk-border-circle background-E8F6E1">
                                                                <svg class="uk-position-center" xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.25 3.5971C12.2146 3.5765 12.1799 3.55432 12.146 3.53056C9.49141 1.6704 5.76588 0.827433 2.99291 0.51409C1.62053 0.359012 0.5 1.50503 0.5 2.91897V16.9999C0.5 18.4139 1.62053 19.5603 2.99291 19.7154C5.76588 20.0287 9.49141 20.8717 12.146 22.7319C12.1799 22.7556 12.2146 22.7778 12.25 22.7984V3.5971ZM13.75 22.7984C13.7854 22.7778 13.8201 22.7556 13.854 22.7319C14.7381 22.1123 15.7411 21.6056 16.7881 21.1937C16.7629 20.9659 16.75 20.7345 16.75 20.5C16.75 17.0482 19.5482 14.25 23 14.25C23.8889 14.25 24.7344 14.4356 25.5 14.7701V2.91897C25.5 1.50503 24.3795 0.359012 23.0071 0.51409C20.2341 0.827433 16.5086 1.6704 13.854 3.53056C13.8201 3.55432 13.7854 3.5765 13.75 3.5971V22.7984ZM3.50884 6.95352C3.57223 6.54418 3.95545 6.26374 4.36478 6.32713C5.984 6.5779 7.80415 6.99661 9.52051 7.66033C9.90684 7.80972 10.0989 8.24402 9.94952 8.63035C9.80012 9.01668 9.36583 9.20876 8.97949 9.05936C7.39029 8.44482 5.68044 8.04877 4.13522 7.80946C3.72588 7.74607 3.44544 7.36285 3.50884 6.95352ZM4.36478 11.3271C3.95545 11.2637 3.57223 11.5442 3.50884 11.9535C3.44544 12.3628 3.72588 12.7461 4.13522 12.8095C4.91433 12.9301 5.73721 13.0909 6.56653 13.3002C6.96815 13.4015 7.37588 13.158 7.47721 12.7564C7.57854 12.3548 7.3351 11.9471 6.93347 11.8457C6.05354 11.6237 5.18439 11.4541 4.36478 11.3271ZM20.1875 19.25C20.1875 18.3871 20.8871 17.6875 21.75 17.6875C22.6129 17.6875 23.3125 18.3871 23.3125 19.25C23.3125 20.1129 22.6129 20.8125 21.75 20.8125C20.8871 20.8125 20.1875 20.1129 20.1875 19.25ZM21.75 15.8125C19.8515 15.8125 18.3125 17.3515 18.3125 19.25C18.3125 21.1485 19.8515 22.6875 21.75 22.6875C22.3586 22.6875 22.9302 22.5293 23.4261 22.2519L24.2121 23.0379C24.5782 23.404 25.1718 23.404 25.5379 23.0379C25.904 22.6718 25.904 22.0782 25.5379 21.7121L24.7519 20.9261C25.0293 20.4302 25.1875 19.8586 25.1875 19.25C25.1875 17.3515 23.6485 15.8125 21.75 15.8125Z" fill="#72C949"/>
                                                                </svg>
                                                                <canvas width="60" height="60"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div uk-grid>
                                                                <div class="uk-width-expand">
                                                                    <div class="uk-text-truncate text-000 be-vietnam-pro-semibold line-height-142">Tác phẩm mới của Nguyễn Nhật Ánh</div>
                                                                </div>
                                                                <div class="uk-width-auto">
                                                                    <div class="fz-12 be-vietnam-pro-semibold line-height-133 text-9F9595">3 giờ trước</div>
                                                                </div>
                                                            </div>
                                                            <div class="item-6px line-clamp-2 fz-12 text-5E5D5A be-vietnam-pro-medium">Chào mừng bạn đến với kho sách mới của chúng tôi. Hàng trăm đầu sách mới từ các tác giả nổi tiếng đã sẵn sàng cho bạn khám phá. Đừng bỏ lỡ!</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="uk-position-cover"></a>
                                                </div>
                                                <div class="thongbao__item border-16 un-read">
                                                    <div class="uk-flex-middle uk-grid uk-grid-16" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-cover-container uk-border-circle background-E9F9FD">
                                                                <svg class="uk-position-center" xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.79458 0.959639C1.37126 0.903856 0.984237 1.21253 0.930144 1.64908C0.876052 2.08564 1.17537 2.48475 1.5987 2.54053C5.12614 3.00536 7.89105 3.68255 10.7733 5.06112C13.5645 6.39617 16.5001 8.40542 20.358 11.5782H19.2118C18.785 11.5782 18.4391 11.935 18.4391 12.3751C18.4391 12.8152 18.785 13.172 19.2118 13.172H21.2724C22.2682 13.172 23.0754 12.3395 23.0754 11.3126V9.18759C23.0754 8.74748 22.7295 8.39071 22.3027 8.39071C21.8759 8.39071 21.53 8.74748 21.53 9.18759V10.5039C17.5293 7.19899 14.4272 5.05199 11.4235 3.61531C8.35151 2.14597 5.41963 1.43732 1.79458 0.959639ZM1.69662 10.1856C1.69662 9.04756 2.61918 8.125 3.75722 8.125C4.89526 8.125 5.81783 9.04756 5.81783 10.1856L5.81783 20.9394C5.81783 22.0774 4.89527 23 3.75722 23C2.61918 23 1.69662 22.0774 1.69662 20.9394L1.69662 10.1856ZM18.1815 18.6856C18.1815 17.5476 19.1041 16.625 20.2421 16.625C21.3802 16.625 22.3027 17.5476 22.3027 18.6856V20.9394C22.3027 22.0774 21.3802 23 20.2421 23C19.1041 23 18.1815 22.0774 18.1815 20.9394V18.6856ZM11.9996 12.375C10.8616 12.375 9.93904 13.2976 9.93904 14.4356V20.9394C9.93904 22.0774 10.8616 23 11.9996 23C13.1377 23 14.0603 22.0774 14.0603 20.9394V14.4356C14.0603 13.2976 13.1377 12.375 11.9996 12.375Z" fill="#4DC1DB"/>
                                                                </svg>
                                                                <canvas width="60" height="60"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div uk-grid>
                                                                <div class="uk-width-expand">
                                                                    <div class="uk-text-truncate text-000 be-vietnam-pro-semibold line-height-142">Tác phẩm mới của Nguyễn Nhật Ánh</div>
                                                                </div>
                                                                <div class="uk-width-auto">
                                                                    <div class="fz-12 be-vietnam-pro-semibold line-height-133 text-9F9595">02/10/2024 </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-6px line-clamp-2 fz-12 text-5E5D5A be-vietnam-pro-medium">Chào mừng bạn đến với kho sách mới của chúng tôi. Hàng trăm đầu sách mới từ các tác giả nổi tiếng đã sẵn sàng cho bạn khám phá. Đừng bỏ lỡ!</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="uk-position-cover"></a>
                                                </div>
                                                <div class="thongbao__item border-16 un-read">
                                                    <div class="uk-flex-middle uk-grid uk-grid-16" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-cover-container uk-border-circle background-EDEBFC">
                                                                <svg class="uk-position-center" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8068 3.75H16.1932C17.5111 3.75 18.5796 4.75736 18.5796 6C18.5796 7.42202 20.101 8.3261 21.35 7.64622L21.4769 7.57717C22.6182 6.95585 24.0777 7.32457 24.7367 8.40073L25.9299 10.3493C26.5889 11.4254 26.1978 12.8015 25.0564 13.4228C23.8069 14.103 23.8069 15.897 25.0564 16.5772C26.1978 17.1985 26.5889 18.5746 25.9299 19.6507L24.7367 21.5993C24.0777 22.6754 22.6182 23.0441 21.4769 22.4228L21.35 22.3538C20.101 21.6739 18.5796 22.578 18.5796 24C18.5796 25.2426 17.5111 26.25 16.1932 26.25H13.8068C12.4889 26.25 11.4204 25.2426 11.4204 24C11.4204 22.578 9.89896 21.6739 8.65 22.3538L8.52314 22.4228C7.38176 23.0442 5.92228 22.6754 5.2633 21.5993L4.07011 19.6507C3.41113 18.5746 3.8022 17.1985 4.94358 16.5772C6.19314 15.897 6.19314 14.103 4.94359 13.4228C3.8022 12.8015 3.41113 11.4254 4.07011 10.3493L5.2633 8.40071C5.92228 7.32455 7.38176 6.95584 8.52314 7.57716L8.65 7.64621C9.89896 8.32609 11.4204 7.42202 11.4204 6C11.4204 4.75736 12.4889 3.75 13.8068 3.75ZM15 18.75C17.0711 18.75 18.75 17.0711 18.75 15C18.75 12.9289 17.0711 11.25 15 11.25C12.9289 11.25 11.25 12.9289 11.25 15C11.25 17.0711 12.9289 18.75 15 18.75Z" fill="#7261D4"/>
                                                                </svg>
                                                                <canvas width="60" height="60"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div uk-grid>
                                                                <div class="uk-width-expand">
                                                                    <div class="uk-text-truncate text-000 be-vietnam-pro-semibold line-height-142">Tác phẩm mới của Nguyễn Nhật Ánh</div>
                                                                </div>
                                                                <div class="uk-width-auto">
                                                                    <div class="fz-12 be-vietnam-pro-semibold line-height-133 text-9F9595">02/10/2024 </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-6px line-clamp-2 fz-12 text-5E5D5A be-vietnam-pro-medium">Chào mừng bạn đến với kho sách mới của chúng tôi. Hàng trăm đầu sách mới từ các tác giả nổi tiếng đã sẵn sàng cho bạn khám phá. Đừng bỏ lỡ!</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="uk-position-cover"></a>
                                                </div>
                                            </div>
                                            <div class="space-h-30"></div>
                                            <div class="fz-16 text-9F9595 sora-600">Hôm qua</div>
                                            <div class="space-h-16"></div>
                                            <div class="divider"></div>
                                            <div class="space-h-16"></div>
                                            <div>
                                                <div class="thongbao__item border-16">
                                                    <div class="uk-flex-middle uk-grid uk-grid-16" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-cover-container uk-border-circle background-E8F6E1">
                                                                <svg class="uk-position-center" xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.25 3.5971C12.2146 3.5765 12.1799 3.55432 12.146 3.53056C9.49141 1.6704 5.76588 0.827433 2.99291 0.51409C1.62053 0.359012 0.5 1.50503 0.5 2.91897V16.9999C0.5 18.4139 1.62053 19.5603 2.99291 19.7154C5.76588 20.0287 9.49141 20.8717 12.146 22.7319C12.1799 22.7556 12.2146 22.7778 12.25 22.7984V3.5971ZM13.75 22.7984C13.7854 22.7778 13.8201 22.7556 13.854 22.7319C14.7381 22.1123 15.7411 21.6056 16.7881 21.1937C16.7629 20.9659 16.75 20.7345 16.75 20.5C16.75 17.0482 19.5482 14.25 23 14.25C23.8889 14.25 24.7344 14.4356 25.5 14.7701V2.91897C25.5 1.50503 24.3795 0.359012 23.0071 0.51409C20.2341 0.827433 16.5086 1.6704 13.854 3.53056C13.8201 3.55432 13.7854 3.5765 13.75 3.5971V22.7984ZM3.50884 6.95352C3.57223 6.54418 3.95545 6.26374 4.36478 6.32713C5.984 6.5779 7.80415 6.99661 9.52051 7.66033C9.90684 7.80972 10.0989 8.24402 9.94952 8.63035C9.80012 9.01668 9.36583 9.20876 8.97949 9.05936C7.39029 8.44482 5.68044 8.04877 4.13522 7.80946C3.72588 7.74607 3.44544 7.36285 3.50884 6.95352ZM4.36478 11.3271C3.95545 11.2637 3.57223 11.5442 3.50884 11.9535C3.44544 12.3628 3.72588 12.7461 4.13522 12.8095C4.91433 12.9301 5.73721 13.0909 6.56653 13.3002C6.96815 13.4015 7.37588 13.158 7.47721 12.7564C7.57854 12.3548 7.3351 11.9471 6.93347 11.8457C6.05354 11.6237 5.18439 11.4541 4.36478 11.3271ZM20.1875 19.25C20.1875 18.3871 20.8871 17.6875 21.75 17.6875C22.6129 17.6875 23.3125 18.3871 23.3125 19.25C23.3125 20.1129 22.6129 20.8125 21.75 20.8125C20.8871 20.8125 20.1875 20.1129 20.1875 19.25ZM21.75 15.8125C19.8515 15.8125 18.3125 17.3515 18.3125 19.25C18.3125 21.1485 19.8515 22.6875 21.75 22.6875C22.3586 22.6875 22.9302 22.5293 23.4261 22.2519L24.2121 23.0379C24.5782 23.404 25.1718 23.404 25.5379 23.0379C25.904 22.6718 25.904 22.0782 25.5379 21.7121L24.7519 20.9261C25.0293 20.4302 25.1875 19.8586 25.1875 19.25C25.1875 17.3515 23.6485 15.8125 21.75 15.8125Z" fill="#72C949"/>
                                                                </svg>
                                                                <canvas width="60" height="60"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div uk-grid>
                                                                <div class="uk-width-expand">
                                                                    <div class="uk-text-truncate text-000 be-vietnam-pro-semibold line-height-142">Tác phẩm mới của Nguyễn Nhật Ánh</div>
                                                                </div>
                                                                <div class="uk-width-auto">
                                                                    <div class="fz-12 be-vietnam-pro-semibold line-height-133 text-9F9595">02/10/2024</div>
                                                                </div>
                                                            </div>
                                                            <div class="item-6px line-clamp-2 fz-12 text-5E5D5A be-vietnam-pro-medium">Chào mừng bạn đến với kho sách mới của chúng tôi. Hàng trăm đầu sách mới từ các tác giả nổi tiếng đã sẵn sàng cho bạn khám phá. Đừng bỏ lỡ!</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="uk-position-cover"></a>
                                                </div>
                                                <div class="thongbao__item border-16">
                                                    <div class="uk-flex-middle uk-grid uk-grid-16" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-cover-container uk-border-circle background-E9F9FD">
                                                                <svg class="uk-position-center" xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.79458 0.959639C1.37126 0.903856 0.984237 1.21253 0.930144 1.64908C0.876052 2.08564 1.17537 2.48475 1.5987 2.54053C5.12614 3.00536 7.89105 3.68255 10.7733 5.06112C13.5645 6.39617 16.5001 8.40542 20.358 11.5782H19.2118C18.785 11.5782 18.4391 11.935 18.4391 12.3751C18.4391 12.8152 18.785 13.172 19.2118 13.172H21.2724C22.2682 13.172 23.0754 12.3395 23.0754 11.3126V9.18759C23.0754 8.74748 22.7295 8.39071 22.3027 8.39071C21.8759 8.39071 21.53 8.74748 21.53 9.18759V10.5039C17.5293 7.19899 14.4272 5.05199 11.4235 3.61531C8.35151 2.14597 5.41963 1.43732 1.79458 0.959639ZM1.69662 10.1856C1.69662 9.04756 2.61918 8.125 3.75722 8.125C4.89526 8.125 5.81783 9.04756 5.81783 10.1856L5.81783 20.9394C5.81783 22.0774 4.89527 23 3.75722 23C2.61918 23 1.69662 22.0774 1.69662 20.9394L1.69662 10.1856ZM18.1815 18.6856C18.1815 17.5476 19.1041 16.625 20.2421 16.625C21.3802 16.625 22.3027 17.5476 22.3027 18.6856V20.9394C22.3027 22.0774 21.3802 23 20.2421 23C19.1041 23 18.1815 22.0774 18.1815 20.9394V18.6856ZM11.9996 12.375C10.8616 12.375 9.93904 13.2976 9.93904 14.4356V20.9394C9.93904 22.0774 10.8616 23 11.9996 23C13.1377 23 14.0603 22.0774 14.0603 20.9394V14.4356C14.0603 13.2976 13.1377 12.375 11.9996 12.375Z" fill="#4DC1DB"/>
                                                                </svg>
                                                                <canvas width="60" height="60"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div uk-grid>
                                                                <div class="uk-width-expand">
                                                                    <div class="uk-text-truncate text-000 be-vietnam-pro-semibold line-height-142">Tác phẩm mới của Nguyễn Nhật Ánh</div>
                                                                </div>
                                                                <div class="uk-width-auto">
                                                                    <div class="fz-12 be-vietnam-pro-semibold line-height-133 text-9F9595">02/10/2024</div>
                                                                </div>
                                                            </div>
                                                            <div class="item-6px line-clamp-2 fz-12 text-5E5D5A be-vietnam-pro-medium">Chào mừng bạn đến với kho sách mới của chúng tôi. Hàng trăm đầu sách mới từ các tác giả nổi tiếng đã sẵn sàng cho bạn khám phá. Đừng bỏ lỡ!</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="uk-position-cover"></a>
                                                </div>
                                                <div class="thongbao__item border-16">
                                                    <div class="uk-flex-middle uk-grid uk-grid-16" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-cover-container uk-border-circle background-EDEBFC">
                                                                <svg class="uk-position-center" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8068 3.75H16.1932C17.5111 3.75 18.5796 4.75736 18.5796 6C18.5796 7.42202 20.101 8.3261 21.35 7.64622L21.4769 7.57717C22.6182 6.95585 24.0777 7.32457 24.7367 8.40073L25.9299 10.3493C26.5889 11.4254 26.1978 12.8015 25.0564 13.4228C23.8069 14.103 23.8069 15.897 25.0564 16.5772C26.1978 17.1985 26.5889 18.5746 25.9299 19.6507L24.7367 21.5993C24.0777 22.6754 22.6182 23.0441 21.4769 22.4228L21.35 22.3538C20.101 21.6739 18.5796 22.578 18.5796 24C18.5796 25.2426 17.5111 26.25 16.1932 26.25H13.8068C12.4889 26.25 11.4204 25.2426 11.4204 24C11.4204 22.578 9.89896 21.6739 8.65 22.3538L8.52314 22.4228C7.38176 23.0442 5.92228 22.6754 5.2633 21.5993L4.07011 19.6507C3.41113 18.5746 3.8022 17.1985 4.94358 16.5772C6.19314 15.897 6.19314 14.103 4.94359 13.4228C3.8022 12.8015 3.41113 11.4254 4.07011 10.3493L5.2633 8.40071C5.92228 7.32455 7.38176 6.95584 8.52314 7.57716L8.65 7.64621C9.89896 8.32609 11.4204 7.42202 11.4204 6C11.4204 4.75736 12.4889 3.75 13.8068 3.75ZM15 18.75C17.0711 18.75 18.75 17.0711 18.75 15C18.75 12.9289 17.0711 11.25 15 11.25C12.9289 11.25 11.25 12.9289 11.25 15C11.25 17.0711 12.9289 18.75 15 18.75Z" fill="#7261D4"/>
                                                                </svg>
                                                                <canvas width="60" height="60"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div uk-grid>
                                                                <div class="uk-width-expand">
                                                                    <div class="uk-text-truncate text-000 be-vietnam-pro-semibold line-height-142">Tác phẩm mới của Nguyễn Nhật Ánh</div>
                                                                </div>
                                                                <div class="uk-width-auto">
                                                                    <div class="fz-12 be-vietnam-pro-semibold line-height-133 text-9F9595">02/10/2024 </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-6px line-clamp-2 fz-12 text-5E5D5A be-vietnam-pro-medium">Chào mừng bạn đến với kho sách mới của chúng tôi. Hàng trăm đầu sách mới từ các tác giả nổi tiếng đã sẵn sàng cho bạn khám phá. Đừng bỏ lỡ!</div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="uk-position-cover"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            // UIkit.dropdown('.thongbao__dropdown').show();
                                        </script>
                                    </div>
                                <?php else: ?>
                                    <div>
                                        <a href="dangnhap.php" class="header__center__btn header__center__btn--login uk-button uk-button-primary uk-border-pill fz-16 be-vietnam-pro-semibold">
                                            <span class="icon20 icon20--login"></span>
                                            Đăng nhập
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="header__bottom uk-navbar-container" uk-sticky="start: <?= (isset($isHome) && $isHome) ? '60vh' : '1' ?>; animation: uk-animation-slide-top">
            <div class="uk-container">
                <div uk-navbar>
                    <div class="uk-navbar-left uk-flex-1">
                        <ul class="uk-navbar-nav categories <?= (isset($isHome) && $isHome) ? 'uk-hidden' : '' ?>">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.04102 4.99984C1.04102 2.81371 2.81322 1.0415 4.99935 1.0415H14.9993C17.1855 1.0415 18.9577 2.81371 18.9577 4.99984V14.9998C18.9577 17.186 17.1855 18.9582 14.9993 18.9582H4.99935C2.81322 18.9582 1.04102 17.186 1.04102 14.9998V4.99984ZM2.29102 10.6248V14.9998C2.29102 16.4956 3.50358 17.7082 4.99935 17.7082H9.37435V10.6248H2.29102ZM9.37435 9.37484H2.29102V4.99984C2.29102 3.50407 3.50358 2.2915 4.99935 2.2915H9.37435V9.37484ZM10.6243 10.6248V17.7082H14.9993C16.4951 17.7082 17.7077 16.4956 17.7077 14.9998V10.6248H10.6243ZM17.7077 9.37484H10.6243V2.2915H14.9993C16.4951 2.2915 17.7077 3.50407 17.7077 4.99984V9.37484ZM11.8743 12.9165C11.8743 12.5713 12.1542 12.2915 12.4993 12.2915H15.8327C16.1779 12.2915 16.4577 12.5713 16.4577 12.9165C16.4577 13.2617 16.1779 13.5415 15.8327 13.5415H12.4993C12.1542 13.5415 11.8743 13.2617 11.8743 12.9165ZM11.8743 15.4165C11.8743 15.0713 12.1542 14.7915 12.4993 14.7915H15.8327C16.1779 14.7915 16.4577 15.0713 16.4577 15.4165C16.4577 15.7617 16.1779 16.0415 15.8327 16.0415H12.4993C12.1542 16.0415 11.8743 15.7617 11.8743 15.4165Z" fill="#28303F"/>
                                    </svg>
                                    Danh mục sách <span uk-navbar-parent-icon></span>
                                </a>
                                <div class="header__bottom__dropdown uk-navbar-dropdown width-260px uk-padding-remove" style="box-shadow: none;background: transparent;" uk-dropdown="">
                                    <?php require "template-parts/layouts/categories-nav.php"; ?>
                                </div>
                            </li>
                        </ul>
                        <ul class="uk-navbar-nav main-menu">
                            <li class="uk-active"><a href=".">Trang chủ</a></li>
                            <li>
                                <a href="cuahang.php">Thư viện/Cửa hàng <span uk-navbar-parent-icon></span></a>
                                <?php require "template-parts/layouts/dropdown-nav.php"; ?>
                            </li>
                            <li>
                                <a href="#">Mới xuất bản <span class="uk-label uk-label-danger uk-border-pill fz-10 header__bottom__label">HOT</span> <span uk-navbar-parent-icon></span></a>
                                <?php require "template-parts/layouts/dropdown-nav.php"; ?>
                            </li>
                            <li>
                                <a href="#">Được khuyến nghị <span class="uk-label uk-label-success uk-border-pill fz-10 header__bottom__label">MỚI</span> <span uk-navbar-parent-icon></span></a>
                                <?php require "template-parts/layouts/dropdown-nav.php"; ?>
                            </li>
                            <li>
                                <a href="#">Tin sách <span uk-navbar-parent-icon></span></a>
                                <?php require "template-parts/layouts/dropdown-nav.php"; ?>
                            </li>
                            <li>
                                <a href="#">Tác giả <span uk-navbar-parent-icon></span></a>
                                <?php require "template-parts/layouts/dropdown-nav.php"; ?>
                            </li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="uk-overlay-primary mask_menu uk-position-cover uk-position-fixed z-index-991" style="display: none"></div>
    <main id="content-main" class="">