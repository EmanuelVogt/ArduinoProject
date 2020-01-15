<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dispositivos</title>
 
</head>
 
<body>
 
            <table cellspacing="0">
              <thead>
                <tr>
                  <th>BDn</th>
                  <th>Nome</th>
                  <th>ID</th>
                  <th>Nível</th>
                  <th>Opções</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>BDn</th>
                  <th>Nome</th>
                  <th>ID</th>
                  <th>Nível</th>
                  <th>Opções</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
        require "dispositivos.class.php";
              //marca é classe
              //marcas é a instancia do objeto
              $dispositivos = new Dispositivos();
              //listar é um metodo
              $dados = $dispositivos->listar();
              //dados é um array
              //cada linha será colocada dentro de m
        if (is_array($dados)) {
              foreach ($dados as $m) {
              ?>
                <tr>
                  <td><a href="alterarDispositivos.php?id=<?php echo $m["id"]; ?>"><?php echo $m["id"]; ?></a></td>
                  <td><?php echo $m["nome"]; ?></td>
                  <td><?php echo $m["idDisp"]; ?></td>
                  <td><?php echo $m["nivel"]; ?></td>
                  <td><a href="exlcuirDispositivos.php?id=<?php echo $m["id"]; ?>">Excluir</a>
                  </td>
                </tr>
              <?php } } ?>  
              </tbody>
            </table>
         
</body>
 
</html>