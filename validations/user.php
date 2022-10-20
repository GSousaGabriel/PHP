<?php

    class User{
        public $user= '';
        private $pass= '';

        public function __set($attr, $value){
            $this->$attr= $value;
        }

        public function __get($value){
           return $this->$value;
        }

        public function validUser(){
            //
        }
    }
?>