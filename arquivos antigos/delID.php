<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Excluir ID</title>
 
</head>
 
<body>
          <?php
           require "rfid.class.php";
          if ($_POST) {
              $id = $_POST["id"];
             
             
              $rfid = new RFID();
$rfid->setId($id);
$resultado = $rfid->excluir();
    if ($resultado ==0) {
        echo "ID excluido com sucesso com o código: ". $rfid->getId();
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