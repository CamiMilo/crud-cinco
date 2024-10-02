<!--  -->
<?php 
  session_start();
  $user_data = $_SESSION['user_data'];
  if(!isset($user_data)){
    header('Location: ../views/login.php');
    exit(); 
  }


  // VARIABLES
  $data_head = array(
    'title' => 'HOME - Bienvenido al aplicativo',
    'style' => 'homeStyle',
  );

  $data_footer = array(
    'requires' => ['../assets/js/globalScript.php','../assets/js/homeScript.php'],
  )

?>