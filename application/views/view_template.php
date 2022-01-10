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
    <link rel="stylesheet" type="text/css" href="/resources/styles/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/resources/styles/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/resources/styles/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/resources/styles/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/resources/styles/css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="/resources/styles/css/style.css">
    <link rel="stylesheet" type="text/css" href="/resources/styles/css/responsive.css">
</head>
<body>
<div class="wrapper">
    <?php
    require_once($_SERVER["DOCUMENT_ROOT"] . '/templates/header.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/application/views/' . $content_view);
    require_once($_SERVER["DOCUMENT_ROOT"] . '/templates/footer.php');
    ?>
</div>
<script src="/resources/scripts/jquery.min.js"></script>
<script src="/resources/scripts/bootstrap.min.js"></script>
<script src="/resources/scripts/slick.js"></script>
<script src="/resources/scripts/html5lightbox.js"></script>
<script src="/resources/scripts/counter.js"></script>
<script src="/resources/scripts/wow.min.js"></script>
<script src="/resources/scripts/scripts.js"></script>
</body>
</html>