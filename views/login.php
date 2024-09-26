<?php
  // IMPORT FUNCTIONS
  require_once '../services/loginServices.php';
?>

<!-- PAGE -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ICONS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <title>LOGIN - ingresa a la pagina</title>

  <!-- STYLES -->
  <?php
    require_once '../assets/css/loginStyle.php';
  ?>
</head>

<body>
  <!-- CARD LOGIN -->
  <div class="card-login">
    <!-- ALERT ERROR -->
    <?php if(isset($_GET['result']) && $_GET['result'] == 'false') { ?>
    <div class="alert-error show"><span><?php echo $_GET['error_msg']; ?></span><span class="btn-close-alert-error">&times;</span></div>
    <?php } ?>
    <!-- ALERT SUCCESS -->
    <?php if(isset($_GET['result']) && $_GET['result'] == 'true') { ?>
    <div class="alert-success show"><span><?php echo $_GET['result_msg']; ?></span><span class="btn-close-alert-success">&times;</span></div>
    <?php } ?>
    <h1>Iniciar sesión</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, dicta. 🎉✨</p>
    <form action="../services/loginServices.php" method="post">
      <div class="input-control">
        <label for="emailLoginUser">email</label>
        <input type="email" name="emailLoginUser" id="emailLoginUser">
      </div>
      <div class="input-control">
        <label for="passwordLoginUser">contraseña</label>
        <input type="text" name="passwordLoginUser" id="passwordLoginUser">
      </div>
      <input type="submit" value="Ingresar">
    </form>
    <div class="card-footer">
      <span class="s-seconday">¿Olvidaste la contraseña? <span class="s-primary">Recuperar contraseña</span></span>
      <span class="s-seconday">¿No te has registrado? <span class="s-primary" id="showmodalRegistrateUser">Registrarse</span></span>
    </div>
  </div>
  <!-- CARD LOGIN -->

  <!-- CARD REGISTRATION -->
  <div class="modal" id="modalRegistrateUser">
    <div class="modal-content">
      <div class="modal-head">
        <h2>Registrarse</h2>
        <span class="btn-close">&times;</span>
      </div>
      <div class="modal-body">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum error delectus est quisquam aliquid in? 📢</p>
        <h3>Llenar el formulario</h3>
        <form action="../services/registerServices.php" method="post" id="formRegisterUser">
          <div class="input-control">
              <label for="nameRegisterUser">Nombre completo</label>
              <input type="text" name="nameRegisterUser" id="nameRegisterUser">
            <div class="invalid-feedback" id="nameRegisterUserError"></div>
          </div>
          <div class="input-control">
            <label for="lastNameRegisterUser">Apellido completo</label>
            <input type="text" name="lastNameRegisterUser" id="lastNameRegisterUser">
            <div class="invalid-feedback" id="lastNameRegisterUserError"></div>
          </div>
          <div class="input-control">
            <label for="emailRegisterUser">Email</label>
            <input type="text" name="emailRegisterUser" id="emailRegisterUser">
            <div class="invalid-feedback" id="emailRegisterUserError"></div>
          </div>
          <div class="input-control">
            <label for="addressRegisterUser">Dirección</label>
            <input type="text" name="addressRegisterUser" id="addressRegisterUser">
            <div class="invalid-feedback" id="addressRegisterUserError"></div>
          </div>
          <div class="input-control">
            <div class="password-container">
              <label for="passwordRegisterUser">Contraseña</label>
              <input type="password" name="passwordRegisterUser" id="passwordRegisterUser">
              <span class="material-symbols-outlined">visibility</span>
            </div>
            <div class="invalid-feedback" id="passwordRegisterUserError"></div>
          </div>
          <div class="input-control">
            <div class="password-container">
              <label for="confirmPasswordRegisterUser">Confirmar contraseña</label>
              <input type="password" name="confirmPasswordRegisterUser" id="confirmPasswordRegisterUser">
              <span class="material-symbols-outlined">visibility_off</span>
            </div>
            <div class="invalid-feedback" id="confirmPasswordRegisterUserError"></div>
          </div>
          <input type="submit" value="Registrarse">
        </form>
      </div>
      <div class="modal-foot">

      </div>
    </div>
  </div>
  <!-- CARD REGISTRATION -->

  <!-- SCRIPTS -->
  <?php
    require '../assets/js/globalScript.php';
    require '../validators/loginValidator.php';
    require '../assets/js/loginScript.php';
  ?>

</body>
</html>

