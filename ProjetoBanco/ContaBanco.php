<?php 
    class ContaBanco {
        //Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

   

    //metodos
    public function abrirConta($t) {
       $this->setTipo($t);
       $this->setStatus(true);
       if ($t == "CC") {
            $this->setSaldo(50);
       } elseif ($t == "CP") {
            $this->setSaldo(150);
       }
    }
    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda com dinheiro, nao e possivel fecha-la!</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Esta conta esta em debito, nao e possivel encerrar!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de ".$this->getDono()." fechada com sucesso</p>";
        }
    }
    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de R$:$v na conta de:".$this->getDono()."</p>";
        } else {
            echo "<p>Conta fechada. Nao e possivel depositar</p>";
        }
    }
    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$:$v autorizado na conta de: ".$this->getDono()."</p>";
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            echo "<p>Nao e possivel sacar de uma conta encerrada.</p>";
        }
    }
    public function pagarMensal() {
        if($this->getTipo() == "CC") {
            $v = 12;
        } else if ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$:$v debitada na conta:".$this->getDono()."</p>";
        } else {
            echo "<p>Voce possui problemas com essa conta!, Contate sua agencia.</p>";
        }
    }
    //metodo especial
    function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }
    function getnumConta() {
        return $this->numConta;
    }
    function setnumConta($n) {
        $this->numConta = $n;
    }
    function getTipo() {
        return $this->tipo;
    }
    function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    function getDono() {
        return $this->dono;
    }
    function setDono($dono) {
        $this->dono = $dono;
    }
    function getSaldo() {
        return $this->saldo;
    }
    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    function getStatus() {
        return $this->status;
    }
    function setStatus($status) {
        $this->status = $status;
    }
}
?>