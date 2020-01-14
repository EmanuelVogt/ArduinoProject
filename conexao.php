<?php

    $CON_CONEXAO = "mysql:host=db4free.net;dbname=dbarduino;charset=utf8";
    $CON_USUARIO = "infonfc";
    $CON_SENHA = "12345678"; 

    try {

        $conexao = new PDO ($CON_CONEXAO, $CON_USUARIO, $CON_SENHA);

        echo "Conectado com sucesso";


    } catch (PDOException $erro) {

        //echo "Erro: " . $erro->getMessage(); 

        echo "Conexao_erro";
        
        exit;

    }
?>