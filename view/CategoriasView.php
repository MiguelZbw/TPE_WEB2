<?php

require_once './libs/Smarty.class.php';


class CategoriasView{
    private $smarty;

    function __construct(){
        $this -> smarty = new Smarty();
    }

    function renderCategorias($categorias){
        $this -> smarty -> assign("categorias", $categorias);
        $this -> smarty -> display("./templates/categorias.tpl");
    }

    function renderEditar($id){
        $this -> smarty -> assign("id", $id);
        $this -> smarty -> display("./templates/editarCategoria.tpl");
    }

    function renderCategoria($jugadores,$categoria){
        $this -> smarty -> assign("jugadores", $jugadores);
        $this -> smarty -> assign("categoria", $categoria);
        $this -> smarty -> display("./templates/mostrarCategoria.tpl");
    }
}