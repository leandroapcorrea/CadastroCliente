<?php

class ClientePessoaJuridica extends Cliente {

  protected $cnpj;

  public function getCnpj(){
    return $this->cnpj;
  }

  public function setCnpj($cnpj){
    $this->cnpj = $cnpj;
  }

}
