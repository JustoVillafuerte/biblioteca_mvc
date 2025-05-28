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

    public function store($codigo, $nombre, $telefono, $direccion) {
        $usuario = new Usuario();
        $usuario->create($codigo, $nombre, $telefono, $direccion);
        header("Location: index.php?action=usuario_index");
    }

    public function delete($codigo) {
        $usuario = new Usuario();
        $usuario->delete($codigo);
        header("Location: index.php?action=usuario_index");
    }
}
