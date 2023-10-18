<?php

use LDAP\Result;

require_once './model/JugadoresModel.php';
require_once './view/JugadoresView.php';
require_once 'view\CategoriasView.php';
require_once 'model\Categoriasmodel.php';
require_once 'view\HomeView.php';
require_once 'controller\UsuarioController.php';


class HomeController{
    private $modelp;
    private $viewp;
    private $modelc;
    private $viewc;
    private $viewh;
    private $ctrlu;

    function __construct(){
        $this -> modelp = new JugadoresModel();
        $this -> viewp = new JugadoresView();
        $this -> modelc = new CategoriasModel();
        $this -> viewc = new CategoriasView();
        $this -> viewh = new HomeView();
        $this -> ctrlu = new UsuariosController();
    }

    function showHome(){
        $categorias = $this -> modelc -> getCategorias();
        $jugadores = $this -> modelp -> getJugadores();
        $loggeado = $this -> ctrlu -> checkLoggedIn();
        foreach ($categorias as $categoria) {
            $categoriasNombres[$categoria -> id] = $categoria -> deporte;
        }
        $this -> viewh -> renderHome($categorias,$jugadores,$categoriasNombres,null,$loggeado);
    }

    function notFound() {
        echo('404 Page not found');
    }
}