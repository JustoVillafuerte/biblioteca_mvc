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


}
