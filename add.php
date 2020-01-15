<?php 
    
    include "conexao.php";

    $s1_rec = $_GET['idrfid'];

    $SQL_INSERT = "INSERT INTO rfid (idrfid) VALUES (:ID1)";
    $stmt = $conexao->prepare($SQL_INSERT);

    $stmt->bindParam(":ID1", $s1_rec);
    
        if($stmt->execute()) {
            echo "\n ,insert ok";
        } else {
            echo "insert erro";
        }
    ?>