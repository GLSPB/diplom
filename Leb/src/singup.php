<?php 
session_start();
require_once __DIR__ . '\..\dbconnect.php';
require_once __DIR__ . '\actions\helper.php';
//print_r($_POST);
// Получение данных с формы регистрации
$rname = $_POST['rname']?? null;
$rfamil = $_POST["rfamil"]?? null;
$rotshet = $_POST["rotshet"]?? null;
$rlogin = $_POST["rlogin"]?? null;
$rpassword = $_POST["rpassword"]?? null;
$rpassword_dubl = $_POST["rpassword_dubl"] ?? null;
$remail = $_POST["remail"]?? null;
$send2 = $_POST["send2"];

$_SESSION['validation']['rpassword_dubl'] = ' ';

//Тестирование получения данных
/* var_dump($rname);
var_dump($rfamil);
var_dump($rotshet);
var_dump($rlogin);
var_dump($rpassword);
var_dump($rpassword_dubl);
var_dump($remail); */

$_SESSION['validation'] = [];

/* if(empty($rname)){
    $_SESSION['validation']['rname'] = 'style="border-bottom: 1px solid red;"';
}else{
    $_SESSION['validation']['rname'] = ' ';
}


if(!filter_var($remail, filter: FILTER_VALIDATE_EMAIL)){
    $_SESSION['validation']['remail'] = 'style="border-bottom: 1px solid red;"';
}else{
    $_SESSION['validation']['remail'] = ' ';
}

if(empty($rpassword)){
    $_SESSION['validation']['rpassword'] = 'style="border-bottom: 1px solid red;"';
}else{
    $_SESSION['validation']['rpassword'] = ' ';
} */

/* if(!($rpassword == $rpassword_dubl)){
    $_SESSION['validation']['rpassword_dubl'] = '<p class="msg">Пароли не совпадают</p>';
} else{ */
    $_SESSION['validation']['rpassword_dubl'] = ' ';
    if(isset($send2)){
        $rresult = mysqli_query($connect, "INSERT INTO users (id, Role, Name, Surname, Otchestvo, Login, Password, Email) VALUES (NULL, '1', '$rname', '$rfamil', '$rotshet', '$rlogin', '$rpassword', '$remail')") or die ("Error : ".mysqli_error());
    }
/*}*/

if(!empty($_SESSION['validation'])){

    redirect('/Leb/Authorization.php');
}


  
?>