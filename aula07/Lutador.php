<?php 
    class Lutador {
        //Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;
        
        //Metodos Internos
        function apresentar() {

        }
        function status() {

        }
        function ganharLuta() {

        }
        function perderLuta() {

        }
        function empatarLuta() {

        }

        //Metodos Especiais

        function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->peso = $pe;
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }
        //Metodos getters/setters

        //Metodos acessores:
        function getNome() {
            return $this->nome;
        }
        function getNacionalidade() {
            return $this->nacionalidade;
        }
        function getIdade() {
            return $this->idade;
        }
        function getAltura() {
            return $this->altura;
        }
        function getPeso() {
            return $this->peso;
        }
        function getCategoria() {
            return $this->categoria;
        }
        function getVitorias() {
            return $this->vitorias;
        }
        function getDerrotas() {
            return $this->derrotas;
        }
        function getEmpates() {
            return $this->empates;
        }
        //Metodos Modificadores:

        function setNome($nome) {
            $this->nome = $nome;
        }
        function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }
        function setIdade($idade) {
            $this->idade = $idade;
        }
        function setAltura($altura) {
            $this->altura = $altura;
        }
        function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }
        function setCategoria() {
            
        }
        function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }
        function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }
        function setEmpates($empates) {
            $this->empates = $empates;
        }
    }
?>