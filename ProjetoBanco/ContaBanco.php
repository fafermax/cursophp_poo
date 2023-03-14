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
            echo "<p>Conta ainda com dinheiro, nao e possivel fecha-la!</p>"
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Esta conta esta em debito, nao e possivel encerrar!</p>"
        } else {
            $this->setStatus(false);
        }
    }
    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v)
        // $this->saldo = $this->saldo + $v; e a mesma coisa escrita da maneira antiga.
        } else {
            echo "<p>Conta fechada. Nao e possivel depositar</p>";
        }
    }
    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p>Saldo insuficiente para saque.</p>"
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
        } else {
            echo "<p>Voce possui problemas com essa conta!, Contate sua agencia.</p>";
        }
    }
    //metodo especial
    public function __contruct() {
        $this->$saldo = 0;
        $this->status = false;
    }
    public function getnumConta() {
        return $this->numConta;
    }
    public function setnumConta($n) {
        $this->numConta = $n;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setDono($dono) {
        $this->dono = $dono;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
    }
?>