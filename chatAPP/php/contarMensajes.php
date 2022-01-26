<?php
include_once "config.php";
$sql = "SELECT COUNT(*) total FROM `messages`";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
echo json_encode($row);
?>