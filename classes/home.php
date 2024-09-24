<!--  -->
<?php 
  session_start();
  $user_data = $_SESSION['user_data'];
  if(!isset($user_data)){
    header('Location: ../views/login.php');
    exit(); 
  }

?>