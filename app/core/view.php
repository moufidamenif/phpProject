<?php 
 class view {
    public  static function load($view_name , $data =[]) {
       
        $file =VIEWS. $view_name.'.php';
    
        if (file_exists($file)){
            ob_start();
            require $file;
            ob_end_flush();
        }
        else {
            echo"this file doesn't exist ";
        }
    }

 }
?>