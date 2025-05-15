<?php

class App{
    protected $controller = "homeController";
    protected $action="index";
    protected $params=[]; 
    public function __construct(){
        //echo $_SERVER['QUERY_STRING'];
        $this->prepareURL($_SERVER['REQUEST_URI']);
        $this->render();
        $url= $_SERVER['REQUEST_URI'];
       
        if (!empty($url)){
             $url =trim($url,"/");
            $url =explode('/',$url);
    
    }}
    private function prepareURL( $url ){
        $url = trim($url,'/');
        if (!empty($url)){
            $url = explode('/',$url);
            // define controller 
            $this->controller = isset($url[0]) ? ucwords($url[0])."Controller":"HomeController";
            // define method 
            $this->action = isset($url[1]) ? $url[1]:"index";
            // define parameters 
            unset($url[0],$url[1]);

            $this->params = !empty($url) ? array_values($url) : [];
            
    }}
    private function render(){

         if(class_exists($this->controller))
         
        {
            $controller = new $this->controller;
            // check if methos is exist
            if(method_exists($controller,$this->action))
            {
                call_user_func_array([$controller,$this->action],$this->params);
            }
            else 
            {
                echo "Method : " . $this->action ." does not Exist";
                
            }
        }
        
        else 
        {
             echo "Class : ".$this->controller." Not Found";
        
        }  
        
    }

        
     
}
?>








