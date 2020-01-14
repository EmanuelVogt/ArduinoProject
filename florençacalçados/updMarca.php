<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Alterar Sensor</title>
 
</head>
 
<body>
          <?php
          require "sensor.class.php";
          if ($_POST) {
              $idSensor = $_POST["idSensor"];
              $sensor1 = $_POST["sensor1"];
              $sensor2 = $_POST["sensor2"];
              $sensor3 = $_POST["sensor3"];
             
              $sensor = new Sensor();
                $sensor->setSensor1($sensor1);
                $sensor->setSensor2($sensor2);
                $sensor->setSensor3($sensor3);
                $sensor->setIdSensor($idSensor);
                $resultado = $sensor->alterar();
    if ($resultado ==0) {
        echo "Sensor alterado com sucesso com o código: ". $sensor->getIdSensor();
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