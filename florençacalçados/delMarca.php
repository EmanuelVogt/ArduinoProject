<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Excluir Sensor</title>
 
</head>
 
<body>
          <?php
           require "sensor.class.php";
          if ($_POST) {
              $idSensor = $_POST["idSensor"];
             
             
              $sensor = new Sensor();
$sensor->setIdSensor($idSensor);
$resultado = $sensor->excluir();
    if ($resultado ==0) {
        echo "Sensor excluido com sucesso com o código: ". $sensor->getIdSensor();
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