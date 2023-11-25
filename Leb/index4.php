<?php
    require_once("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>How to Delete Record using Ajax in PHP?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Webleb</title>
      <link rel="stylesheet" href="css/registration.css">
</head>
<body>
    <div class="test2">
        <div class="login-page">
            <div class="form">
                <form id="myForm">
                    <h2></i> Авторизация</h2>
                    <input type="text" class="vvod" name="username" id="username" placeholder="Логин"  />
                    <span id="usernameError"></span>
                    <input type="password" class="vvod" name="password" id="password" placeholder="Пароль" />
                    <span id="passwordError"></span>
                    <input class="btn" type="submit" name="send" value="Вход">
                    <p class="message">Не зарегистрированы? <a href="#">Создайте аккаунт</a></p>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("myForm").addEventListener("submit", function(event) {
        event.preventDefault();

        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "validate.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if(xhr.readyState === 4 && xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                if(response.usernameError) {
                document.getElementById("usernameError").innerHTML=response.usernameError;
            } else {
                document.getElementById("usernameError").innerHTML="";
            }
            if(response.passwordError) {
                document.getElementById("passwordError").innerHTML=response.passwordError;
            } else {
                document.getElementById("passwordError").innerHTML="";
            }
        }
        };
        xhr.send("username="+username+"&password="+password);
    });
    </script>
</body>
</html>