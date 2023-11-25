<?php
  session_start();
  require_once("dbconnect.php");
  //$_SESSION['validation'] = [];
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Webleb</title>
      <link rel="stylesheet" href="css/Authorization.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body>

<div class="contnav">
  <div class="navig">
    <nav>
        <div class="logo" style="display: flex;align-items: center;">
         <span style=""><a class="logoa" href="index.php">WEBLEB</a></span>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            
        </ul>
    </nav>
  </div>
</div>


<div class="wrapper">
  <div class="preAut">
    <div class="aut" >
      <form class="formAut" id="myForm" action="src/singin.php" method="POST">
        <h2 class="textAut" >Авторизация</h2>
        <div class="mb-3">
          <label for="form-control" class="form-label">Логин</label>
          <input type="text" class="form-control" name="login">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
          <?php if(isset($_SESSION['validation']['result'])) {echo $_SESSION['validation']['result'];};?>
        </div>
        <div class="d-grid gap-2">
          <button class="btn btn-outline-success" type="submit" name="send">Войти</button>
          <p class="message">Не зарегистрированы? <a href="registration.php">Создайте аккаунт</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="fixed-bottom">

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/nav.js"></script>
</body>
</html>
