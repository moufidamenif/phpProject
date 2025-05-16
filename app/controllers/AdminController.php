<?php
 class AdminController {
public  function index (){ 
$admin =new Admin();


view::load("admin/index");
}
public function orders (){
    
view::load("admin/orders");
}
public function visitProducts (){
    $product =new Product();
$data["products"]=$product->getAllProducts();

view::load("admin/products/visit",$data);

}
public function addProduct () {
    $category = new Category();
    $data["categories"] = $category->getAllCategories();
    $brand = new Brand();
    $data["brands"] = $brand->getAllBrands();
    view::load("admin/products/add",$data);   
}
public function storeProduct(){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $category_id = $_POST["category"];
     
        $brand_id = $_POST["brand"]; 
        

        // Handle image
        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $imageName = basename($_FILES['image']['name']);
            $imageTmp = $_FILES['image']['tmp_name'];
    
            $targetFile = UPLOADS . time() . "_" . $imageName;

            if (move_uploaded_file($imageTmp, $targetFile)) {
                    $product = new Product();
                    $product->name = $name;
                    $product->price = $price;
                    $product->quantity = $quantity;
                    $product->category_id = $category_id;
                    $product->brand_id = $brand_id;
                    $product->slug =$targetFile;

                $product->saveProduct($product);
                 $product =new Product();
                $data["products"]=$product->getAllProducts();

                view::load("admin/products/visit",$data);
 

            } else {
                echo "Image upload failed.";
            }
        } else {
            echo "No image uploaded.";
        }

    }
}

}?>