<?php

class model {
    
    protected $conn;
    
    public function __construct() {
        try {
            global $config;
            $this->conn = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
        } catch (PDOException $e) {
            echo "Falhou: ". $e->getMessage();
        }
    }
}
