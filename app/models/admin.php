<?php
class Admin extends User {
   
    public function __construct() {
        $this->conn=$this->connect();

    }


public function get($id) {}
public function update($id, $data) {}
public function delete($id) {}
public function dashUser($id) {
    
}

}
?>