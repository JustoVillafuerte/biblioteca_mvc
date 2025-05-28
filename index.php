<link rel="stylesheet" href="css/estilos.css">
<?php
require_once 'controllers/AutorController.php';
require_once 'controllers/UsuarioController.php';
require_once 'controllers/LibroController.php';
require_once 'controllers/EjemplarController.php';
require_once 'controllers/SacaController.php';

$autorController = new AutorController();
$usuarioController = new UsuarioController();
$libroController = new LibroController();
$ejemplarController = new EjemplarController();
$sacaController = new SacaController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    // Acciones de Autor
    case 'create':
        $autorController->create();
        break;
    case 'store':
        $autorController->store($_POST['codigo'], $_POST['nombre']);
        break;
    case 'edit':
        $autorController->edit($_GET['codigo']);
        break;
    case 'update':
        $autorController->update($_POST['codigo'], $_POST['nombre']);
        break;
    case 'delete':
        $autorController->delete($_GET['codigo']);
        break;
    
    // Acciones de Usuario
    case 'usuario_index':
        $usuarioController->index();
        break;
    case 'usuario_create':
        $usuarioController->create();
        break;
    case 'usuario_store':
        $usuarioController->store($_POST['codigo'], $_POST['nombre'], $_POST['telefono'], $_POST['direccion']);
        break;
    case 'usuario_edit':
        $usuarioController->edit($_GET['codigo']);
        break;
    case 'usuario_update':
        $usuarioController->update($_POST['codigo'], $_POST['nombre'], $_POST['telefono'], $_POST['direccion']);
        break;
    case 'usuario_delete':
        $usuarioController->delete($_GET['codigo']);
        break;
    
    // Acciones de Libro
    case 'libro_index':
        $libroController->index();
        break;
    case 'libro_create':
        $libroController->create();
        break;
    case 'libro_store':
        $libroController->store($_POST['codigo'], $_POST['titulo'], $_POST['isbn'], $_POST['editorial'], $_POST['paginas']);
        break;
    case 'libro_edit':
        $libroController->edit($_GET['codigo']);
        break;
    case 'libro_update':
        $libroController->update($_POST['codigo'], $_POST['titulo'], $_POST['isbn'], $_POST['editorial'], $_POST['paginas']);
        break;
    case 'libro_delete':
        $libroController->delete($_GET['codigo']);
        break;
    //Ejemplar
    case 'ejemplar_index':
        $ejemplarController->index();
        break;
    case 'ejemplar_create':
        $ejemplarController->create();
        break;
    case 'ejemplar_store':
        $ejemplarController->store($_POST['codigo'], $_POST['localizacion'], $_POST['libro_codigo']);
        break;
    case 'ejemplar_edit':
        $ejemplarController->edit($_GET['codigo']);
        break;
    case 'ejemplar_update':
        $ejemplarController->update($_POST['codigo'], $_POST['localizacion'], $_POST['libro_codigo']);
        break;
    case 'ejemplar_delete':
        $ejemplarController->delete($_GET['codigo']);
        break;
    
    //saca
    case 'saca_index':
        $sacaController->index();
        break;
    case 'saca_create':
        $sacaController->create();
        break;
    case 'saca_store':
        $sacaController->store($_POST['usuario_codigo'], $_POST['ejemplar_codigo'], $_POST['fecha_prest'], $_POST['fecha_dev']);
        break;

    default:
        // Mostrar todas las vistas principales por defecto
        $autorController->index();
        $usuarioController->index();
        $libroController->index();
        $ejemplarController->index();
        $sacaController->index();
        
}