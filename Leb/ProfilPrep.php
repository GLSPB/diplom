<?php
  session_start();
  require_once("dbconnect.php");
  if (!$_SESSION['user']) {
    header('Location: index.php');
  }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ctyle_personal.css">
    
    <title>Document</title>
</head>
<body>

<div class="contnav">
  <div class="navig">
    <nav>
        <div class="logo" style="display: flex;align-items: center;">
         <span style="color:#01939c; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px;">WEBLEB</span>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="Create_test.php">Создать тест</a></li>
            <li><a href="MyTest.php">Мои тесты</a></li>
        </ul>
    </nav>
  </div>
</div>

<div class="wrapper">
    <div class="content">
        <div class="profil">
            <div class="avatar">
                <img class="log"  src="image/test.jpg">
            </div>
            <div class="infoPol">
                <div class="opisanProf">
                    <div><p class="proftext">ID: <b><?= $_SESSION['user']['id']?></b></p></div>
                    <div><p class="proftext">ФИО: <b><?= $_SESSION['user']['Name']?> <?= $_SESSION['user']['Otchestvo']?> <?= $_SESSION['user']['Surname']?></b></p></div>
                    <div><p class="proftext">Логин: <b><?= $_SESSION['user']['Login']?></b></p></div>
                    <div><p class="proftext">Эл. почта: <b><?= $_SESSION['user']['Email']?></b></p></div>
                    <a class='btn btn-outline-info' href='src/edit_profil.php?id=<?= $_SESSION['user']['id']?>' >Изменить</a>
                    <a class='btn btn-outline-danger' href='src/exit.php' >Выйти</a>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>


<script src="js/nav.js"></script>

</body>