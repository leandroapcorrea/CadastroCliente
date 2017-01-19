<?php

//Dados de Clientes
require_once 'class/Cliente.php';

$cliente1 = new Cliente();
$cliente1->setNome("Leandro Corrêa");
$cliente1->setEndereco("Rua José Moraes");
$cliente1->setNumero(2928);
$cliente1->setBairro("Bairro das ruas esburacadas");
$cliente1->setCep(12900000);
$cliente1->setEmail("leandro@leandro.com");

$cliente2 = new Cliente();
$cliente2->setNome("Marcos Drawer");
$cliente2->setEndereco("Rua Alziro Oliveira");
$cliente2->setNumero(2469);
$cliente2->setBairro("Bairro das Boas Moças");
$cliente2->setCep(12696924);
$cliente2->setEmail("marcos@gaveteiro.com");

$cliente3 = new Cliente();
$cliente3->setNome("Angela Marques");
$cliente3->setEndereco("Rua das Bananas");
$cliente3->setNumero(14);
$cliente3->setBairro("Tanque dos tanques");
$cliente3->setCep(1500085);
$cliente3->setEmail("angelahta@hotmail.com");

$todos_clientes = [$cliente1, $cliente2, $cliente3];

?>
