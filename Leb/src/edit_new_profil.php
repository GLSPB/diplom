<?php 
session_start();
require_once __DIR__ . '\..\dbconnect.php';
require_once __DIR__ . '\actions\helper.php';
$id= $_POST['id'];

$name = $_POST['name'];
$surname = $_POST["surname"];
$otchestvo = $_POST["otchestvo"];
$login = $_POST["login"];
$password = $_POST["password"];
$email = $_POST["email"];
$send = $_POST["send"];


if(isset($send)){
    $rresult = mysqli_query($connect, "UPDATE `users` SET `Name` = '$name', `Surname` = '$surname', `Otchestvo` = '$otchestvo', `Login` = '$login', `Password` = '$password', `Email` = '$email' WHERE `users`.`id` = $id") or die ("Error : ".mysqli_error());
    $result = mysqli_query($connect, "SELECT * FROM users WHERE Login = '$login' AND Password = '$password'") or die ("Error : ".mysqli_error());
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "Role" => $user['Role'],
        "Name" => $user['Name'],
        "Surname" => $user['Surname'],
        "Otchestvo" => $user['Otchestvo'],
        "Login" => $user['Login'],
        "Password" => $user['Password'],
        "Email" => $user['Email']
      ];
    redirect('/Leb/ProfilPrep.php');
}
?>