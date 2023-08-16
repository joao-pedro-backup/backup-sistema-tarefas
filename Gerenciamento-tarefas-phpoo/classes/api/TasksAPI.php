<?php
require_once "../autentication/TaskFormDataAutentication.php";
require_once "../dataMapper/TaskMapper.php"; 
require_once "Connection.php";
require_once "Transactions.php";
require_once "LoggerTXT.php";

class TaskAPI{
    private $taskTitle;
    private $taskDescription;

    private static function postTasks($data){
        self::$taskTitle=$_POST["taskTitle"];
        self::$taskDescription=$_POST["taskDescription"];
    }

    private static function getTask(){
        
    }


}





header('Content-Type: application/json');
try {
    $tasksJson=TaskMapper::callDataMapper();
    echo json_encode($tasksJson);
} catch (PDOException $e) {
    echo json_encode(['error' => 'Database error']);
} catch (Exception $e) {
    echo json_encode(['error' => 'Unknown error']);
}