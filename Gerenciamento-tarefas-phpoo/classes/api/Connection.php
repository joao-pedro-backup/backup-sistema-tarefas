<?php
class Connection{
    private function __construct() {}
    public static function openConnection($name) {
        if (file_exists("../../config/{$name}.ini")) {
            $db = parse_ini_file("../../config/{$name}.ini");
        } else {
            echo "Arquivo não encontrado";
            throw new Exception("Arquivo {$name} não encontrado.");
        }

        $user = isset($db["user"]) ? $db["user"] : "";
        $pass = isset($db["pass"]) ? $db["pass"] : "";
        $name = isset($db["name"]) ? $db["name"] : "";
        $host = isset($db["host"]) ? $db["host"] : "";
        $type = isset($db["type"]) ? $db["type"] : "";
        $port = isset($db["port"]) ? $db["port"] : "";

        switch($type) {
            case "pgsql":
                $port = isset($db["port"]) ? $db["port"] : "5432";
                $connection = new PDO("pgsql:dbname={$name}; user={$user}; password={$pass}; host={$host}; port={$port}");
                break;

            case "mysql":
                $port = isset($db["port"]) ? $db["port"] : "3306";
                $connection = new PDO("mysql:dbname={$name}; user={$user}; password={$pass}; host={$host}; port={$port}");
                break;
            
            case "sqlite":
                $connection = new PDO("sqlite:{$name}");
                break;
        }
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    }
}

Connection::openConnection("taskManagement");