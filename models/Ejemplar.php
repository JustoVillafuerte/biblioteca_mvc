<?php
require_once __DIR__ . '/../config/database.php';

class Ejemplar {
    private $conn;
    private $table_name = "ejemplar";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT e.*, l.titulo FROM ejemplar e JOIN libro l ON e.libro_codigo = l.codigo");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($codigo) {
        $stmt = $this->conn->prepare("SELECT * FROM ejemplar WHERE codigo = ?");
        $stmt->execute([$codigo]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($codigo, $localizacion, $libro_codigo) {
        $stmt = $this->conn->prepare("INSERT INTO ejemplar (codigo, localizacion, libro_codigo) VALUES (?, ?, ?)");
        return $stmt->execute([$codigo, $localizacion, $libro_codigo]);
    }

    public function update($codigo, $localizacion, $libro_codigo) {
        $stmt = $this->conn->prepare("UPDATE ejemplar SET localizacion = ?, libro_codigo = ? WHERE codigo = ?");
        return $stmt->execute([$localizacion, $libro_codigo, $codigo]);
    }

    public function delete($codigo) {
        $stmt = $this->conn->prepare("DELETE FROM ejemplar WHERE codigo = ?");
        return $stmt->execute([$codigo]);
    }

    public function getLibros() {
        $stmt = $this->conn->prepare("SELECT * FROM libro");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
