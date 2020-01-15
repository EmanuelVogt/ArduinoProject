<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cadastrar Dispositivos</title>
 
</head>
 
<body>
 
          <?php
 
          require "dispositivos.class.php";

          $dispositivos = new Dispositivos();
          if ($_POST) {
              $nome = $_POST["nome"];
              $idDisp = $_POST["idDisp"];
              $nivel = $_POST["nivel"];
              
             
              
          $dispositivos->setNome($nome);
          $dispositivos->setIdDisp($idDisp);
          $dispositivos->setNivel($nivel);
          $resultado = $dispositivos->cadastrar();

          
    if ($resultado ==0) {
        echo "Dispositivo cadastrado com sucesso com o código: ". $dispositivos->getId();
        echo "<br/>";
    }
    else {
        echo "Erro";
    }
             
          }
          else {
              echo "Dados não preenchidos";
          }
          ?>
       
</body>
 
</html>