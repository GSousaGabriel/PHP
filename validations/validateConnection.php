<?php

    class validateConnection{
        private $connection;
        private $user;

        public function __construct(Connection $connection, User $user){
            
            if($_POST['user']== ''|| $_POST['pass']== ''){
                header('Location: index.php?login=error');
            }

            $user->__set('user', $_POST['user']);
            $user->__set('pass', $_POST['pass']);
            $this->connection= $connection->connect();
            
            $this->user= $user;
        }

        public function new(){
            $query= 'insert into login(user, pass)values(:user, SHA1(:pass))';
            $stmt= $this->connection->prepare($query);
            $stmt->bindValue(':user', $this->user->__get('user'));
            $stmt->bindValue(':pass', $this->user->__get('pass'));
            $stmt->execute();
            header('Location: index.php?login=registered');
        }

        public function validate(){
            $query= 'select user, pass from login where user=:user and pass=SHA1(:pass)';
            $stmt= $this->connection->prepare($query);
            $stmt->bindValue(':user', $this->user->__get('user'));
            $stmt->bindValue(':pass', $this->user->__get('pass'));
            $stmt->execute();
            return $stmt->fetchAll(PDO:: FETCH_OBJ);
        }

        public function update(){
            //
        }
    }
