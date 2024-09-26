<?php $projectName = "Thư viện số"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
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
    <main id="content-main" class="">