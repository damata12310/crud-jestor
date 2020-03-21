<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= url("theme/assets/css/bootstrap-grid.css");?>"/>
    <link rel="stylesheet" href="<?= url("theme/assets/css/bootstrap-reboot.css"); ?>"/>
    <link rel="stylesheet" href="<?= url("theme/assets/css/bootstrap.css"); ?>"/>
    <link rel="stylesheet" href="<?= url("theme/assets/css/style.css"); ?>"/>

    <title><?= $title; ?></title>
</head>
<body>

<?= $v->section("content"); ?>

<script src="<?= url("theme/assets/js/jquery.js"); ?>"></script>
<script src="<?= url("theme/assets/js/bootstrap.js"); ?>"></script>
<script src="<?= url("theme/assets/js/bootstrap.bundle.js"); ?>"></script>
<script src="https://kit.fontawesome.com/bddfd6d06d.js" crossorigin="anonymous"></script>
<?= $v->section("scripts"); ?>
</body>
</html>