<?php

require_once './config.php';

class CategoriasModel{
    private $db;

    function __construct(){
        $this -> db = new PDO('mysql:host='.DB_HOST.';'.'dbname='.DB_NAME.';charset=utf8', DB_USERNAME, DB_PASSWORD);
    }

    function getCategorias(){
        $sentence = $this-> db -> prepare("SELECT * FROM categoria");
        $sentence -> execute();
        $categorias = $sentence -> fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }

    function getCategoria($id){
        $sentence = $this-> db -> prepare("SELECT * FROM categoria WHERE id = ?");
        $sentence -> execute([$id]);
        return $sentence -> fetch(PDO::FETCH_OBJ);
    }

    function insertCategoria($deporte, $genero){ 
        $sentence = $this-> db -> prepare("INSERT INTO `categoria`(deporte, genero) VALUES (?, ?)");
        $sentence -> execute([$deporte, $genero]);
    }

    function updateCategoria($deporte, $genero,$id){
        $sentence = $this-> db -> prepare("UPDATE categoria SET deporte = ?, genero = ? WHERE id = ?");
        $sentence -> execute([$deporte, $genero,$id]);
    }

    function deleteCategoria($id){
        $sentence = $this-> db -> prepare("DELETE FROM `categoria` WHERE id = ?");
        $sentence -> execute([$id]);
    }
}