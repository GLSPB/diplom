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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
          <button class="btn btn-outline-success btn-block" type="submit" name="send">Войти</button>
          <p class="message">Не зарегистрированы? <a href="registration.php">Создайте аккаунт</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="fooblok">
<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <hr>
    <!-- Left -->

    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>WebLeb
          </h6>
          <p>
          Инструмент, который позволяет создавать и организовывать тесты для проверки знаний или навыков учащихся, сотрудников или других пользователей.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-4 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Информация
          </h6>
          <p>
            <a href="#!" class="text-reset">Справка</a>
          </p>
         
        </div>
        <!-- Grid column -->

        

        
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="#">WebLeb</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</fooblok>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/nav.js"></script>
</body>
</html>
