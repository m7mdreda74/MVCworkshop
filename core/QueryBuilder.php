<?php

namespace core\database;
use PDO;

class QueryBuilder {

    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo=$pdo;

    }

    public function insert($table, $params) {
        $sql=sprintf(
           " INSERT INTO %s (%s) VALUES (%s)",
           $table,
           implode(',', array_keys($params)),
           ':' .implode(',:', array_keys($params))
        );
        try {
            $statement=$this->pdo->prepare($sql);
            $statement->execute($params);
        } 
        catch (PDOExeption $e) {
            die($e->getMessage());
        }
    }

    public function selectAll ( $table) {
        $sql=sprintf(
            "SELECT * FROM %s ", $table
        );
        try {
            $statement=$this->pdo->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS, );
        } 
        catch (PDOExeption $e) {
            die($e->getMessage());
        }
    }

    /*public function select ($table, $id) {
        $sql=sprintf(
            "SELECT * FROM %s WHERE id= :id", $table, $id
        );
        try {
            $statement=$this->pdo->prepare($sql);
            $statement->execute(['id' => $id]);
            return $statement->fetch(PDO::FETCH_OBJ, );
        } 
        catch (PDOExeption $e) {
            die($e->getMessage());
        }
    }*/
    public function select ($table, $where, $params) {
        $sql=sprintf(
            "SELECT * FROM %s WHERE %s", $table, $where
        );
        try {
            $statement=$this->pdo->prepare($sql);
            $statement->execute($params);
            return $statement->fetch(PDO::FETCH_OBJ, );
        } 
        catch (PDOExeption $e) {
            die($e->getMessage());
        }
    }

    public function update ($table,$set, $where, $params) {
        $sql=sprintf(
            "UPDATE %s SET %s WHERE %s",
            $table, 
            $set,
            $where
        );
        var_dump($sql);
        try {
            $statement=$this->pdo->prepare($sql);
            $statement->execute($params);
            return $statement->rowCount();
        } 
        catch (PDOExeption $e) {
            die($e->getMessage());
        }
    }

    public function delete ($table,$id) {
        $sql = sprintf(
            "DELETE FROM %s WHERE id = :id",
            $table
        );
        try {
            $statement=$this->pdo->prepare($sql);
            $statement->execute(['id'=>$id]);
        } 
        catch (PDOExeption $e) {
            die($e->getMessage());
        }
    }

    public function delete2 ($table,$condition, $params) {
        $statement=$this->pdo->prepare("DELETE FROM {$table} WHERE {$condition}");
        $statement->execute($params);
    }



}

    