<?php

use core\Request;
use core\Router;

require_once "vendor/autoload.php";
require_once "core/bootstrap.php";


//require_once "core/Router.php";
Router::load('app/routes.php')
->direct(Request::uri(), Request::method());

// echo "<pre>";
// var_dump();
// echo "</pre>";