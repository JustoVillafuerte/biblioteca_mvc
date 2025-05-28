<?php
require_once __DIR__ . '/../config/database.php';

class Libro {
    private $conn;
    private $table_name = "libro";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function create($codigo, $titulo, $isbn, $editorial, $paginas) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table_name} (codigo, titulo, ISBN, editorial, paginas) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$codigo, $titulo, $isbn, $editorial, $paginas]);
    }
    public function delete($codigo) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table_name} WHERE codigo = ?");
        return $stmt->execute([$codigo]);
    }
}
