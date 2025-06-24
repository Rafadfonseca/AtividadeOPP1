<?php

class Gato{

        public $nome;
        public $pelagem;
        public $castrado;
        public $independente;
        public $vacinado;
        public $curioso;
        public $contatoHumano;
        public $usaCaixaAreia;

        public function exibirGato() : string {
            return "Olá, meu nome é {$this->nome} e minha pelagem é {$this->pelagem}  <br> ";
        }   
        public function castrar() : string {
            if ( strtolower($this->castrado) === "sim") {
                return "Gato castrado";
            } else {
                return "Gato não é castrado";
            } 
        }            
        public function verificarPelagem() : string {
            return "A pelagem é {$this->pelagem} ";
        }       
        public function atualizarIndependencia() : string {
            return "O nível de idependencia do gato é {$this->independente} de 10 ";
        }   
        public function vacinar() : string {
            if ( strtolower($this->vacinado) === "sim") {
                return "Gato vacinado";
            } else {
                return "Gato não é vacinado";
            } 
        }   
        public function ensinarCaixaAreia() : string {
            if ( strtolower($this->usaCaixaAreia) === "sim") {
                return "Gato usa a caixa de areia";
            } else {
                return "Gato não usa a caixa de areia";
            } 
        }    
        public function verificarContato() : string {
            if ( strtolower($this->contatoHumano) === "sim") {
                return "Gato aceita contato humano";
            } else {
                return "Gato não aceita contato humano";
            } 
        }    
        public function  resumoGato() : string {
            return "Nome:{$this->nome} <br> Pelagem:{$this->pelagem} <br> Castrado:{$this->castrado}  <br> <hr>";
        }              
    }

?>