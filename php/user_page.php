<?php
@include'confiig.php';
session_start();
if(!isset ($_SESSION['user_nom'] )){
    header('location:login_form.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   <div class="container">
    
   <div class="content">
    <h3>hi, <span>user</span></h3>
    <h1>welcome <span><?php echo $_SESSION['user_nom'] ?></span></h1>
    <p>this is an client page</p>
    <!-- <a href="register_form.php" class="btn">register</a>  -->
    <a href="client.php" class="btn">client</a> 
    <!-- <a href="logout.php" class="btn">logout</a> -->
   </div>

   </div>    


</body>
</html>