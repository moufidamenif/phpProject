<?php
 class UserController {
    
private $user;
 public function __construct()
    {
        $this->user = new User();
    }

public  function index(){ 
view::load("user/account",);
}
public function signUp () {
        view::load("user/signUp",);
}
public function storeUser(){
        $password = $_POST["signupPassword"];
    $password_confirmation = $_POST["signupConfirmPassword"];
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST) and $password==$password_confirmation)
   {
   
    $email = $_POST["signupEmail"];
   $id = $this->user->insertUser($email,$password);
if ($id) {
view::load( "user/storeUser",);
}
   else {
    echo "no data ";
   }}}
public function login(){
   view::load( "user/login"); 
}
public function loggedIn(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST) ){


           $email= $_POST["emailLogin"] ;
           $password = $_POST["passwordLogin"] ;
            $exist = $this->user->selectUser($email,$password);
            if ($exist && $exist['role']=="admin" ) {
                    $admin =new Admin();
                    view::load("admin/index");
            }
            else if ($exist){
                $product =new Product();
                $data["products"]=$product->getAllProducts();

view::load("product/index",$data);
            }
            else {
                echo "not exists ";
            }
            
        }

}}
?>