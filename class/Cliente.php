<?php

class Cliente {

  protected $nome;
  protected $endereco;
  protected $numero;
  protected $bairro;
  protected $cep;
  protected $telefone;
  protected $email;

  public function getNome(){
    return $this->nome;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function getEndereco(){
    return $this->endereco;
  }

  public function setEndereco($endereco){
    $this->endereco = $endereco;
  }

  public function getNumero(){
    return $this->numero;
  }

  public function setNumero($numero){
    $this->numero = $numero;
  }

  public function getBairro(){
    return $this->bairro;
  }

  public function setBairro($bairro){
    $this->bairro = $bairro;
  }

  public function getCep(){
    return $this->cep;
  }

  public function setCep($cep){
    $this->cep = $cep;
  }

  public function getTelefone(){
    return $this->telefone;
  }

  public function setTelefone($telefone){
    $this->telefone = $telefone;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
  }

}
