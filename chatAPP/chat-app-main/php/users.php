<?php
    session_start();

    include_once "config.php";


    if($_SESSION['unique_id']==27){
        $outgoing_id = $_SESSION['unique_id'];
        $sql = "SELECT * FROM users WHERE NOT id = {$outgoing_id} ORDER BY id DESC";
        
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