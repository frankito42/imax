<?php
require "../phpLogin/conn.php";
$sql="DELETE FROM `users` WHERE id=$_GET[id]";
$delete=$conn->prepare($sql);
if($delete->execute()){
    echo json_encode("delete");
}
?>