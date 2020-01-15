<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Excluir Usuários</title>
 
</head>
 
<body>
<?php
 require "usuarios.class.php";
if ($_GET) {
    $id = $_GET["id"];
    $usuarios = new Usuarios();
    $usuarios ->buscar($id);
?>       
      Excluir Usuários
              <form method="post" action="delUsuarios.php">
                <label for="usuario">Usuário</label>
                <input type="hidden" name="id" value="<?php echo $usuarios->getId(); ?>"/>
                <input  id="nome" name="nome" value="<?php echo $usuarios->getNome(); ?>" type="text" placeholder="Nome do Usuário" disabled>
             
         
          <button class="btn btn-primary btn-block" type="submit">Excluir</button>
        </form>
<?php }
 
?>
     
</body>
 
</html>