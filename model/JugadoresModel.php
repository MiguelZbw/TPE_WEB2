<?php

require_once './config.php';

class JugadoresModel{
    private $db;

    function __construct(){
        $this -> db = new PDO('mysql:host='.DB_HOST.';'.'dbname='.DB_NAME.';charset=utf8', DB_USERNAME, DB_PASSWORD);
    }

    function getJugadores(){
        $sentence = $this-> db -> prepare("SELECT * FROM jugador");
        $sentence -> execute();
        $jugadores = $sentence -> fetchAll(PDO::FETCH_OBJ);
        return $jugadores;
    }

    function getJugador($id){
        $sentence = $this-> db -> prepare("SELECT * FROM jugador WHERE id = ?");
        $sentence -> execute([$id]);
        $jugador = $sentence -> fetch(PDO::FETCH_OBJ);
        return $jugador;
    }

    function getJugadorCategoria($id){
        $sentence = $this-> db -> prepare("SELECT * FROM jugador WHERE id_categoria = ?");
        $sentence -> execute([$id]);
        $jugador = $sentence -> fetchAll(PDO::FETCH_OBJ);
        return $jugador;
    }

    function addJugador($nombre, $nacionalidad, $id_categoria){
        $sentence = $this-> db -> prepare("INSERT INTO jugador(nombre, nacionalidad, id_categoria) VALUES (?, ?, ?)");
        $sentence -> execute([$nombre, $nacionalidad, $id_categoria]);
    }

    function updateJugador($nombre, $nacionalidad, $id_categoria,$id){
        $sentence = $this-> db -> prepare("UPDATE jugador SET nombre = ?, nacionalidad = ?, id_categoria = ? WHERE id = ?");
        $sentence -> execute([$nombre, $nacionalidad, $id_categoria,$id]);
    }

    function deleteJugador($id){
        $sentence = $this-> db -> prepare("DELETE FROM `jugador` WHERE id = ?");
        $sentence -> execute([$id]);
    }
}