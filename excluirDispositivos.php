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
if ($_GET) {
    $id = $_GET["id"];
    $dispositivos = new Usuarios();
    $dispositivos ->buscar($id);
?>       
      Excluir Dispositivos
              <form method="post" action="delDispositivos.php">
                <label for="dispositivos">Dispositivo</label>
                <input type="hidden" name="id" value="<?php echo $dispositivos->getId(); ?>"/>
                <input  id="nome" name="nome" value="<?php echo $dispositivos->getNome(); ?>" type="text" placeholder="Nome do Dispositivo" disabled>
             
         
          <button class="btn btn-primary btn-block" type="submit">Excluir</button>
        </form>
<?php }
 
?>
     
</body>
 
</html>