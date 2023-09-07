<?php

use core\Router;
use core\Request;

require_once "vendor/autoload.php";
require_once "core/bootstarp.php";

$router=new Router();

//require "app/routes.php";



Router::load('app/routes.php')->direct(Request::uri(),Request::method());

//echo var_dump();