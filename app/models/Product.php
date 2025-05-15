<?php
class Product extends db {
    private $table ="product"; 
    private $conn; 
    public function __construct() {
        $this->conn=$this->connect();

    }
    public function getAllProducts() {
        $products = $this->conn->get($this->table);
        return ($products);
}

}

?>