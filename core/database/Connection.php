<?php

namespace App\Core\Database;

use Exception;
use PDO;

/**
 *  Database Connection Class
 * @package 
 */
class Connection {

    /**
     * 
     * @param mixed $config 
     * @return PDO 
     */
    public static function make($config) {

        try {
            return new PDO(
                $config['connection'] . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
