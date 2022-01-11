<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Zeus</title>
    <meta name="description" content="Zeus">
    <meta name="author" content="George_Fx">
    <meta name="keywords" content>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/resources/images/png/favicon.png">
    <link rel="stylesheet" type="text/css" href="/resources/styles/css/bootstrap.min.css">

    <?php if ($data['TEMPLATE'] == 'ADMIN') { ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
              integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://bootstrap5.ru/css/docs.css">
        <link rel="stylesheet" href="https://bootstrap5.ru/css/examples/dashboard.css">
        <link rel="stylesheet" href="https://bootstrap5.ru/css/examples/checkout-form-validation.css">
    <?php } else { ?>
        <link rel="stylesheet" type="text/css" href="/resources/styles/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="/resources/styles/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="/resources/styles/css/slick.css">
        <link rel="stylesheet" type="text/css" href="/resources/styles/css/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="/resources/styles/css/flaticon.css">
        <link rel="stylesheet" type="text/css" href="/resources/styles/css/style.css">
        <link rel="stylesheet" type="text/css" href="/resources/styles/css/responsive.css">
    <?php } ?>
</head>
<body>
<div class="wrapper">
    <?php
    $data['TEMPLATE'] == 'ADMIN' ?
        require_once($_SERVER["DOCUMENT_ROOT"] . '/templates/header-admin.php') :
        require_once($_SERVER["DOCUMENT_ROOT"] . '/templates/header.php');

    include($_SERVER["DOCUMENT_ROOT"] . '/application/views/' . $content_view);

    $data['TEMPLATE'] == 'ADMIN' ?
        require_once($_SERVER["DOCUMENT_ROOT"] . '/templates/footer-admin.php') :
        require_once($_SERVER["DOCUMENT_ROOT"] . '/templates/footer.php');
    ?>
</div>

<?php if ($data['TEMPLATE'] == 'ADMIN') { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
            integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
            integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI"
            crossorigin="anonymous"></script>
    <!--    Код диаграммы-->
    <script src="https://bootstrap5.ru/css/examples/dashboard.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-179173139-1"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script src="https://bootstrap5.ru/css/examples/checkout-form-validation.js"></script>
<?php } else { ?>
    <script src="/resources/scripts/jquery.min.js"></script>
    <script src="/resources/scripts/bootstrap.min.js"></script>
    <script src="/resources/scripts/slick.js"></script>
    <script src="/resources/scripts/html5lightbox.js"></script>
    <script src="/resources/scripts/counter.js"></script>
    <script src="/resources/scripts/wow.min.js"></script>
    <script src="/resources/scripts/scripts.js"></script>
<?php } ?>
</body>
</html>