<?php
session_start();
require "conn.php";
$email=$_GET['email'];
$user=$_GET['user'];
$nombreCompleto=$_GET['nombre'];
$dni=$_GET['dni'];
$domicilio=$_GET['domicilio'];
$pass=$_GET['pass'];

    $sqlemail="SELECT * FROM `users` WHERE `email`=:email";
    $emailVerif=$conn->prepare($sqlemail);
    $emailVerif->bindParam(":email",$email);
    $emailVerif->execute();
    $emailVerif=$emailVerif->fetch(PDO::FETCH_ASSOC);
if($email==$emailVerif['email']){
    echo json_encode("");
}else{
    
$sql="INSERT INTO `users`(`email`, `pass`, `nombreCompleto`, `dni`, `domicilio`, `user`) VALUES (:email,:pass,:nombreCompleto,:dni,:domicilio,:user)";
$res=$conn->prepare($sql);
$res->bindParam(":email",$email);
$res->bindParam(":pass",$pass);
$res->bindParam(":nombreCompleto",$nombreCompleto);
$res->bindParam(":dni",$dni);
$res->bindParam(":domicilio",$domicilio);
$res->bindParam(":user",$user);

/* $res=$res->fetch(PDO::FETCH_ASSOC); */
/* echo json_encode($email." ".$pass); */
if(!$res->execute()){
    echo json_encode("mal");
}else{
    $sql="SELECT * FROM `users` WHERE `email`=:email";
    $res=$conn->prepare($sql);
    $res->bindParam(":email",$email);
    $res->bindParam(":pass",$pass);
    $res->execute();
    $res=$res->fetch(PDO::FETCH_ASSOC);
    $_SESSION["user"]=$res;
    echo json_encode($res);
}
}



?>