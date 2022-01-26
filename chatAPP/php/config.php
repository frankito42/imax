<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "imaxdb";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  $conn->set_charset("utf8");
  if(!$conn){
    echo "Error al conectarse a la base de datos.".mysqli_connect_error();
  }
?>
