<?php

class Animal{

        public $nome;
        public $especie;
        public $idade;
        public $sexo;
        public $peso;
        public $cor;
        public $status;
        public $chipado;

        public function exibirFicha() : string {
            return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos  <br> ";
        }           
        public function atualizarPeso() : string {
            return "O peso do {$this->nome} é {$this->peso}Kg  <br> ";
        }       
        public function verificarStatus() : string {
            return "Status: {$this->status}  <br> ";
        }       
        public function verificarIdade() : string {
            
            if ($this->idade <= 7) {
                return "Jovem";
            } elseif ($this->idade >= 8 && $this->idade <= 9) {
                return "Adulto";
            } else {
                return "Idoso";
            }
        }         
        public function marcarComoChipado() : string {
            if ( strtolower($this->chipado) === "sim") {
                return "Animal chipado";
            } else {
                return "Animal não chipado";
            } 
        }  
        public function verificarCor() : string {
            return "A cor predominante do animal é {$this->cor}<br>" ;
        } 

        public function verificarSexo() : string {
            return "O sexo do animal é {$this->sexo} <br>" ;
        }     

        public function  resumoAnimal() : string {
            return "Nome:{$this->nome} <br> Espécie:{$this->especie} <br> Status: {$this->status} <br><hr>";
        }   
    }

?>
