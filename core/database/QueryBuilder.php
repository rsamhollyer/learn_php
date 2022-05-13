<?php

namespace App\Core\Database;

use Exception;
use PDO;

class QueryBuilder {

    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {

        $statement = $this->pdo->prepare("SELECT * FROM ${table}");
        $statement->execute();


        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters) {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table, // TABLE
            implode(', ', array_keys($parameters)), // COLUMNS
            ':' . implode(', :', array_keys($parameters)) // VALUES
        );

        try {
            $statement = $this->pdo->prepare($sql);
            // $statement->bindParam(':name', $parameters['name']);
            $statement->execute($parameters);
        } catch (Exception $e) {
            throw new Exception("Error Processing Request", 1);
        }
    }
}
