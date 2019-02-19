<?php

abstract class ConnectionFactory {

    public static function getMySQLConnection(): PDO {
        $sql = "mysql:host=localhost;dbname=pert_on_line;";
        $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $conn = new PDO($sql, 'root', '', $dsn_Options);
        return $conn;
    }

}
