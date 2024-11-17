<?php
class Database {
    private $host = "sql309.infinityfree.com"; 
    private $dbname = "if0_37726519_dbjaymz";
    private $username = "if0_37726519";
    private $password = "N1o0j710DPrQ";
    private $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>
