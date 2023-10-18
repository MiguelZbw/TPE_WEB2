
<?php
  require_once "controller/JugadoresController.php";
  require_once "controller\UsuarioController.php";
  require_once "controller\HomeController.php";
  require_once "controller\CategoriaController.php";

  define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

  $jugadoresController = new JugadoresController();
  $usuariosController = new UsuariosController();
  $homeController = new HomeController();
  $categoriaController = new CategoriaController();
  // leemos la accion que viene por parametro
  $action = 'login'; // acción por defecto

  if (!empty($_GET['action'])) { // si viene definida la reemplazamos
      $action = $_GET['action'];
  }

  // parsea la accion Ej: dev/juan --> ['dev', juan]
  $params = explode('/', $action);

  // determina que camino seguir según la acción
  switch ($params[0]) {
      case 'login':
      $usuariosController -> showLogin();
        break;
      case 'iniciarSesion':
        $usuariosController -> verificarUsuario();
        break;
      case 'cerrarSesion':
          $usuariosController -> logout();
          break;
      case 'registrar':
        $usuariosController -> addUsuario();
        break;
      case 'verJugador':
        $jugadoresController -> showJugador($params[1]);
          break;
      case 'verCategoria':
        $categoriaController -> showCategoria($params[1]);
        break;
      case 'jugadores':
        $jugadoresController -> showJugadores();
        break;
      case 'categorias':
        $categoriaController -> showCategorias();
        break;
      case 'home':
        $homeController -> showHome();
        break;
      case 'finalizarCategoria':
        $categoriaController -> updateCategoria($params[1]);
        break;
      case 'editarCategoria':
        $categoriaController -> showEditarCategoria($params[1]);
        break;
      case 'borrarCategoria':
        $categoriaController -> deleteCategoria($params[1]);
        break;
      case 'agregarCategoria':
        $categoriaController -> addCategoria();
        break;
      case 'borrarJugador':
          $jugadoresController -> deletJugador($params[1]);
        break;
      case 'finalizarJugador':
        $jugadoresController -> updateJugador($params[1]);
      break;
      case 'editarJugador':
        $jugadoresController -> showEditarJugador($params[1]);
        break;
      case 'agregarJugador':
        $jugadoresController -> addJugador($params[1]);
        break;
      default:
          $homeController -> notFound();
          break;

  }
?>
