<?php
require "../phpLogin/conn.php";
$userPost=json_decode($_POST['usuario']);
$sql="UPDATE `users` SET`email`=:e,
                        `pass`=:p,
                        `nombreCompleto`=:n,
                        `dni`=:d,
                        `domicilio`=:dom,
                        `user`=:u
                        WHERE id=:id";
$res=$conn->prepare($sql);
$res->bindParam(":e",$userPost->email);
$res->bindParam(":p",$userPost->pass);
$res->bindParam(":n",$userPost->nombre);
$res->bindParam(":d",$userPost->dni);
$res->bindParam(":dom",$userPost->domicilio);
$res->bindParam(":u",$userPost->user);
$res->bindParam(":id",$userPost->id);

/* $res=$res->fetchAll(PDO::FETCH_ASSOC); */
if ($res->execute()) {
    echo json_encode("yes");
}
/* echo json_encode($userPost); */
?>