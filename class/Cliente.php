<?php

class Cliente {

  public $nome;
  public $endereco;
  public $numero;
  public $bairro;
  public $cep;
  public $telefone;
  public $email;

  public function getNome(){
    return $this->nome;
  }

  public function getEndereco(){
    return $this->endereco;
  }

  public function getNumero(){
    return $this->numero;
  }

  public function getBairro(){
    return $this->bairro;
  }

  public function getCep(){
    return $this->cep;
  }

  public function getTelefone(){
    return $this->telefone;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function setEndereco($endereco){
    $this->endereco = $endereco;
  }

  public function setNumero($numero){
    $this->numero = $numero;
  }

  public function setBairro($bairro){
    $this->bairro = $bairro;
  }

  public function setCep($cep){
    $this->cep = $cep;
  }

  public function setTelefone($telefone){
    $this->telefone = $telefone;
  }

  public function setEmail($email){
    $this->email = $email;
  }

}
