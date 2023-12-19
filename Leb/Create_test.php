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
    <title>Document</title>
    <link rel="stylesheet" href="css/CreateTest.css">
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
          <li><a href="ProfilPrep.php">Профиль</a></li>

        </ul>
    </nav>
  </div>
</div>

<div class="wrapper">
  <div class="preTest">
    <div class="Test" >
      <form class="formTest" id="myForm" action="src/Create_test_new.php?do=save"  method="POST">
        <h2 class="textAut" >Создание теста</h2>
        <div class="nazTest">
          <div class="form-group">
            <label for="formGroupExampleInput">Название</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="" required>
          </div>
        </div>
        <h2 class="textAut" >Вопросы</h2>
        <div class="nazTest">
          <div class="form-group">
            <div class="question-items">
                  <div class="">
                      <label for="question_1" class="form-label">Вопрос #1</label>
                      <input type="text" name="question_1" id="question_1" class="form-control">
                      <div class="answers">
                          <div class="answer-items">
                            <div class="parent">
                              <div class="">
                                <label for="answer_text_1_1" class="form-label">Ответ #1</label>
                                <input type="text" name="answer_text_1_1" id="answer_text_1_1" class="form-control">
                              </div>
                              <div class="">
                                <label for="" class="form-label">Балл за ответ #1</label>
                                <select id="answer_text_1_1" name="answer_score_1_1" class="form-control">
                                <option selected="">0</option>
                                <option>1</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="text-center mt-4">
                              <button type="button" class="btn btn-light border addAnswer" data-question="1" data-answer="1">Добавить вариант ответа</button>
                          </div>
                      </div>
                  </div>
                  <hr>
              </div>
            </div>      
          </div>
          <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary addQuestion">Добавить вопрос</button>
                    </div>
        </div>
        <div class="card-body text-center">
            <button type="submit" class="btn btn-success" name="send" >Сохранить</button>
        </div>
      </form>
    </div>
  </div>


</div>

<div class="fooblok" style="background-color: #131418;">
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
<fooblok>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/app.js"></script>
<script src="js/nav.js"></script>

</body>
</html>