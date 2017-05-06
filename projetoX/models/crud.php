<?php

class DataBase extends model {
    private $numRows;
    private $result;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function select($table, $where = array(), $whereCond = "AND") {
        
    }
    
    public function numRows() {
        return $this->numRows;
    }
    
    public function result() {
        return $this->result;
    }
    
    public function insert($table, $data = array()) {
        
    }
    
    public function update($table, $data = array(), $where = array(), $whereCond = "AND") {
        
    }
    
    public function delete($table, $where = array(), $whereCond = "AND") {
        
    }
}
