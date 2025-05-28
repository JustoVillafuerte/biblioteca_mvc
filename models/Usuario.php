<?php
require_once __DIR__ . '/../config/database.php';

class Usuario {
    private $conn;
    private $table_name = "usuario";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function create($codigo, $nombre, $telefono, $direccion) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table_name} (codigo, nombre, telefono, direccion) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$codigo, $nombre, $telefono, $direccion]);
    }

    public function delete($codigo) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table_name} WHERE codigo = ?");
        return $stmt->execute([$codigo]);
    }
}
