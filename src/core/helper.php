<?php
use Jenssegers\Blade\Blade;

function view ($path  ,$data =[]){
    // extract($data);
    // include "../src/views/".$path.".blade.php";
    $blade = new Blade('../src/views', '../src/cache');

     echo $blade->make($path, $data)->render();

}