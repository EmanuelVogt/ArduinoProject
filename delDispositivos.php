<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Excluir Dispositivos</title>
 
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
$dispositivos->setId($id);
$dispositivos->setNome($nome);
$dispositivos->setIdDisp($idDisp);
$dispositivos->setNivel($nivel);
$resultado = $usuarios->excluir();
    if ($resultado ==0) {
        echo "Dispositivo excluido com sucesso com o código: ". $dispositivos->getId();
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