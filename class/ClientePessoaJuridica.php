<?php

require_once 'Cliente.php';
require_once 'interface/ClienteInterface.php';

class ClientePessoaJuridica extends Cliente implements ClienteInterface {

  protected $cnpj;
  protected $enderecoCobranca;
  protected $classificacao;

  public function getCnpj(){
    return $this->cnpj;
  }

  public function setCnpj($cnpj){
    $this->cnpj = $cnpj;
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
