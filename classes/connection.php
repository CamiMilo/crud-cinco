<?php
// PARAMS
$server = 'localhost';
$user_name = 'root';
$password = '';
$db = 'db_cinco';

try{ 
  $connect = new PDO("mysql:host=$server;dbname=$db", $user_name, $password);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // echo 'conexion exitosa';

}catch(PDOException $error){
  // echo 'Error de conexion'. $error->getMessage();
}
?>
