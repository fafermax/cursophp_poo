<?php 
require_once "Controlador.php";
    Class ControleRemoto implements Controlador {
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
    public function abrirMenu()
    {
        
    }
    public function desligar()
    {
        
    }
    public function desligarMudo()
    {
        
    }
    public function fecharMenu()
    {
        
    }
    public function ligar()
    {
        
    }
    public function ligarMudo()
    {
        
    }
    public function maisVolume()
    {
        
    }
    public function menosVolume()
    {
        
    }
    public function pause()
    {
        
    }
    public function play()
    {
        
    }
    }

?>