<?php 
    class ContaBanco {
        //Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

    }

    //metodos
    public function abrirConta() {

    }
    public function fecharConta() {

    }
    public function depositar() {

    }
    public function sacar() {

    }
    public function pagarMensal() {

    }
    //metodo especial
    public function __contruct() {
        $this->$saldo = 0;
        $this->status = false;
    }
    public function setNumConta($n = ) {

    }
?>