<?php
require_once __DIR__ . '/../config/database.php';

class Autor {
    private $conn;
    private $table_name = "autor";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function create($codigo, $nombre) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table_name} (codigo, nombre) VALUES (?, ?)");
        return $stmt->execute([$codigo, $nombre]);
    }


}
