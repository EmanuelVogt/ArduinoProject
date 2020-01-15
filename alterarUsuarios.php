<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Alterar Usuários</title>
 
</head>
 
<body>
<?php
require "usuarios.class.php";
if ($_GET) {
    $id = $_GET["id"];
    $usuarios = new Usuarios();
    $usuarios ->buscar($id);
?>       
      Atualização de Usuários
        <form method="post" action="updUsuarios.php">
         
                <label for="usuario">Usuário</label>
                <input type="hidden" name="id" value="<?php echo $usuarios->getId(); ?>"/>
                <input  id="nome" name="nome" value="<?php echo $usuarios->getNome(); ?>"  placeholder="Nome do Usuário">
             
          <button class="btn btn-primary btn-block" type="submit">Alterar</button>
        </form>
<?php }
 
?>
</body>
 
</html>