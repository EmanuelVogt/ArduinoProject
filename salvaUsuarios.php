<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cadastrar Usuários</title>
 
</head>
 
<body>
 <?php
 
            require "usuarios.class.php";
              $usuarios = new Usuarios();
              if ($_POST) {
              $nome = $_POST["nome"];
              $tag = $_POST["tag"];
              $nivel = $_POST["nivel"];
              
             
            
              $usuarios->setNome($nome);
              $usuarios->setTag($tag);
              $usuarios->setNivel($nivel);
              $resultado = $usuarios->cadastrar();
    if ($resultado ==0) {
        echo "Usuário cadastrado com sucesso com o código: ". $usuarios->getId();
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