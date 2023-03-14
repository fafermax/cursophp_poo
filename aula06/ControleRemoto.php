<?php 
require_once "Controlador.php";
    Class ControleRemoto implements Controlador {
        //Atributos
    
    private $volume;
    private $ligado;
    private $tocando;
        //Metodos especiais

    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    //getter e setters

    private function getVolume() {
        return $this->volume;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function getTocando() {
        return $this->tocando;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
    }
    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }
    
    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        echo "<br>Esta ligado?:" .($this->getLigado() ? "SIM" : "NAO");
        echo "<br>Esta tocando?:".($this->getTocando() ? "SIM" : "NAO");
        echo "<br>Volume: ".$this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i+=10) {
            echo "|||||";
        }
        echo "<br>";
    }
    public function fecharMenu()
    {
        echo "<br>Fechando o Menu...";
    }
    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "ERRO! EQUIPAMENTO DESLIGADO.";
        }
    }
    public function menosVolume()
    {
        if ($this->getLigado()) {
            $this->setLigado($this->getVolume() - 5);
        } else {
            echo "ERRO EQUIPAMENTO DESLIGADO.";
        }
    }
    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    
    public function pause()
    {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function play()
    {
       if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
       } 
    }
    }

?>