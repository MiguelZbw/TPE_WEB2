<?php

require_once './libs/Smarty.class.php';


class UsuariosView{
    private $smarty;

    function __construct(){
        $this -> smarty = new Smarty();
    }

    function renderLogin(){
        $this -> smarty -> display("./templates/login.tpl");
    }
}