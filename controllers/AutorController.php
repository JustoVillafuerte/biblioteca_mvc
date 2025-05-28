<?php
require_once __DIR__ . '/../models/Autor.php';

class AutorController {
    public function index() {
        $autor = new Autor();
        $autores = $autor->getAll();
        include __DIR__ . '/../views/autor/index.php';
    }

    public function create() {
        include __DIR__ . '/../views/autor/create.php';
    }

    public function store($codigo, $nombre) {
        $autor = new Autor();
        $autor->create($codigo, $nombre);
        header("Location: index.php?action=index");
    }

    public function edit($codigo) {
        $autor = new Autor();
        $data = $autor->getById($codigo);
        include __DIR__ . '/../views/autor/edit.php';
    }

    public function update($codigo, $nombre) {
        $autor = new Autor();
        $autor->update($codigo, $nombre);
        header("Location: index.php?action=index");
    }

    public function delete($codigo) {
        $autor = new Autor();
        $autor->delete($codigo);
        header("Location: index.php?action=index");
    }
}
