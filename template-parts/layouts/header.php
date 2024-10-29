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
                        <a href="." class="uk-navbar-item uk-logo"><img src="images/logo.png" alt=""></a>
                        <div class="uk-navbar-item uk-flex-auto">
                            <form class="uk-search uk-search-default uk-width">
                                <input class="header__center__search__input fz-14 be-vietnam-pro-semibold uk-search-input uk-border-pill" type="search" placeholder="Tìm kiếm sách theo tên" aria-label="Tìm kiếm sách theo tên">
                                <span class="header__center__search__icon uk-search-icon-flip" uk-search-icon></span>
                            </form>
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