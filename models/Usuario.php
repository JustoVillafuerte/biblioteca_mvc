<?php
require_once __DIR__ . '/../config/database.php';

class Usuario {
    private $conn;
    private $table_name = "usuario";

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

    public function create($codigo, $nombre, $telefono, $direccion) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table_name} (codigo, nombre, telefono, direccion) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$codigo, $nombre, $telefono, $direccion]);
    }

    public function update($codigo, $nombre, $telefono, $direccion) {
        $stmt = $this->conn->prepare("UPDATE {$this->table_name} SET nombre = ?, telefono = ?, direccion = ? WHERE codigo = ?");
        return $stmt->execute([$nombre, $telefono, $direccion, $codigo]);
    }

    public function delete($codigo) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table_name} WHERE codigo = ?");
        return $stmt->execute([$codigo]);
    }
}
