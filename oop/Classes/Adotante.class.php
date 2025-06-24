<?php

class Adotante{

        public $nome;
        public $idade;
        public $telefone;
        public $email;
        public $endereco;
        public $temOutrosAnimais;
        public $experienciaComPets;
        public $animalAdotado;

        public function exibirAdotante() : string {
            return "Nome:{$this->nome} <br> Telefone:{$this->telefone} <br> Email:{$this->email} <br> <br> ";
        }   
        public function adotarAnimal() : string {
            return "não está feita"; 
        }            
        public function verificarIdade() : string {
            if ($this->idade >= 18) {
                return "Permitido adotar";
            } else {
                return "Você não tem idade suficiente para adotar";
            } 
        }       
        public function temExperiencia() : string {
            return "Possui experiência com pets:{$this->experienciaComPets}";
        }   
        public function listarContato() : string {
            return "Telefone:{$this->telefone} e Email:{$this->email}";
        }   
        public function verificarOutrosAnimais(): string {
            if ( strtolower($this->temOutrosAnimais) === "sim") {
                return "Possui outros animais";
            } else {
                return "Não possui outros animais";
            } 
        }    
        public function cancelarAdocao() : string {
            return "não está feita";
        }    
        public function  resumoAdotante() : string {
            return "não está feita";
        }              
    }

?>