<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Clientes</title>
  </head>
  <body>
    <?php
    require_once 'data/meusclientes.php';
    print_r($todos_clientes);
    ?>
  </body>
</html>
