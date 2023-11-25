<?php 
session_start();
require_once __DIR__ . '\..\dbconnect.php';
require_once __DIR__ . '\actions\helper.php';
$id= $_POST['id'];
$role = $_POST['role'];
$name = $_POST['name'];
$surname = $_POST["surname"];
$otchestvo = $_POST["otchestvo"];
$login = $_POST["login"];
$password = $_POST["password"];
$email = $_POST["email"];
$send = $_POST["send"];


if(isset($send)){
    $rresult = mysqli_query($connect, "UPDATE `users` SET `Role` = '$role', `Name` = '$name', `Surname` = '$surname', `Otchestvo` = '$otchestvo', `Login` = '$login', `Password` = '$password', `Email` = '$email' WHERE `users`.`id` = $id") or die ("Error : ".mysqli_error());
    redirect('/Leb/index5.php');
}
?>