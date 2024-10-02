<?php
  // IMPORT SERVICES
  require_once '../services/homeServices.php';
  require_once '../services/globalServices.php';

  // HEAD
  renderView('../templates/head.php',$data_head);
  // HEAD
?>

<!-- MAIN -->
<body>
  <!-- ASIDE -->
  <?php renderView('../templates/aside.php') ?>
  <!-- ASIDE -->

  <!-- MAIN -->
  <div class="main">

    <!-- HEADER -->
    <?php renderView('../templates/header.php') ?>
    <!-- HEADER -->

    <!-- CONTENT -->
    <div class="con">
      <div class="main-body">
        <h1>Bienvenido al home, <?php echo $user_data['fdb_name'] ." ". $user_data['fdb_last_name']; ?> 🎇💣</h1>

      </div>
    </div>
    <!-- CONTENT -->
    
  </div>  
  <!-- MAIN -->

  <!-- SRIPTS -->
  <?php renderView('../templates/footer.php',$data_footer) ?>
  <!-- SRIPTS -->
</body>
<!-- MAIN -->
</html>
