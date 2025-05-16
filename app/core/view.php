<?php 
 class view {
    
    
    public  static function load($view_name , $view_data =[]) {
       
        $file =VIEWS. $view_name.'.php';
    
        if (file_exists($file)){
            ob_start();
             extract($view_data);
            require_once $file;
            ob_end_flush();
        }
        else {
            echo"this file doesn't exist ";
        }
    }
    public static function only_extract($view_data = []){
         extract($view_data);
    }

 }
?>