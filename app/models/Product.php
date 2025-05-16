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
public function saveProduct($product) {
    $data = Array ("name" => $product->name,
               "price" => $product->price,
               "quantity"=> $product->quantity,
               "category_id"=>(int)$product->category_id,
               "brand_id"=>(int)$product->brand_id,
               "slug" => $product->slug,

);
 $product = new Product();
                    
    $this->conn->insert($this->table, $data);

}}

?>