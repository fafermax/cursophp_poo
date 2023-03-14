<?php 
    Class ControleRemoto {
        //Atributos
    
    private $volume;
    private $ligado;
    private $tocando;
        //Metodos especiais

    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    //getter e setters

    function getVolume() {
        return $this->volume;
    }
    function getLigado() {
        return $this->ligado;
    }
    function getTocando() {
        return $this->tocando;
    }
    function setVolume($volume) {
        $this->volume = $volume;
    }
    function setLigado($ligado) {
        $this->ligado = $ligado;
    }
    function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    }

?>