<?php 
    
    include "conexao.php";

    $s1_rec = $_GET['s1'];
    $s2_rec = $_GET['s2'];
    $s3_rec = $_GET['s3'];

    $SQL_INSERT = "INSERT INTO tbsensores (rfid) VALUES (:ID)";

    $stmt = $conexao->prepare($SQL_INSERT);

    $stmt->bindParam(":ID", $s1_rec);
    
        if($stmt->execute()) {
            echo "\n ,insert ok";
        } else {
            echo "insert erro";
        }
    ?>