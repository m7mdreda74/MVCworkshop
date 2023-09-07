<?php

use core\database\Connection;
use core\database\QueryBuilder;
use core\App;


//$app['config']=require "config.php";
//$app['database']=new QueryBuilder(
  //  Connection::make(App::get('config')['database'])
//);

App::bind('config', require "config.php");

App::bind('database',new QueryBuilder(
    Connection::make(App::get('config')['database']))
);

//------------insert test--------------
/*$app['database']->insert (
    'articles',
    [
        'name'=>'article2',
        'body'=>'body2',

    ]

);*/

//----------select test-------------
//$app['database']->selectAll ('articles');
//$app['database']->select ('articles', 1);
//$app['database']->select ('articles', 'id=?', [1]);

//----------update test-------------
//$app['database']->update('articles', "name=?", "id=?", ['article33', 2]);

//--------------delete test--------------
//$app['database']->delete ('articles', 1);
//$app['database']->delete2 ('articles', "id=?", [2]);




function view($file, $data) {

    extract ($data);
    return require "app/views/$file.view.php";
}

