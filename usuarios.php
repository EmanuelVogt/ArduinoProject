<!DOCTYPE html>
<html lang="br">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Usuários</title>
 
</head>
 
<body>
 
            <table cellspacing="0">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>TAG</th>
                  <th>Nível</th>
                  <th>Opções</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>TAG</th>
                  <th>Nível</th>
                  <th>Opções</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
        require "usuarios.class.php";
              //marca é classe
              //marcas é a instancia do objeto
              $usuarios = new Usuarios();
              //listar é um metodo
              $dados = $usuarios->listar();
              //dados é um array
              //cada linha será colocada dentro de m
        if (is_array($dados)) {
              foreach ($dados as $m) {
              ?>
                <tr>
                  <td><a href="alterarUsuarios.php?id= <?php echo $m["id"]; ?>"><?php echo $m["id"]; ?></a></td>
                  <td><?php echo $m["nome"]; ?></td>
                  <td><?php echo $m["tag"]; ?></td>
                  <td><?php echo $m["nivel"]; ?></td>
                  <td><a href="exlcuirUsuarios.php?id= <?php echo $m["id"]; ?>">Excluir</a>
                  </td>
                </tr>
              <?php } } ?>  
              </tbody>
            </table>
         
</body>
 
</html>