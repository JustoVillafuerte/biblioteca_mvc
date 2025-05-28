<?php
require_once __DIR__ . '/../config/database.php';

class Libro {
    private $conn;
    private $table_name = "libro";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table_name}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($codigo) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table_name} WHERE codigo = ?");
        $stmt->execute([$codigo]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($codigo, $titulo, $isbn, $editorial, $paginas) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table_name} (codigo, titulo, ISBN, editorial, paginas) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$codigo, $titulo, $isbn, $editorial, $paginas]);
    }

    public function update($codigo, $titulo, $isbn, $editorial, $paginas) {
        $stmt = $this->conn->prepare("UPDATE {$this->table_name} SET titulo = ?, ISBN = ?, editorial = ?, paginas = ? WHERE codigo = ?");
        return $stmt->execute([$titulo, $isbn, $editorial, $paginas, $codigo]);
    }

    public function delete($codigo) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table_name} WHERE codigo = ?");
        return $stmt->execute([$codigo]);
    }
}
