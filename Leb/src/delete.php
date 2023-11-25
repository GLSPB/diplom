<?php 
session_start();
require_once __DIR__ . '\..\dbconnect.php';
require_once __DIR__ . '\actions\helper.php';
//print_r($_POST);
// Получение данных с формы регистраци
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $rresult =  mysqli_query($connect,  "DELETE FROM users WHERE id = '$id'") or die ("Error : ".mysqli_error());
        redirect('/Leb/index5.php');

}

    
        
    

  
?>