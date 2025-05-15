<?php
require_once(LIBS.'PHP-MySQLi-Database-Class-master/MysqliDb.php');


class db{
    protected $db; 
    public function connect(){
        $database = new MysqliDb(HOST, USER, PASSWORD, DBNAME);
        if ($database){
            $this->db = $database;
            return $this->db;
        }
        else{
            echo "error db connection ";
        }
    }
}



?>