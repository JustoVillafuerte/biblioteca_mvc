<?php
require_once __DIR__ . '/../config/database.php';

class Autor {
    private $conn;
    private $table_name = "autor";

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

    public function create($codigo, $nombre) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table_name} (codigo, nombre) VALUES (?, ?)");
        return $stmt->execute([$codigo, $nombre]);
    }

    public function update($codigo, $nombre) {
        $stmt = $this->conn->prepare("UPDATE {$this->table_name} SET nombre = ? WHERE codigo = ?");
        return $stmt->execute([$nombre, $codigo]);
    }

    public function delete($codigo) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table_name} WHERE codigo = ?");
        return $stmt->execute([$codigo]);
    }
}
