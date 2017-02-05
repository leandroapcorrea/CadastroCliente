<?php
require_once 'Cliente.php';
require_once 'interface/ClienteInterface.php';

class ClientePessoaFisica extends Cliente implements ClienteInterface {

  protected $cpf;
  protected $enderecoCobranca;
  protected $classificacao;

  public function getCpf(){
    return $this->cpf;
  }

  public function setCpf($cpf){
    $this->cpf = $cpf;
  }

  public function getEnderecoCobranca(){
    return $this->enderecoCobranca;
  }

  public function setEnderecoCobranca($enderecoCobranca){
    $this->enderecoCobranca = $enderecoCobranca;
  }

  public function getClassificacao(){
    return $this->classificacao;
  }

  public function setClassificacao($classificacao){
    $this->classificacao = $classificacao;
  }

}
