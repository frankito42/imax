<?php 
  session_start();
  include_once "php/config.php";
  /* if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  } */
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <i style="color:black;" class="fas fa-user fa-3x"></i>
          <div class="details">
            <span><?php echo $row['nombreCompleto'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <!-- <a href="../../inicio.php" class="logout">Salir</a> -->
      </header>
      <?php
      if ($_SESSION['unique_id']==27) {
      $display="";
      }else{
        $display="none";

      }
      
      
      ?>
      <div style="display:<?php echo $display?> !important;" class="search">
        <span class="text">Seleccionar un usuario para chatear</span>
        <input type="text" placeholder="Ingresa un nombre...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <?php
     
      ?>
      <div  class="users-list">
  
      </div>
    </section>
  </div>

  <script src="chatAPP/javascript/users.js"></script>

</body>
</html>
