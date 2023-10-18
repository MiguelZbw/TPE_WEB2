<?php

require_once './config.php';

class UsuariosModel{
    private $db;

    function __construct(){
        $this -> db = new PDO('mysql:host='.DB_HOST.';'.'dbname='.DB_NAME.';charset=utf8', DB_USERNAME, DB_PASSWORD);
    }

    function insertUsuario($mail,$clave_encriptada){ 
        $sentence = $this-> db -> prepare("INSERT INTO `usuario`(mail, contrasenia) VALUES (?, ?)");
        $sentence -> execute([$mail,$clave_encriptada]);
    }

    function getUsuario(string $mail){
        $sentence = $this-> db -> prepare("SELECT * FROM usuario WHERE mail=?");
        $sentence -> execute([$mail]);
        $usuario = $sentence -> fetch(PDO::FETCH_OBJ);
        return $usuario;
    }
}