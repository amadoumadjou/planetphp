<?php

@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
   <div class="container">
      <div class="content">
         <h3>Hello, <span>user</span></h3>
          <h1>Bienvenue <span> <?php echo $_SESSION['user_name']  ?></span></h1>
          <p>ceci est la page user</p>
          <a href="login_form.php" class="btn">login</a>
          <a href="register_form.php" class="btn">register</a>
          <a href="logout.php" class="btn">logout</a>
          <a href="apropo.php" class="btn">GO</a>

           </div>    
   </div>
    
</body>
</html>