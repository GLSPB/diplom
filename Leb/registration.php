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
      <link rel="stylesheet" href="css/registration.css">
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
  <div class="preReg">
    <div class="reg" >
      <form class="row g-3 " id="myForm" action="src/singup.php" method="POST">
        <h2 class="textAut" >Регистрация</h2>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Имя</label>
          <input type="text" class="form-control" id="validationCustom01" name="rname" required>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Фамилия</label>
          <input type="text" class="form-control" id="validationCustom02" name="rfamil" required>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Отчество</label>
          <input type="text" class="form-control" id="validationCustom02" name="rotshet">
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Логин</label>
          <input type="text" class="form-control" id="validationCustom02" name="rlogin" required>
        </div>
        <div class="col-md-4">
          <label for="validationCustom04" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="remail">
        </div>
        <div class="col-md-4">
          <label for="validationCustom05" class="form-label">Пароль</label>
          <input name="rpassword" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <button class="btn btn-outline-success" type="submit" name="send2">Зарегистрироваться</button>
          <p class="message">Уже зарегистрированы? <a href="Authorization.php">Войти</a></p>
        </div>
        
    </form>
  </div>
</div>


</div>






<div class="footer">

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/nav.js"></script>
</body>
</html>
