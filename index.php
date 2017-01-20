<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-resposive.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>Lista de Clientes</h1>
      </div>
      <?php
      require_once 'data/meusclientes.php';
      // print_r($todos_clientes);
      ?>
      <table class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Mais</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($todos_clientes as $key => $cliente): ?>
          <tr>
            <td><?php echo $key; ?></td>
            <td><b><?php echo $cliente->getNome(); ?></b></td>
            <td><a href="fichacliente.php?id=<?php echo $key; ?>" class="btn btn-info"><i class="icon-folder-open"></i>&nbsp;Ver mais</a></td>
          </tr>
      <?php endforeach; ?>
    </tbody>
      </table>
  </div>
  </body>
</html>
