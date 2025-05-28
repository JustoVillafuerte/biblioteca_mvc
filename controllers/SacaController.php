<?php
require_once __DIR__ . '/../models/Saca.php';

class SacaController {
    public function index() {
        $saca = new Saca();
        $registros = $saca->getAll();
        include __DIR__ . '/../views/saca/index.php';
    }

    public function create() {
        $saca = new Saca();
        $usuarios = $saca->getUsuarios();
        $ejemplares = $saca->getEjemplares();
        include __DIR__ . '/../views/saca/create.php';
    }

    public function store($usuario_codigo, $ejemplar_codigo, $fecha_prest, $fecha_dev) {
        $saca = new Saca();
        $saca->create($usuario_codigo, $ejemplar_codigo, $fecha_prest, $fecha_dev);
        header("Location: index.php?action=saca_index");
    }
}
