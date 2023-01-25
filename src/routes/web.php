<?php

use Mass\Copy\core\route;
use Mass\Copy\controllers\user;

route::get("user",[user::class,"index"]);
route::get("user/product",[user::class,"insert"]);