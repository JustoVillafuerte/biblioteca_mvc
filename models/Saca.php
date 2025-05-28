<?php
require_once __DIR__ . '/../config/database.php';

class Saca {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT s.*, u.nombre AS usuario, e.localizacion AS ejemplar 
                                      FROM saca s
                                      JOIN usuario u ON s.usuario_codigo = u.codigo
                                      JOIN ejemplar e ON s.ejemplar_codigo = e.codigo");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUsuarios() {
        $stmt = $this->conn->prepare("SELECT * FROM usuario");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEjemplares() {
        $stmt = $this->conn->prepare("SELECT * FROM ejemplar");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($usuario_codigo, $ejemplar_codigo, $fecha_prest, $fecha_dev) {
        $stmt = $this->conn->prepare("INSERT INTO saca (usuario_codigo, ejemplar_codigo, fecha_prest, fecha_dev) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$usuario_codigo, $ejemplar_codigo, $fecha_prest, $fecha_dev]);
    }
}
