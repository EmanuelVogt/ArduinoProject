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
if ($_GET) {
    $id = $_GET["id"];
    $rfid = new RFID();
    $rfid ->buscar($id);
?>       
      Excluir ID
              <form method="post" action="delID.php">
                <label for="id">ID</label>
                <input type="hidden" name="id" value="<?php echo $rfid->getId(); ?>"/>
                <input  id="nome" name="nome" value="<?php echo $rfid->getNome(); ?>" type="text" placeholder="Nome " disabled>
             
         
          <button class="btn btn-primary btn-block" type="submit">Excluir</button>
        </form>
<?php }
 
?>
     
</body>
 
</html>