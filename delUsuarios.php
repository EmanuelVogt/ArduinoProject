<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Excluir Cliente</title>
 
</head>
 
<body>
          <?php
           require "usuarios.class.php";
          if ($_POST) {
              $id = $_POST["id"];
              $nome = $_POST["nome"];
              $tag = $_POST["tag"];
              $nivel = $_POST["nivel"];
              
             
             
              $usuarios = new Usuarios();
$usuarios->setId($id);
$usuarios->setNome($nome);
$usuarios->setTag($tag);
$usuarios->setNivel($nivel);
$resultado = $usuarios->excluir();
    if ($resultado ==0) {
        echo "Usuário excluido com sucesso com o código: ". $usuarios->getId();
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