<?php
class User extends db {
    protected $table ="users"; 
    protected $conn; 
    public function __construct() {
        $this->conn=$this->connect();

    }
public function login($username, $password) {

}
public function logout() {}
public function get($id) {}
public function update($id, $data) {}
public function delete($id) {}
public function dashUser($id) {

}
public function insertUser($email, $password, ) {
$user = Array ("email" => $email,"password"=> $password );
$id = $this->conn->insert ('users', $user);
return $id ;
}
public function selectUser ($email,$password){
   $this->conn->where("email", $email);
    $user = $this->conn->getOne("users");
if ($user &&$user['password'] ==$password) {
    return $user;
}
else {
    return false;
}
}}
?>