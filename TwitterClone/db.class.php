<?php

    class db{
        // CRIAR O BANCO NO PHPMYADMIN

        //host
        private $host = 'localhost';
        
        //usuario
        private $usuario = 'root';

        //senha
        private $senha = '';

        //banco de dados
        private $database = 'twitter_clone';

        public function conecta_mysql(){
            //criar a conexao
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

            //ajustar o charset de comunicação entre a aplicação e o banco de dados
            mysqli_connect($con, 'utf8');

            //verificar se houve erro de conexão
            if(mysqli_connect_errno()){
                echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
            }

            return $con;
        }
        /* 
            CREATE DATABASE twitter_clone;

            CREATE TABLE usuarios(
                id int not null PRIMARY KEY AUTO_INCREMENT,
                usuario varchar(50) not null, 
                email varchar(100) not null, 
                senha varchar(32) not null
            );

            CREATE TABLE tweet(
                id_tweet int not null PRIMARY KEY AUTO_INCREMENT,
                id_usuario int not null, 
                tweet varchar(140) not null,
                data_inclusao datetime default CURRENT_TIMESTAMP
            );

            CREATE TABLE usuarios_seguidores(
                id_usuario_seguidor int not null PRIMARY KEY AUTO_INCREMENT,
                id_usuario int not null,
                seguindo_id_usuario int not null,
                data_registro datetime DEFAULT CURRENT_TIMESTAMP
            );
        */
    }
?>
