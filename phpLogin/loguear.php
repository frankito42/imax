<?php
session_start();
require "conn.php";
$email=$_GET['email'];
$pass=$_GET['pass'];


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
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

        $_SESSION['unique_id'] = $res['id'];
        $status = "En línea";
        $sqlUpdate ="UPDATE users SET status = '$status' WHERE id = $res[id]";
        $exec=$conn->prepare($sqlUpdate);
        $exec->execute();
        $_SESSION["user"]=$res;
        echo json_encode($res);
    }
}else{
    $sql="SELECT * FROM `users` WHERE `user`=:user AND `pass`=:pass";
    $res=$conn->prepare($sql);
    $res->bindParam(":user",$email);
    $res->bindParam(":pass",$pass);
    $res->execute();
    $res=$res->fetch(PDO::FETCH_ASSOC);


    $status = "En línea";
    $sqlUpdate ="UPDATE users SET status = '$status' WHERE id = $res[id]";
    $exec=$conn->prepare($sqlUpdate);
    $exec->execute();



    $_SESSION['unique_id'] = $res['id'];
    /* echo json_encode($email." ".$pass); */
    if($res==null){
        echo json_encode("mal");
    }else{
        $_SESSION["user"]=$res;
        echo json_encode($res);
    }
}



?>