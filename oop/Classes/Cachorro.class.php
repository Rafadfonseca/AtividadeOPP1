<?php

class cachorro{

        public $nome;
        public $raca;
        public $porte;
        public $nivelEnergia;
        public $vacinado;
        public $vermifugado;
        public $sociavel;
        public $adestrado;

        public function exibirCachorro() : string {
            return "Olá, meu nome é {$this->nome} e sou um {$this->raca}  <br> ";
        }         
        public function vacinar() : string {
            if ( strtolower($this->vacinado) === "sim") {
                return "Cachorro vacinado";
            } else {
                return "Cachorro não vacinado";
            } 
        }   
        public function verificarAdestramento() : string {
            if ( strtolower($this->adestrado) === "sim") {
                return "Cachorro adestrado";
            } else {
                return "Cachorro não adestrado";
            } 
        }       
        public function atualizarNivelEnergia() : string {
            return "O nível de enregia do {$this->nome} é {$this->nivelEnergia} de 10 <br> ";
        }    
        public function  indicarPorte() : string {
            return "O porte do {$this->nome} é {$this->porte}  <br> ";
        }   
        public function socializar() : string {
            if ( strtolower($this->sociavel) === "sim") {
                return "Cachorro sociável";
            } else {
                return "Cachorro não sociável";
            }
        }    
        public function  resumoCachorro() : string {
            return "Nome:{$this->nome} <br> Raça:{$this->raca} <br> Porte: {$this->porte}  <br> <hr>";
        }
    }

?>
