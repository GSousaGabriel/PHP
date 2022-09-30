<?php

    class Usuario{
        public $user= '';
        private $pass= '';

        public function __set($attr, $valor){
            $this->$attr= $valor;
        }

        public function __get($valor){
           return $this->$valor;
        }

        public function usuarioValido(){
            //
        }
    }
?>