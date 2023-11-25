<?php 
//print_r($_POST);
session_start();
require_once __DIR__ . '\..\dbconnect.php';
require_once __DIR__ . '\actions\helper.php';

$login = $_POST["login"] ;
$password = $_POST["password"] ;
$send = $_POST["send"] ;



if(isset($send)){
    $result = mysqli_query($connect, "SELECT * FROM users WHERE Login = '$login' AND Password = '$password'") or die ("Error : ".mysqli_error());
    if(mysqli_num_rows($result) < 1){
        $_SESSION['validation']['result'] = '<p class="msg">Неправильный логин или пароль </p>';
        redirect( '/Leb/Authorization.php');
    }
    else{
    $_SESSION['validation']['result'] = ' ';
    $_SESSION['Login'] = $login;
    $_SESSION['Password'] = $password;
    $role = mysqli_query($connect, "Select `Role` FROM users WHERE Login = '$login' AND Password = '$password'") or die ("Error : ".mysqli_error());;
    
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

    $role = mysqli_fetch_array($role);
    if($role['Role'] == '1'){
        header('Location: /Leb/Profil.php');
    }
    if($role['Role'] == '2'){
        header('Location: /Leb/ProfilPrep.php');
    }
    if($role['Role'] == '3'){
        header('Location: /Leb/PanelAdmin.php');
        $_SESSION['validation'] = [];
    }
}}



?>