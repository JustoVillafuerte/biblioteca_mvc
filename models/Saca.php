<?php
require_once __DIR__ . '/../config/database.php';

class Saca {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }



    public function create($usuario_codigo, $ejemplar_codigo, $fecha_prest, $fecha_dev) {
        $stmt = $this->conn->prepare("INSERT INTO saca (usuario_codigo, ejemplar_codigo, fecha_prest, fecha_dev) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$usuario_codigo, $ejemplar_codigo, $fecha_prest, $fecha_dev]);
    }
}
