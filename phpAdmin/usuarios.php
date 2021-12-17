<?php
require "../phpLogin/conn.php";
$sql="SELECT * FROM `users`";
$res=$conn->prepare($sql);
$res->execute();
$res=$res->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
?>