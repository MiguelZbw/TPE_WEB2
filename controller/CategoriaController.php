<?php

use LDAP\Result;

require_once './model/JugadoresModel.php';
require_once 'view\CategoriasView.php';
require_once 'view\HomeView.php';
require_once 'model\Categoriasmodel.php';
require_once 'controller\UsuarioController.php';


class CategoriaController{
    private $modelc;
    private $viewc;
    private $viewh;
    private $ctrlu;
    private $modelp;

    function __construct(){
        $this -> modelc = new CategoriasModel();
        $this -> viewc = new CategoriasView();
        $this -> viewh = new HomeView();
        $this -> ctrlu = new UsuariosController();
        $this -> modelp = new JugadoresModel();
    }

    function showEditarCategoria($id){
        $loggeado = $this -> ctrlu -> checkLoggedIn();
        if ($loggeado == true){
            $this -> viewc -> renderEditar($id);
        }else{
            $this -> ctrlu -> showLogin();
        }
    }

    function updateCategoria($id){
        $loggeado = $this -> ctrlu -> checkLoggedIn();
        if ($loggeado == true){
            $deporte = $_POST['deporte'];
            $genero = $_POST['genero'];
            if (!empty($deporte) && !empty($genero)) {
                $this -> modelc -> updateCategoria($deporte,$genero,$id);
            }
            header("Location: ".BASE_URL."home");
            
        }else{
            $this -> ctrlu -> showLogin();
        }
    }
    
    function showCategorias(){
        $categorias = $this -> modelc -> getCategorias();
        $this -> viewc -> renderCategorias($categorias);
    }
    
    function deleteCategoria($id){
        $loggeado = $this -> ctrlu -> checkLoggedIn();
        if ($loggeado == true){
            try {
                $this -> modelc -> deleteCategoria($id);
                $this -> viewh -> relocateHome();
            } catch (Exception $e) {
                $categorias = $this -> modelc -> getCategorias();
                $jugadores = $this -> modelp -> getJugadores();
                foreach ($categorias as $categoria) {
                    $categoriasNombres[$categoria -> id] = $categoria -> deporte;
                }
                $this -> viewh -> renderHome($categorias,$jugadores,$categoriasNombres,"no se puede eliminar la categoria",$loggeado);
            }
        }else{
            $this -> ctrlu -> showLogin();
        }
    }
    
    function addCategoria(){
        $loggeado = $this -> ctrlu -> checkLoggedIn();
        if ($loggeado == true){
            $deporte = $_POST['deporte'];
            $genero = $_POST['genero'];
            if (!empty($deporte) && !empty($genero)){
                $this -> modelc -> insertCategoria($deporte, $genero);
            }
            $this -> viewh -> relocateHome();
        }else{
            $this -> ctrlu -> showLogin();
        }
    }

    function showCategoria($id){
        $categoria = $this -> modelc -> getCategoria($id);
        $jugadores = $this -> modelp -> getJugadorCategoria($id);
        $this->viewc->renderCategoria($jugadores,$categoria);
    }
}