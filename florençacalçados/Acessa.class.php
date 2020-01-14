<?php
 
    //variaveis para conexão        
    $SERVER = 'db4free.net'; //servidor
    $USER = 'infonfc'; //usuario
    $PASS = '12345678'; //senha
    $DATABASE = 'bdarduino'; //nome da base
    $conn = new mysqli($SERVER, $USER, $PASS, $DATABASE);
            // Caso algo tenha dado errado, exibe uma mensagem de erro
            if (mysqli_connect_errno())
                trigger_error(mysqli_connect_error());
 
 
?>