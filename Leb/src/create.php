<?php 
session_start();
require_once __DIR__ . '\..\dbconnect.php';
require_once __DIR__ . '\actions\helper.php';
//print_r($_POST);
// Получение данных с формы регистрации



//function sample($str) {
    //echo "Hi: $str";
    //var_dump(debug_backtrace());
//}
//sample('Debugging');




$role = $_POST['role'];
//echo var_dump($role);
$name = $_POST['name'];
//  debug_zval_dump($name);
//$arr1 = array($role, $name);
//$arr = get_defined_vars();
//print_r($arr["arr1"]);


$surname = $_POST["surname"];
$otchestvo = $_POST["otchestvo"];
$login = $_POST["login"];
$password = $_POST["password"];
$email = $_POST["email"];
$send = $_POST["send"];
    if(isset($send)){
        $rresult = mysqli_query($connect, "INSERT INTO users (id, Role, Name, Surname, Otchestvo, Login, Password, Email) VALUES (NULL, '$role', '$name', '$surname', '$otchestvo', '$login', '$password', '$email')") or die ("Error : ".mysqli_error());
        redirect('/Leb/index5.php');
    }
?>