<?php 

    require_once "Lutador.php";

    class Luta {
        //Atributos
    
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;    
 
    //Metodos Publicos
 
    public function marcarLuta($l1, $l2) {
        if ($l1.getCategoria() == $l2.getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }    
    public function lutar() {

    }
    //Metodos Especiais

    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }
    function getRounds() {
        return $this->rounds;
    }
    function getAprovada() {
        return $this->aprovada;
    }
    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }
    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

}
?>