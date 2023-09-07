<?php

namespace core\database;

use PDO;
use PDOExeption;

class Connection {

    public static function make($config) {
        try{
            return new PDO(
                $config['connection'] . ";dbname=" . $config['dbname'],
                $config['username'],
                $config['password'],
                $config['options']

            );
        }
        catch(PDOExeption $e) {
            die($e->getMessage());
        }
    }

    

}