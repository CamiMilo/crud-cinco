<?php
    // INSERT INTO `tdb_users`(`fdbpk_id_user`, `fdb_name`, `fdb_last_name`, `fdb_email`, `fdb_address`, `fdb_password`) VALUES (NULL,'Camilo','Sanchez','cs9886708@gmail.com','cr 47 # 63- 39','Camilo123@')

    require_once 'connection.php';

    // GET DATA TO LOGIN
    $emailLoginUser = "";
    $password = "";
    if($_POST){
        $emailLoginUser = (isset($_POST['emailLoginUser'])) ? $_POST['emailLoginUser'] : "";
        $password = (isset($_POST['passwordLoginUser'])) ? $_POST['passwordLoginUser'] : "";

        // VALIDATE
        $sql = "SELECT * FROM `tdb_users` WHERE fdb_email = :email AND fdb_password = :password";
        $sentence = $connect->prepare($sql);

        $sentence->bindParam(':email', $emailLoginUser);
        $sentence->bindParam(':password', $password);
        $sentence->execute();

        $get_user = $sentence->fetchAll(PDO::FETCH_ASSOC);

        if(empty($get_user)){
            $result = 'false';
            $error_msg = 'Error, la contraseña o el email son incorrectos, por favor verifique';
            header('Location: ../views\login.php?result='. urlencode($result). '&error_msg='. urlencode($error_msg));
            exit();
        }else{  
            session_start();
            foreach($get_user as $e) {
                $_SESSION['user_data'] = $e;
            }
            header('Location: ../views\home.php');
            exit();
        }
    }  

    // $sql = "SELECT * FROM `tdb_users`";
    // $sentence = $connect->prepare($sql);
    // $sentence->execute();

    // $get_data = $sentence->fetchAll();

    // print_r($get_data);
?>