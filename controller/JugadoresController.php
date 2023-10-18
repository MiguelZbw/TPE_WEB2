<?php

use LDAP\Result;

require_once './model/JugadoresModel.php';
require_once './view/JugadoresView.php';
require_once 'view\CategoriasView.php';
require_once 'model\Categoriasmodel.php';
require_once 'view\HomeView.php';
require_once 'controller\UsuarioController.php';


class JugadoresController{
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

    function showJugadores(){
        $categorias = $this -> modelc -> getCategorias();
        $jugadores = $this -> modelp -> getJugadores();
        foreach ($categorias as $categoria) {
            $categoriasNombres[$categoria -> id] = $categoria -> deporte;
        }
        $this -> viewp -> renderJugadores($jugadores,$categoriasNombres);
    }

    

    function deletJugador($id){
        $loggeado = $this -> ctrlu -> checkLoggedIn();
        if ($loggeado == true){
            try {
                $this -> modelp -> deleteJugador($id);
                $this -> viewh -> relocateHome();
            } catch (Exception $e) {
                $categorias = $this -> modelc -> getCategorias();
                $jugadores = $this -> modelp -> getJugadores();
                foreach ($categorias as $categoria) {
                    $categoriasNombres[$categoria -> id] = $categoria -> nombre;
                }
                $this -> viewh -> renderHome($categorias,$jugadores,$categoriasNombres,"no se puede eliminar al jugador",$loggeado);
            }
        }else{
            $this -> ctrlu -> showLogin();
        }
    }

    function addJugador(){
        $loggeado = $this -> ctrlu -> checkLoggedIn();
        if ($loggeado == true){
            $nombre = $_POST['nombre'];
            $nacionalidad = $_POST['nacionalidad'];
            $id_Categoria = $_POST['categoria'];
            if (!empty($nombre) && !empty($nacionalidad) && !empty($id_Categoria)){
            $this -> modelp -> addJugador($nombre, $nacionalidad, $id_Categoria);
        }
            $this -> viewh -> relocateHome();
        }else{
            $this -> ctrlu -> showLogin();
        }
   }

    function showEditarJugador($id){
        $loggeado = $this -> ctrlu -> checkLoggedIn();
        if ($loggeado == true){
            $categorias = $this -> modelc -> getCategorias();
            $this -> viewp -> renderEditar($id,$categorias);
        }else{
            $this -> ctrlu -> showLogin();
        }
   }

    function updateJugador($id){
        $loggeado = $this -> ctrlu -> checkLoggedIn();
        if ($loggeado == true){
            $nombre = $_POST['nombre'];
            $nacionalidad = $_POST['nacionalidad'];
            $id_Categoria = $_POST['categoria'];
            if (!empty($nombre) && !empty($nacionalidad) && !empty($id_Categoria)){
                $this -> modelp -> updateJugador($nombre,$nacionalidad,$id_Categoria,$id);
            }
            $this -> viewh -> relocateHome();
        }else{
            $this -> ctrlu -> showLogin();
        }
    }
    
    function showJugador($id){
        $jugador = $this -> modelp -> getJugador($id);
        $categoria = $this -> modelc -> getCategoria($jugador->id_categoria);
        $this->viewp->renderJugador($jugador,$categoria);
    }
}