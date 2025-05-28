<?php
require_once __DIR__ . '/../models/Libro.php';

class LibroController {
    public function index() {
        $libro = new Libro();
        $libros = $libro->getAll();
        include __DIR__ . '/../views/libro/index.php';
    }

    public function create() {
        include __DIR__ . '/../views/libro/create.php';
    }

    public function store($codigo, $titulo, $isbn, $editorial, $paginas) {
        $libro = new Libro();
        $libro->create($codigo, $titulo, $isbn, $editorial, $paginas);
        header("Location: index.php?action=libro_index");
    }

    public function delete($codigo) {
        $libro = new Libro();
        $libro->delete($codigo);
        header("Location: index.php?action=libro_index");
    }
}
