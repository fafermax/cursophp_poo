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
            echo "<p>***************************</p>";
            echo "<p>CHEGOU A HORA! O Lutador" . $this->getNome();
            echo "Veio diretamente de" . $this->getNacionalidade();
            echo "tem" . $this->getIdade() . "anos e pesa" . $this->getPeso() . "Kg";
            echo "<br>Ele tem" . $this->getVitorias() . "vitorias";
            echo $this->getDerrotas() . "Derrotas e " . $this->getEmpates() . "Empates";
        }
        function status() {
            echo "<p>***************************</p>";
            echo "<p>" . $this->getNome() . "e um peso" . $this->getCategoria();
            echo "e ja ganhou " . $this->getVitorias() . " Vezes";
            echo "e perdeu " . $this->getDerrotas() . " Vezes";
            echo "empatou " . $this->getEmpates() . " Vezes";
        }
        function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }
        function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
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
            if ($this->peso < 52.2) {
                $this->categoria = "Invalido!";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9) {
                $this->categoria = "Medio";
            } elseif ($this->peso <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Invalido!!";
            }
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