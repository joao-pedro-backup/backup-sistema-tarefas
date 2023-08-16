<?php
require_once "../api/Connection.php";
require_once "../dataMapper/TaskMapper.php";

class TaskdataAutentication{
    private static $connection;
    private static $taskTitle;
    private static $taskDescription;
    private static function setConnection(){
        self::$connection = Connection::openConnection("taskManagement");
    }
    private static function setTaskTitle(){
        if(isset($_POST['taskTitle']) && !empty($_POST["taskTitle"]) && strlen(self::$taskTitle)<150){
            self::$taskTitle=htmlspecialchars($_POST['taskTitle']);
        }else{
           
        }
    }
    private static function setTaskDescription(){
        if(isset($_POST['taskDescription']) && !empty($_POST["taskDescription"])){
            self::$taskDescription=htmlspecialchars($_POST['taskDescription']);
        }else{
            
        }
    }
    public static function processForm(){
        self::setConnection();
        self::setTaskTitle();
        self::setTaskDescription();
        TaskMapper::getTaskData(self::$taskTitle,self::$taskDescription);
        /* TaskMapper::getTaskTitle(self::$taskTitle);
        TaskMapper::getTaskDescription(self::$taskDescription); */
    }
}

TaskdataAutentication::processForm();
TaskMapper::callDataMapper();