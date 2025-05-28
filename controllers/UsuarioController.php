<?php
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {
    public function index() {
        $usuario = new Usuario();
        $usuarios = $usuario->getAll();
        include __DIR__ . '/../views/usuario/index.php';
    }

    public function create() {
        include __DIR__ . '/../views/usuario/create.php';
    }


}
