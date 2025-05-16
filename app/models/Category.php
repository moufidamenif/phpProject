<?php
class Category extends db {
    private $table ="category"; 
    private $conn; 
    public function __construct() {
        $this->conn=$this->connect();

    }
    public function getAllCategories() {
        $categories = $this->conn->get($this->table);
        return ($categories );
}

}

?>