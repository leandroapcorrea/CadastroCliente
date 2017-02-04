<?php

class ClientePessoaFisica extends Cliente {

  protected $cpf;

  public function getCpf(){
    return $this->cpf;
  }

  public function setCpf($cpf){
    $this->cpf = $cpf;
  }

}
