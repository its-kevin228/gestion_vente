<?php
class Database extends PDO {
    const HOST = "localhost";
    const DB = "gestion_de_vente";
    const USER = "root";
    const PSW = "";

    public function __construct() {
        try {
            parent::__construct("mysql:dbname=".self::DB.";host=".self::HOST, self::USER, self::PSW);
            // Set error mode to exception for better error handling
            echo "connected to database";
            
        } catch(PDOException $e) {
            echo "Database connection failed: " . $e->getMessage()."".$e->getFile()."".$e->getLine();
        }
    }
}

?>