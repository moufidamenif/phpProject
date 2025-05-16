<?php
 class ProductController {
public  function index (){ 
$product =new Product();
$data["products"]=$product->getAllProducts();

view::load("product/index",$data);
}
public function add () {
    $category = new Category();
    $data["categories"] = $category->getAllCategories();
    $brand = new Brand();
    $data["brands"] = $brand->getAllBrands();
    view::load("product/add",$data);
}
}?>