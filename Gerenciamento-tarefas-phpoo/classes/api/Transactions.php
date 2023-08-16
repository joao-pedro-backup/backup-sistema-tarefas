<?php
require_once "LoggerTXT.php";
class Transaction extends LoggerTXT{
    private static $connection;
    private static $logger;
    private function __construct(){}

    public static function openTransaction($connection){
        self::$connection=$connection;
        self::$connection->beginTransaction();
        self::$logger=null;
    }

    public static function closeTransaction(){
        if(self::$connection){
            self::$connection->commit();
            self::$connection=null;
        }
    }

    protected static function getConnection(){
        return self::$connection;
    }

    public static function rollbackTransaction(){
        if(self::$connection){
            self::$connection->rollBack();
            self::$connection=null;
        }
    }

    protected static function setLogger(Logger $logger){
        self::$logger=$logger;
    }

    protected static function log($message){
        if(self::$logger){
            self::$logger->write($message);
        }
    }
}
