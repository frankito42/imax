<?php
    session_start();

    include_once "config.php";


    if($_SESSION['unique_id']==27){
        $outgoing_id = $_SESSION['unique_id'];
        $sql = "SELECT DISTINCT  u.`id`, u.`email`, u.`pass`, u.`nombreCompleto`, u.`dni`, u.`domicilio`, u.`tipo`, u.`status`, u.`img`,(SELECT msg FROM messages WHERE outgoing_msg_id=u.id ORDER BY msg_id DESC limit 1),
        (SELECT msg_id FROM messages WHERE outgoing_msg_id=u.id  ORDER BY msg_id DESC limit 1) msssss
        FROM users =u where not u.id=27 ORDER BY msssss DESC";
        
        $query = mysqli_query($conn, $sql);
        $output = "";
        if(mysqli_num_rows($query) == 0){
            $output .= "No hay usuarios conectados";
        }elseif(mysqli_num_rows($query) > 0){
            include_once "data.php";
        }


    }else{
        
        $outgoing_id = $_SESSION['unique_id'];
        $sql = "SELECT * FROM users WHERE  id = 27 ORDER BY id DESC";
        $query = mysqli_query($conn, $sql);
        $output = "";
        if(mysqli_num_rows($query) == 0){
            $output .= "No hay usuarios conectados";
        }elseif(mysqli_num_rows($query) > 0){
            include_once "data.php";
        }
    }
    echo $output;




?>