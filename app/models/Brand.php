<?php
class Brand extends db {
    private $table ="brand"; 
    private $conn; 
    public function __construct() {
        $this->conn=$this->connect();

    }
    public function getAllBrands() {
        $brands = $this->conn->get($this->table);
        return $brands ;
}

}

?>