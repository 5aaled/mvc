<?php
namespace Mass\Copy\controllers;
class user 
{
    public function index (){
        $name ="ali" ;
        $title = "go";
        return view("go",["name" =>$name,"title"=> $title]); #key is the namew of the variable 
    }
    public function insert(){
        echo "insert ";
    }
}
