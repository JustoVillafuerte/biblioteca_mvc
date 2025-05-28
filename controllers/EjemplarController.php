<?php
require_once __DIR__ . '/../models/Ejemplar.php';

class EjemplarController {
    public function index() {
        $e = new Ejemplar();
        $ejemplares = $e->getAll();
        include __DIR__ . '/../views/ejemplar/index.php';
    }

    public function create() {
        $e = new Ejemplar();
        $libros = $e->getLibros();
        include __DIR__ . '/../views/ejemplar/create.php';
    }

    public function store($codigo, $localizacion, $libro_codigo) {
        $e = new Ejemplar();
        $e->create($codigo, $localizacion, $libro_codigo);
        header("Location: index.php?action=ejemplar_index");
    }

    public function edit($codigo) {
        $e = new Ejemplar();
        $data = $e->getById($codigo);
        $libros = $e->getLibros();
        include __DIR__ . '/../views/ejemplar/edit.php';
    }

    public function update($codigo, $localizacion, $libro_codigo) {
        $e = new Ejemplar();
        $e->update($codigo, $localizacion, $libro_codigo);
        header("Location: index.php?action=ejemplar_index");
    }

    public function delete($codigo) {
        $e = new Ejemplar();
        $e->delete($codigo);
        header("Location: index.php?action=ejemplar_index");
    }
}
