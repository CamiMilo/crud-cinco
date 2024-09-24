<body>
  <!-- CARD LOGIN -->
  <div class="card-login">
    <?php if(isset($_GET['result'])) { ?>
    <div class="alert-error show"><span><?php echo $_GET['error_msg']; ?></span><span id="btn-clse-alert-error">&times;</span></div>
    <?php } ?>
    <h1>Iniciar sesión</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, dicta. 🎉✨</p>
    <form action="../classes/loginController.php" method="post">
      <div>
        <label for="">email</label>
        <input type="email" name="emailLoginUser" placeholder="digite el email">
      </div>
      <div>
        <label for="">contraseña</label>
        <input type="text" name="passwordLoginUser" placeholder="digite la contraseña">
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
        <form action="../classes/registerController.php" method="post">
          <div>
            <label for="">Nombre</label>
            <input type="text" name="nameRegisterUser" placeholder="digite el primer nombre">
          </div>
          <div>
            <label for="">Apellido</label>
            <input type="text" name="lastNameRegisterUser" placeholder="digite el segundo nombre">
          </div>
          <div>
            <label for="">Email</label>
            <input type="email" name="emailRegisterUser" placeholder="digite el email">
          </div>
          <div>
            <label for="">Dirección</label>
            <input type="text" name="addressRegisterUser" placeholder="digite el email">
          </div>
          <div>
            <label for="">Contraseña</label>
            <input type="text" name="passwordRegisterUser" placeholder="contraseña">
          </div>
          <div>
            <label for="">Confirmar contraseña</label>
            <input type="text" name="confirmPasswordRegisterUser" placeholder="confirmar contraseña">
          </div>
          <input type="submit" value="Registrarse">
        </form>
      </div>
      <div class="modal-foot">

      </div>
    </div>
  </div>
  <!-- CARD REGISTRATION -->
