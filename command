<?php

 switch ($argv[1]){
    case "make:controller":
        $content = file_get_contents("src/stubs/controller.stubs");
        fopen("src/controllers/".$argv[2].".php","w");
        $new =  str_replace("{name}",$argv[2],$content);
        file_put_contents("src/controllers/".$argv[2].".php",$new);
        break;
        case "serv":
            exec("php -S localhost:8000");
            break;
 }
