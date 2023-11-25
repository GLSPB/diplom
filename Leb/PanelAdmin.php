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
            <li><a href="tabUser.php">Пользователи</a></li>
            

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
      <div><p class="proftext">Эл. почта  : <b><?= $_SESSION['user']['Email']?></b></p></div>
    </div>
  </div>
 

</div>
</div>
</div>


<script src="js/nav.js"></script>

</body>