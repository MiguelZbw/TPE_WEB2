<?php

require_once './libs/Smarty.class.php';


class JugadoresView{
    private $smarty;

    function __construct(){
        $this -> smarty = new Smarty();
    }

    function renderJugadores($jugadores,$categoriasNombres){
        $this -> smarty -> assign("jugadores", $jugadores);
        $this -> smarty -> assign("categoriasNombres", $categoriasNombres);
        $this -> smarty -> display("./templates/jugadores.tpl");
    }

    function renderEditar($id,$categorias){
        $this -> smarty -> assign("id", $id);
        $this -> smarty -> assign("categorias", $categorias);
        $this -> smarty -> display("./templates/editarJugador.tpl");
    }

    function renderJugador($jugador,$categoria){
        $this -> smarty -> assign("jugador", $jugador);
        $this -> smarty -> assign("categoria", $categoria);
        $this -> smarty -> display("./templates/mostrarJugador.tpl");
    }
}