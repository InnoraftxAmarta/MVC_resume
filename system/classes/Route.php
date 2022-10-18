<?php

class Route {
    public $controller = "Login";
    public $method = "Login";
    public $params = '';
    public function __construct()
    {
        $url=$this->url();
        $url = explode("/",$url);
        
        if(!empty($url[1])){
            if(file_exists("../app/controllers/".$url[1].".php")){
                
               
                $this->controller = $url[1];
                unset($url[1]);
            
            }
            
            else {
                echo "<div style = 'margin:0; padding:10px; background-color:silver;'>Sorry ".$url[1].".php not found</div>";
            }
        }
        require_once "../app/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;

        if(isset($url[2]) && !empty($url[2])){
            if(method_exists($this->controller, $url[2])){
                $this->method = $url[2];
                unset($url[2]);
            }
           
        else {
            echo "<div style = 'margin:0; padding:10px; background-color:silver;'>Sorry method ".$url[2]." not found</div>";
        }
    }

    if(isset($url[3])){
        $this->params = $url[3];
    }
    else {
        $this->params = [];
    }


    call_user_func_array([$this->controller, $this->method], $this->params);

        
    }


    public function url(){
        $url = $_SERVER['REQUEST_URI'];
        return $url;
    }
}

?>