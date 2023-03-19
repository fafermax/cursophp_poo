<?php 
require_once "Livro.php";

    class Publicacao {
        
        private $abrir;
        private $fechar;
        private $folhear;
        private $avancarPag;
        private $voltarPag;

        //Metodos especiais

        public function abrir() {

        }
        public function fechar() {

        }
        public function folhear() {

        }
        public function avancarPag() {

        }
        public function voltarPag() {

        }
        //Metodos especiais

        function getAbrir() {
            return $this->abrir;
        }
        function getFechar() {
            return $this->fechar;
        }
        function getFolhear() {
            return $this->folhear;
        }
        function getAvancarPag() {
            return $this->avancarPag;
        }
        function getVoltarPag() {
            return $this->voltarPag;
        }
        function setAbrir($abrir) {
            $this->abrir = $abrir;
        }
        function setFechar($fechar) {
            $this->fechar = $fechar;
        }
        function setFolhear($folhear) {
            $this->folhear = $folhear;
        }
        function setAvancarPag($avancarPag) {
            $this->avancarPag = $avancarPag;
        }
        function setVoltarPag($voltarPag) {
            $this->voltarPag = $voltarPag;
        }
    }
?>