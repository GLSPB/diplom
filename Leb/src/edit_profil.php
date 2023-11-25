<?php 
session_start();
require_once __DIR__ . '\..\dbconnect.php';
require_once __DIR__ . '\actions\helper.php';
//print_r($_POST);
// Получение данных с формы регистраци
if(isset($_GET["id"])){
    $id = $_GET["id"];
}
$query = "SELECT * FROM `users` WHERE `id`=$id";
$result = mysqli_query($connect, $query);

 while($row = $result->fetch_assoc()){
    $id = $row['id'];
    $role = $row['Role'];
    $name =$row['Name'];
    $surname = $row["Surname"];
    $otchestvo = $row["Otchestvo"];
    $login = $row["Login"];
    $password = $row["Password"];
    $email = $row["Email"];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/ctyle_personal.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактирование пользователя</h5>
      </div>
      <div class="modal-body">
        

        <div class="container my-2">
            <form action="edit_new_profil.php" method="POST">
                <div class="form-group">
                <label for="">ID</label> 
                <input type="text" class="form-control" name="id" value="<?php echo $id?>"  readonly>

                </div>
                <div class="form-group">
                <label for="">Имя</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name ?>" placeholder="Введите имя">
                </div>
                <div class="form-group">
                <label for="">Фамилия</label>
                <input type="text" class="form-control" name="surname" value="<?php echo $surname ?>" placeholder="Введите фамилию">
                </div>
                <div class="form-group">
                <label for="">Отчество</label>
                <input type="text" class="form-control" name="otchestvo" value="<?php echo $otchestvo ?>"  placeholder="Введите отчество">
                </div>
                <div class="form-group">
                <label for="">Логин</label>
                <input type="text" class="form-control" name="login" value="<?php echo $login?>"  placeholder="Введите логин">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $password ?>"  id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?php echo $email ?>"  aria-describedby="emailHelp" placeholder="Введите email">
                <div class="modal-footer">
                <a type="button" class="btn btn-secondary" href='../index5.php' >Отмена</a>
                <button type="submit" name="send" class="btn btn-primary"  >Сохранить</button>
                </div>
            </form>   
        </div>          
        </div>
      </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>