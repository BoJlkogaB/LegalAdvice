<?php /** @var $contentView * */
if (empty($_SESSION['USER'])) {
    header('Location: /main/');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible"
          content="ie=edge">
    <title>Zeus</title>
    <meta name="description"
          content="Zeus">
    <meta name="author"
          content="BoJlkogaB">
    <meta name="keywords"
          content>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon"
          href="/resources/images/png/favicon.png">
    <link rel="stylesheet"
          type="text/css"
          href="/resources/styles/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://bootstrap5.ru/css/docs.css">
    <link rel="stylesheet"
          href="https://bootstrap5.ru/css/examples/dashboard.css">
    <link rel="stylesheet"
          href="https://bootstrap5.ru/css/examples/checkout-form-validation.css">
    <link rel="stylesheet"
          type="text/css"
          href="/resources/styles/css/style-admin.css">
</head>
<body>
<div class="wrapper">
    <?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/App/views/templates/admin/header.php');
    require_once($_SERVER["DOCUMENT_ROOT"].'/App/views/'.$contentView);
    require_once($_SERVER["DOCUMENT_ROOT"].'/App/views/templates/admin/footer.php');
    ?>
</div>
<div class="context-menu-open" data-model-name="<?= $this->getModelName() ?>">
    <ul>
        <li><a class="context-menu-link" id="context-menu-delete" href="">Удалить</a></li>
    </ul>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI"
        crossorigin="anonymous"></script>
<!--    Код диаграммы-->
<script src="https://bootstrap5.ru/css/examples/dashboard.js"></script>
<script async=""
        src="https://www.googletagmanager.com/gtag/js?id=UA-179173139-1"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script src="https://bootstrap5.ru/css/examples/checkout-form-validation.js"></script>
<script src="/resources/scripts/scripts-admin.js"></script>
</body>
</html>