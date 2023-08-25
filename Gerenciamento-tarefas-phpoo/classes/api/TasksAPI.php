<?php
require_once "../autentication/TaskFormDataAutentication.php";
require_once "../dataMapper/TaskMapper.php"; 
require_once "Connection.php";
require_once "Transactions.php";
require_once "LoggerTXT.php";

class TaskAPI{
    private static $dataId;
    private static $taskTitle;
    private static $taskDescription;

    private function __construct(){}

    public static function getDataId() {
        return self::$dataId;
    }
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

    private static function DeleteTaskMethod(){
        if($_SERVER["REQUEST_METHOD"] === "DELETE"){
            $data = json_decode(file_get_contents("php://input"), true);
            self::$dataId=$data["taskId"];
        }
    }
    

    public static function InitClass(){
        self::DeleteTaskMethod();
        self::receiveTask();
        self::GetTask();
        TaskdataAutentication::processForm();
    }
}

TaskAPI::InitClass();