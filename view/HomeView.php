<?php

require_once './libs/Smarty.class.php';


class HomeView{
    private $smarty;

    function __construct(){
        $this -> smarty = new Smarty();
    }

    function renderHome($categorias,$jugadores,$categoriasNombres,$error,$loggeado){
        $this -> smarty -> assign("categorias", $categorias);
        $this -> smarty -> assign("jugadores", $jugadores);
        $this -> smarty -> assign("categoriasNombres", $categoriasNombres);
        $this -> smarty -> assign("error", $error);
        $this -> smarty -> assign("loggeado", $loggeado);
        $this -> smarty -> display("./templates/home1.tpl");
    }

    function relocateHome(){
        header("Location:".BASE_URL."home");
    }
}