<!-- -<- ->- -->
<?php
  session_start();
  session_destroy();
  if(!isset($_SESSION['user_data'])){
    header('Location: ../views/home.php');
    exit();
  }else{
    header('Location: ../views/login.php');
    exit();
  }
?>
