<?php

session_start();

class DataBase
{
    private static $instance = null;

    private $connection;

    private static $HOST = "127.0.0.1";
    private static $USER = "root";
    private static $PASSWORD = "";
    private static $DB_NAME = "shop";

    private function __construct($ip, $userName, $password, $dbName)
    {
        $this->connection = new mysqli($ip, $userName, $password, $dbName);
    }

    public static function getInstance(): DataBase
    {
        if (self::$instance == null) {
            self::$instance = new DataBase(self::$HOST, self::$USER, self::$PASSWORD, self::$DB_NAME);
        }

        return self::$instance;
    }

    public function getConnection() : mysqli
    {
        return $this->connection;
    }
}
