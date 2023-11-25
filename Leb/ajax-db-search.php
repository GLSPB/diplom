<?php
require_once("dbconnect.php");
 if(isset($_POST['query'])){
    $query = "SELECT * FROM users WHERE Name LIKE '{$_POST['query']}%' LIMIT 100";
    $result = mysqli_query($connect, $query);

 if (mysqli_num_rows($result) > 0){
    while ($user = mysqli_fetch_array($result)){
        echo $user['Name']."<br>";
    }
 }else{
    echo "<p sryle='color:red'>User not found...</p>";
 }
 }
?>