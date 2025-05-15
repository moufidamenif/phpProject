<?php
 class ProductController {
public  function index (){ 
$product =new Product();
$data["products"]=$product->getAllProducts();
view::load("",$data);
}
}?>