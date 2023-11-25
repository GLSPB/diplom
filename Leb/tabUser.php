<script> performance.mark('testStart');</script>
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
            
            

        </ul>
    </nav>
  </div>
</div>

    <div class="wrapper">
        <h2>Пользователи</h2>
        
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
        Добавить пользователя
        </button>
        <table class="table">
            <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Роль</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Фамилия</th>
                            <th scope="col">Отчество</th>
                            <th scope="col">Логин</th>
                            <th scope="col">Пароль</th>
                            <th scope="col">Email</th>
                            <th scope="col">Действие</th>
                        </tr>
            </thead>
            <tbody>
                        <?php
                        require_once("dbconnect.php");
                        $query = "select * from users ";
                        $result = mysqli_query($connect, $query);
                        ?>
                        
                        <?php while($row = $result->fetch_assoc()){
                            $id = $row['id'];
                            echo"
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[Role]</td>
                                <td>$row[Name]</td>
                                <td>$row[Surname]</td>
                                <td>$row[Otchestvo]</td>
                                <td>$row[Login]</td>
                                <td>$row[Password]</td>
                                <td>$row[Email]</td>
                                <td>
                                <a class='btn btn-outline-danger' href='src/delete.php?id=$row[id]' >Удалить</a>
                                <a class='btn btn-outline-info' href='src/edit.php?id=$row[id]' >Изменить</a>
                                </td>
                            </tr>
                                ";
                        }
                        ?>
            </tbody>
        </table>
    </div>

<!-- Modal create-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавление пользователя</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container my-2">
            <form action="src/create.php" method="POST">
                <div class="form-group">
                <label for="">Роль</label>
                <input type="text" class="form-control" name="role"  placeholder="Введите роль">
                <small id="emailHelp" class="form-text text-muted">1 - Пользователь; 2 - Преподователь; 3 - Администратор</small>
                </div>
                <div class="form-group">
                <label for="">Имя</label>
                <input type="text" class="form-control" name="name"  placeholder="Введите имя">
                </div>
                <div class="form-group">
                <label for="">Фамилия</label>
                <input type="text" class="form-control" name="surname"  placeholder="Введите фамилию">
                </div>
                <div class="form-group">
                <label for="">Отчество</label>
                <input type="text" class="form-control" name="otchestvo"  placeholder="Введите отчество">
                </div>
                <div class="form-group">
                <label for="">Логин</label>
                <input type="text" class="form-control" name="login"  placeholder="Введите логин">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="submit" name="send" class="btn btn-primary" >Сохранить</button>
                </div>
            </form>   
        </div>
            
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
<script> performance.mark('testEnd');
performance.measure('testDuration', 'testStart', 'testEnd');
console.log(performance.getEntriesByName('testDuration'));</script>