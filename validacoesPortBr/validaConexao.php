<?php

    class validaConexao{
        private $conexao;
        private $usuario;

        public function __construct(Conexao $conexao, Usuario $usuario){
            
            if($_POST['user']== ''|| $_POST['pass']== ''){
                header('Location: index.php?login=erro');
            }

            $usuario->__set('user', $_POST['user']);
            $usuario->__set('pass', $_POST['pass']);
            $this->conexao= $conexao->conectar();
            
            $this->usuario= $usuario;
        }

        public function novo(){
            $query= 'insert into login(user, pass)values(:user, SHA1(:pass))';
            $stmt= $this->conexao->prepare($query);
            $stmt->bindValue(':user', $this->usuario->__get('user'));
            $stmt->bindValue(':pass', $this->usuario->__get('pass'));
            $stmt->execute();
            header('Location: index.php?login=cadastrado');
        }

        public function validar(){
            $query= 'select user, pass from login where user=:user and pass=SHA1(:pass)';
            $stmt= $this->conexao->prepare($query);
            $stmt->bindValue(':user', $this->usuario->__get('user'));
            $stmt->bindValue(':pass', $this->usuario->__get('pass'));
            $stmt->execute();
            return $stmt->fetchAll(PDO:: FETCH_OBJ);
        }

        public function atualizar(){
            //
        }
    }
