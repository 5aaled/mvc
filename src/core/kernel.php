<?php
namespace Mass\Copy\core;


class kernel 
{
    public $default = "user";
    public $controller;
    public $method;
    public function url(){
        $uri = ltrim($_SERVER["REQUEST_URI"],"/");
        $url = (isset($_SERVER["QUERY_STRING"])) ? $_SERVER["QUERY_STRING"] :$uri;

        return $url;
    }
    public function run(){
        $url = (strlen($this->url()) > 0) ? $this->url() : $this->default;
        if(array_key_exists($url,route::$route)){
            $this->controller = route::$route[$url][0];
            $this->method = route::$route[$url][1];
            call_user_func_array([new $this->controller, $this->method],[]);
        }else{
            echo " error";
        }
    }
   
}