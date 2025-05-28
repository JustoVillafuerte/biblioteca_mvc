<?php
require_once __DIR__ . '/../config/database.php';

class Ejemplar {
    private $conn;
    private $table_name = "ejemplar";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }



    public function create($codigo, $localizacion, $libro_codigo) {
        $stmt = $this->conn->prepare("INSERT INTO ejemplar (codigo, localizacion, libro_codigo) VALUES (?, ?, ?)");
        return $stmt->execute([$codigo, $localizacion, $libro_codigo]);
    }


}
