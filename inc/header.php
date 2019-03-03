<?php require_once 'config.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo QA_TITLE;?></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/html5shiv.min.js"></script>
    <script src="../js/html5shiv-printshiv.min.js"></script>
    <script src="../js/script.js"></script>
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">

    <div class="navbar-brand">
        <img src="../images/bird.jpg" alt="Logo" style="width:40px;">
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php"><?php echo QA_HOME_NAME;?></a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="proRep.php"><?php echo QA_NEW_PROREP;?></a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="goods.php"><?php echo QA_ADD_PRODUCT;?></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="repository.php"><?php echo QA_REPOSITORY_SEARCH;?></a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="search.php"><?php echo QA_GOODS_SEARCH;?></a>
            </li>
        </ul>
    </div>

</nav>
</div>





