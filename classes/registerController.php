<?php  
  // CONNECTION
  require_once 'connection.php';

  if($_POST){
    try{
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
  
      $sql = "INSERT INTO `tdb_users`(`fdb_name`, `fdb_last_name`, `fdb_email`, `fdb_address`, `fdb_password`) VALUES (:nameRegisterUser,:lastNameRegisterUser,:emailRegisterUser,:addressRegisterUser,:confirmPasswordRegisterUser)";
      $stmt = $connect->prepare($sql);
  
      $stmt->bindParam(':nameRegisterUser',$nameRegisterUser);
      $stmt->bindParam(':lastNameRegisterUser',$lastNameRegisterUser);
      $stmt->bindParam(':emailRegisterUser',$emailRegisterUser);
      $stmt->bindParam(':addressRegisterUser',$addressRegisterUser);
      $stmt->bindParam(':confirmPasswordRegisterUser',$confirmPasswordRegisterUser);
  
      $stmt->execute(); 

      $result_registration = 'true';
      header("Location: ../views/login.php?resultRegistration=". urlencode($result_registration));
    }catch(PDOException $error) {
      $result_registration = 'false';
      header("Location: ../views/login.php?resultRegistration=". urlencode($result_registration));
    }
  }
?>