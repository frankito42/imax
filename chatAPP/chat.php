<?php 
/*   session_start(); */
  include_once "php/config.php";
 /*  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  } */
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a onclick="cargar()" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <i style="color:black;" class="fas fa-user fa-3x"></i>
        <div class="details">
          <span><?php echo $row['nombreCompleto']?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div style="background-image: url('chatAPP/chat.png');background-repeat: no-repeat;background-size: cover;" class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Escribe un mensaje" autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>
 <!--  <audio id="" style="display: none;" src="in.wav" > -->


  </audio>
  <script src="chatAPP/javascript/chat.js"></script>

</body>
</html>
