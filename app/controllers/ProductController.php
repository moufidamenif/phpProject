<?php
 class ProductController {
    private $product;
public function index (){
    $this->product =new Product();
$data["products"]=$this->product->getAllProducts();

view::load("product/index",$data);

}
public function add () {

}
}?>