<?php
session_start();
require "conn.php";
$email=$_GET['email'];
$pass=$_GET['pass'];
$sql="SELECT * FROM `users` WHERE `email`=:email AND `pass`=:pass";
$res=$conn->prepare($sql);
$res->bindParam(":email",$email);
$res->bindParam(":pass",$pass);
$res->execute();
$res=$res->fetch(PDO::FETCH_ASSOC);
/* echo json_encode($email." ".$pass); */
if($res==null){
    echo json_encode("mal");
}else{
    $_SESSION["user"]=$res;
    echo json_encode($res);
}
?>