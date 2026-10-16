<?php
require __DIR__ . '/../config/database.php';

class Usuarios{
    private $conn;


    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function buscarPorEmail(){
        $sql = "SELECT * FROM usuarios Where email = ?";
        $stml = $this->conn->prepare($sql);
        $stml->bind_param("s", $email);
        $stml->execute();

        $resultado = $stml->gpt_result();
        return $resultado->fetch_assoc();
    }
}


?>