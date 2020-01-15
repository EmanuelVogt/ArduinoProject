<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Alterar Dispositivos</title>
 
</head>
 
<body>
          <?php
          require "dispositivos.class.php";
          if ($_POST) {
              $id = $_POST["id"];
              $nome = $_POST["nome"];
              $idDisp = $_POST["idDisp"];
              $nivel = $_POST["nivel"];
              
             
              $dispositivos = new Dispositivos();
                $dispositivos->setNome($nome);
                $dispositivos->setId($id);
                $dispositivos->setIdDisp($idDisp);
                $dispositivos->setNivel($nivel);
                
                
                $resultado = $dispositivos->alterar();
    if ($resultado ==0) {
        echo "Dispositivo alterado com sucesso com o código: ". $dispositivos->getId();
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