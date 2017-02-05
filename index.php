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
    <div class="row">
      <div class="page-header">
        <h1>Lista de Clientes</h1>
      </div>
      <?php
      require_once 'data/meusclientes.php';
      if(!empty($_GET) && $_GET['order'] == "DESC"){
        krsort($todos_clientes);
      }
      ?>
      <div class="span4 offset8" style="text-align: right; margin-bottom: 20px;">
        Ordernar por ID:
        <a href="index.php?order=ASC">Crescente</a>
        <span>&nbsp;|&nbsp;</span>
        <a href="index.php?order=DESC">Decrescente</a>
      </div>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Mais</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($todos_clientes as $key => $cliente): ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><b><?php echo $cliente->getNome(); ?></b></td>
              <td><b><?php echo ($cliente instanceof ClientePessoaFisica) ? "Pessoa Física" : "Pessoa Jurídica"; ?></b></td>
              <td><a href="fichacliente.php?id=<?php echo $key; ?>" class="btn btn-info"><i class="icon-folder-open"></i>&nbsp;Ver dados</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
