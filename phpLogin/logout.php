<?php
session_start();
require "conn.php";
$status = "Desconectado";
$sqlUpdate ="UPDATE users SET status = '$status' WHERE id = $_SESSION[unique_id]";
$exec=$conn->prepare($sqlUpdate);
$exec->execute();

session_unset();
session_destroy();
header("location:../login.php");
?>