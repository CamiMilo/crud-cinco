<body>
  <!-- ASIDE -->
  <aside class="aside-navigation">
    <div>
      <div class="aside-logo">
        <a href="../views/login.php"><span>LOGO</span></a>
      </div>
      <ul>
        <li>Home</li>
        <li>Usuarios</li>
      </ul>
    </div>
  </aside>
  <!-- ASIDE -->

  <!-- MAIN -->
  <div class="main">
    <!-- HEADER -->
    <header class="header-navigator">
      <nav>
        <div class="con">
          <ul>
            <li>
              <input type="search" placeholder="Buscar...">
            </li>
            <li>
              <div class="btn-profile">C
                <div class="btn-profile-hover">
                  <ul>
                    <li>Perfil</li>
                    <a href="../classes/logout.php"><li>Cerrar sesión</li></a>
                  </ul>
                </div>
              </div>

            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- HEADER -->

    <div class="con">
      <div class="main-body">
        <h1>Bienvenido al home, <?php echo $user_data['fdb_name'] ." ". $user_data['fdb_last_name']; ?> 🎇💣</h1>

      </div>
    </div>
    
  </div>  
  <!-- MAIN -->
</body>
</html>