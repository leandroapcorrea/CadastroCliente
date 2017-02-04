<?php

//Dados de Clientes
require_once 'class/ClientePessoaJuridica.php';
require_once 'class/ClientePessoaFisica.php';

$cliente1 = new ClientePessoaJuridica();
$cliente1->setNome("Leandro Corrêa");
$cliente1->setEndereco("Rua José Moraes");
$cliente1->setNumero(2928);
$cliente1->setBairro("Ruas Esburacadas");
$cliente1->setCep(12900000);
$cliente1->setTelefone(1144120000);
$cliente1->setEmail("leandro@leandro.com");
$cliente1->setCnpj(16878675001820);
$cliente1->setEnderecoCobranca("Rua dos Jaraguas, 1180 - Jardim Novo Mundo, São Paulo");
$cliente1->setClassificacao(5);

$cliente2 = new ClientePessoaFisica();
$cliente2->setNome("Marcos Drawer");
$cliente2->setEndereco("Rua Alziro Oliveira");
$cliente2->setNumero(2469);
$cliente2->setBairro("Bairro das Boas Moças");
$cliente2->setCep(12696924);
$cliente2->setTelefone(1140124040);
$cliente2->setEmail("marcos@gaveteiro.com");
$cliente2->setCpf(12345678901);
$cliente2->setClassificacao(3);

$cliente3 = new ClientePessoaJuridica();
$cliente3->setNome("Angela Marques");
$cliente3->setEndereco("Rua das Bananas");
$cliente3->setNumero(14);
$cliente3->setBairro("Tanque dos tanques");
$cliente3->setCep(1500085);
$cliente3->setTelefone(1140315544);
$cliente3->setEmail("angelahta@hotmail.com");
$cliente3->setCnpj(16456123000822);
$cliente3->setClassificacao(2);

$cliente4 = new ClientePessoaFisica();
$cliente4->setNome("Clayton Rossano");
$cliente4->setEndereco("Avenida Lindóia");
$cliente4->setNumero(66);
$cliente4->setBairro("Lavachão");
$cliente4->setCep(12200012);
$cliente4->setTelefone(1145122011);
$cliente4->setEmail("brow@hotmail.com");
$cliente4->setCpf(36925814788);
$cliente4->setEnderecoCobranca("Av Lindoinha, 55 - Matatudo, Linguiça City");
$cliente4->setClassificacao(3);

$cliente5 = new ClientePessoaFisica();
$cliente5->setNome("Cristiano Romano");
$cliente5->setEndereco("Avenida Cassiano Ricardo");
$cliente5->setNumero(1324);
$cliente5->setBairro("Jardim Aquários");
$cliente5->setCep(19012455);
$cliente5->setTelefone(1245552011);
$cliente5->setEmail("romano@intergroup.com");
$cliente5->setCpf(14725836955);
$cliente5->setClassificacao(1);

$cliente6 = new ClientePessoaJuridica();
$cliente6->setNome("Rodrigo Pereira");
$cliente6->setEndereco("Avenida Cassiano Ricardo Júnior");
$cliente6->setNumero(9977);
$cliente6->setBairro("Jardim Amanda");
$cliente6->setCep(19012972);
$cliente6->setTelefone(1254873125);
$cliente6->setEmail("pereira@rodrigo.net");
$cliente6->setCnpj(16758545000555);
$cliente6->setClassificacao(1);

$cliente7 = new ClientePessoaFisica();
$cliente7->setNome("Rafaela Mendonça");
$cliente7->setEndereco("Avenida Voa March");
$cliente7->setNumero(140);
$cliente7->setBairro("Interlagos");
$cliente7->setCep(12612140);
$cliente7->setTelefone(12975132011);
$cliente7->setEmail("rafaela@pilotodefuga.com.br");
$cliente7->setCpf(78945612300);
$cliente7->setClassificacao(1);

$cliente8 = new ClientePessoaJuridica();
$cliente8->setNome("Santos Douglas");
$cliente8->setEndereco("Avenida Vai Corinthians");
$cliente8->setNumero(9753);
$cliente8->setBairro("Arena Corinthians");
$cliente8->setCep(12888997);
$cliente8->setTelefone(12987456421);
$cliente8->setEmail("santos@corithians.com");
$cliente8->setCnpj(20013456000354);
$cliente8->setClassificacao(5);

$cliente9 = new ClientePessoaFisica();
$cliente9->setNome("Rafael Rangel");
$cliente9->setEndereco("Rua dos Sete Meses");
$cliente9->setNumero(9977);
$cliente9->setBairro("Chickens Orders");
$cliente9->setCep(15779821);
$cliente9->setTelefone(1212443355);
$cliente9->setEmail("rangel@lol.com");
$cliente9->setCpf(12345678900);
$cliente9->setClassificacao(5);

$cliente10 = new ClientePessoaJuridica();
$cliente10->setNome("Luiz Lampião");
$cliente10->setEndereco("Rua Cabra da Peste");
$cliente10->setNumero(390);
$cliente10->setBairro("Cidade dos Arretados");
$cliente10->setCep(15779000);
$cliente10->setTelefone(12955448752);
$cliente10->setEmail("lampiao@cabrasdapeste.net");
$cliente10->setCnpj(20013789001645);
$cliente10->setClassificacao(4);

$todos_clientes = [$cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10];

?>
