<?php  
  // CONNECTION
  require_once '../connection.php';

  if($_POST){
    try{
      // GET DATA
      $nameRegisterUser = (isset($_POST['nameRegisterUser'])) ? $_POST['nameRegisterUser'] : "";
      $lastNameRegisterUser = (isset($_POST['lastNameRegisterUser'])) ? $_POST['lastNameRegisterUser'] : "";
      $emailRegisterUser = (isset($_POST['emailRegisterUser'])) ? $_POST['emailRegisterUser'] : "";
      $addressRegisterUser = (isset($_POST['addressRegisterUser'])) ? $_POST['addressRegisterUser'] : "";
      $passwordRegisterUser = (isset($_POST['passwordRegisterUser'])) ? $_POST['passwordRegisterUser'] : "";
      $confirmPasswordRegisterUser = (isset($_POST['confirmPasswordRegisterUser'])) ? $_POST['confirmPasswordRegisterUser'] : "";
  
      echo $nameRegisterUser.'<br>';
      echo $lastNameRegisterUser.'<br>';
      echo $emailRegisterUser.'<br>';
      echo $addressRegisterUser.'<br>';
      echo $passwordRegisterUser.'<br>';
      echo $confirmPasswordRegisterUser.'<br>';


      // REGISTER USER
      $sql = "INSERT INTO `tdb_users`(`fdb_name`, `fdb_last_name`, `fdb_email`, `fdb_address`, `fdb_password`) VALUES (:nameRegisterUser,:lastNameRegisterUser,:emailRegisterUser,:addressRegisterUser,:confirmPasswordRegisterUser)";
      $stmt = $connect->prepare($sql);
      $stmt->bindParam(':nameRegisterUser',$nameRegisterUser);
      $stmt->bindParam(':lastNameRegisterUser',$lastNameRegisterUser);
      $stmt->bindParam(':emailRegisterUser',$emailRegisterUser);
      $stmt->bindParam(':addressRegisterUser',$addressRegisterUser);
      $stmt->bindParam(':confirmPasswordRegisterUser',$confirmPasswordRegisterUser);
      $stmt->execute(); 


      // RETURN RESULT TRUE
      $result = 'true';
      $result_msg = '¡Registro exitoso, ya puedes iniciar sesion con tu cuenta!';
      header("Location: ../views/login.php?result=". urlencode($result). "&result_msg=" .urlencode($result_msg));
    }catch(PDOException $error) {
      // RETURN RESULT FALSE
      $result = 'false';
      $error_msg = '¡Registro fallido, error desconocido!';
      header("Location: ../views/login.php?result=". urlencode($result). "&error_msg=" .urlencode($error_msg));
    }
  }
?>