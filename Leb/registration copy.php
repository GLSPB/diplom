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
      <link rel="stylesheet" href="css/style1.css">
  </head>
<body style="align-items:center; justify-content:center;">

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
            <li><a href="registration.php">Войти</a></li>
            

        </ul>
    </nav>
  </div>
</div>



  <div class="test2">
    <div class="login-page">
      <div class="form">
        <form class="register-form" action="src/singup.php"  method="POST">
          <h2>Регистрация</h2>
          <input name="rname" class="vvod" type="text" placeholder="Имя *"  required/>
          <input name="rfamil" class="vvod" type="text" placeholder="Фамилия *" required/>
          <input name="rotshet" class="vvod" type="text" placeholder="Отчество" />
          <input name="rlogin" class="vvod" type="text" placeholder="Логин *" required/>
          <input name="rpassword" class="vvod" type="password" placeholder="Пароль *" required/>
          <input name="rpassword_dubl" class="vvod" type="password" placeholder="Повторите пароль*" required/>
          <?php if(isset($_SESSION['validation']['rpassword_dubl'])) {echo $_SESSION['validation']['rpassword_dubl'];};?>
          <input name="remail" class="vvod" type="email" placeholder="Email *" required/> 
          <input class="btn" type="submit" name="send2" value="Зарегистрироваться">
          <p class="message">Уже зарегистрированы? <a href="#">Войти</a></p>
        </form>
        <form class="login-form" action="src/singin.php" method="post">
          <h2></i> Авторизация</h2>
          <input type="text" class="vvod" name="login" placeholder="Логин" required />
          <input type="password" class="vvod" name="password" placeholder="Пароль" required/>
          <?php if(isset($_SESSION['validation']['result'])) {echo $_SESSION['validation']['result'];};?>
          <input class="btn" type="submit" name="send" value="Вход">
          <p class="message">Не зарегистрированы? <a href="#">Создайте аккаунт</a></p>
        </form>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/nav.js"></script>
</body>
</html>
