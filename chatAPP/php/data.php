<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT incoming_msg_id,outgoing_msg_id,msg,(SELECT count(*) from messages where leido=0 and incoming_msg_id={$_SESSION['unique_id']}) total FROM messages WHERE (incoming_msg_id = {$row['id']}
                OR outgoing_msg_id = {$row['id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No hay mensajes disponibles";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "Tú: " : $you = "";
        }else{
            $you = "";
            
        }


        if (empty($you)) {
            $c ="color:black;font-weight: bold;";
        }else{
            $c ="color:black;";
        }
        ($row['status'] == "Desconectado") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['id']) ? $hid_me = "hide" : $hid_me = "";

        
            $output .= '<a onclick="cargar('. $row['id'] .')">
            <div class="content">
            <i style="color:#20a2ffdb;" class="fas fa-user fa-3x"></i>
            <div class="details">
                <span>'. $row['nombreCompleto'].'</span>
                <p style="'.$c.'">'. $you . $msg .'</p>
            </div>
            </div>
            <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
            </a>';


    }
?>