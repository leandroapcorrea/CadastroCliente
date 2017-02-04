<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dados do cliente</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-resposive.css" rel="stylesheet" />
</head>
<body>
  <div class="container">
    <?php
    require_once 'data/meusclientes.php';
    $id = $_GET['id'];
    //print_r($todos_clientes);
    $vercliente = $todos_clientes[$id];
    ?>
    <div class="page-header">
      <h1>Saiba mais sobre <?php echo $vercliente->getNome(); ?>!</h1>
    </div>
    <table class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td>Nome:</td>
          <td><?php echo $vercliente->getNome(); ?></td>
        </tr>
        <?php if($vercliente->getTipo() == "Pessoa Física"): ?>
          <tr>
            <td>CPF:</td>
            <td><?php echo $vercliente->getCpf(); ?></td>
          </tr>
        <?php else: ?>
          <tr>
            <td>CNPJ:</td>
            <td><?php echo $vercliente->getCnpj(); ?></td>
          </tr>
        <?php endif; ?>
        <tr>
          <td>Endereço:</td>
          <td><?php echo $vercliente->getEndereco(); ?>,&nbsp; <?php echo $vercliente->getNumero(); ?></td>
        </tr>
        <?php if(!empty($vercliente->getEnderecoCobranca())): ?>
        <tr>
          <td>Endereço de Cobrança:</td>
          <td><?php echo $vercliente->getEnderecoCobranca(); ?></td>
        </tr>
      <?php endif; ?>
        <tr>
          <td>Bairro:</td>
          <td><?php echo $vercliente->getBairro(); ?></td>
        </tr>
        <tr>
          <td>CEP:</td>
          <td><?php echo $vercliente->getCep(); ?></td>
        </tr>
        <tr>
          <td>Telefone:</td>
          <td><?php echo $vercliente->getTelefone(); ?></td>
        </tr>
        <tr>
          <td>E-mail:</td>
          <td><?php echo $vercliente->getEmail(); ?></td>
        </tr>
        <tr>
          <td>Classificação deste Cliente:</td>
          <td>
            <?php
            $pontuacao = $vercliente->getClassificacao();

            for($i = 0; $i < $pontuacao; $i++){
              echo '<i class="icon-star"></i>';
            }

            for($i = $pontuacao; $i < 5; $i++){
              echo '<i class="icon-star-empty"></i>';
            }

            if($pontuacao > 0){
              echo "&nbsp;(" . $pontuacao . ")";
            } else {
              echo "&nbsp;(0)";
            }
            ?>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="page-footer">
      <a href="index.php" class="btn">Voltar</a>
    </div>
  </div>
</body>
</html>
