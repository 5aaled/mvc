<?php
include "../vendor/autoload.php";

use Mass\Copy\core\kernel;
use Mass\Copy\core\route;
// use Mass\Copy\core\user;


echo "<pre>";
print_r(route::$route);
$obj = new kernel;
$obj -> run();

