<?php
  session_start();
  require_once("dbconnect.php");
  if (!$_SESSION['user']) {
    header('Location: index.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
   
    <title>Document</title>
</head>
<body>
<div id="header">
    <div class="logo">
      <a href="index.php"><h1><span> WebLeb </span></h1> </a>
    </div>  
    <nav>
      <ul>
        <li class="dropdown">
          <a href="registration.php">Test</a>
        </li>
      </ul>
    </nav>
</div>



<h2 style="margin: 10px 0;"><?= $_SESSION['user']['Name'] ?></h2>

<?php 



?>
  
</div>

<div class="footer">

</div>


</body>