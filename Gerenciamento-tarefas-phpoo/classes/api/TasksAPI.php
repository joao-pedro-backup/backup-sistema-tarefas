<?php
require_once "../autentication/TaskFormDataAutentication.php";
require_once "../dataMapper/TaskMapper.php"; 
require_once "Connection.php";
require_once "Transactions.php";
require_once "LoggerTXT.php";

class TaskAPI{
    private static $taskTitle;
    private static $taskDescription;

    private function __construct(){}

    private static function receiveTask(){
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            self::$taskTitle=$_POST["taskTitle"];
            self::$taskDescription=$_POST["taskDescription"];
        }
    }
    private static function GetTask(){
        if($_SERVER["REQUEST_METHOD"] === "GET"){
            header("Content-Type: application/json");
            $tasksJson=TaskMapper::callDataMapper();
            echo json_encode($tasksJson);
        }
        
    }

    public static function InitClass(){
        self::receiveTask();
        self::GetTask();
        TaskdataAutentication::processForm();
    }
}

TaskAPI::InitClass();

/* header('Content-Type: application/json');
try {
    $tasksJson=TaskMapper::callDataMapper();
    echo json_encode($tasksJson);
} catch (PDOException $e) {
    echo json_encode(['error' => 'Database error']);
} catch (Exception $e) {
    echo json_encode(['error' => 'Unknown error']);
} */