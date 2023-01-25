<?php
namespace Mass\Copy\core;
class route 
{
    public static $route;
    public static function get($url,$action){
        return self::$route[$url] = $action;
    }
}
?>