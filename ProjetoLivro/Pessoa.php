<?php 
    class Pessoa {
    //Atributos  
      public $nome;
      public $idade;
      public $sexo;  
    //Metodos
    private function fazerAniver() {
        $this->idade ++;
    }
    function __construct($nome, $idade, $sexo) {
      $this->nome = $nome;
      $this->idade = $idade;
      $this->sexo = $sexo;
    }
    //Metodos especiais
    function getNome() {
      return $this->nome;
    }
    function getIdade() {
      return $this->idade;
    }
    function getSexo() {
      return $this->sexo;
    }
    function setNome($nome) {
      $this->nome = $nome;
    }
    function setIdade($idade) {
      $this->idade = $idade;
    }
    function setSexo($sexo) {
      $this->sexo = $sexo;
    }
    }
?>