<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Calçados</title>
 
</head>
 
<body>
 
            <table cellspacing="0">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Opções</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Opções</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
        require "calcado.class.php";
              //marca é classe
              //marcas é a instancia do objeto
              $calcado = new Calcado();
              //listar é um metodo
              $dados = $calcado->listar();
              //dados é um array
              //cada linha será colocada dentro de m
        if (is_array($dados)) {
              foreach ($dados as $m) {
              ?>
                <tr>
                  <td><a href="alterarMarca.php?id=<?php echo $m["idMarca"]; ?>"><?php echo $m["idMarca"]; ?></a></td>
                  <td><?php echo $m["calcado"]; ?></td>
                  <td><a href="excluirMarca.php?id=<?php echo $m["idMarca"]; ?>">Excluir</a>
                  </td>
                </tr>
              <?php } } ?>  
              </tbody>
            </table>
         
</body>
 
</html>