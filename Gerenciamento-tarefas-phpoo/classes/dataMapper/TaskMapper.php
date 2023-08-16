<?php
require_once "../autentication/TaskFormDataAutentication.php";
require_once "../api/Connection.php";
require_once "../api/Transactions.php";
require_once "../api/LoggerTXT.php";

class TaskMapper{
    private static $connection;
    private static $taskTitle;
    private static $taskDescription;
    private static function setConnection(){
        self::$connection = Connection::openConnection("taskManagement");
    }
    /* public static function getTaskTitle($taskTitle){
        self::$taskTitle=$taskTitle;
    }
    public static function getTaskDescription($taskDescription){
        self::$taskDescription=$taskDescription;
    } */

    public static function getTaskData($taskTitle, $taskDescription){
        self::$taskTitle=$taskTitle;
        self::$taskDescription=$taskDescription;
    }
    private static function saveTask(){
        try{
            /* Transaction::openTransaction(self::$connection); */

            $stmt=self::$connection->prepare("INSERT INTO tasks(title, description) VALUES (:title, :description)");
            $stmt->bindParam(":title",self::$taskTitle);
            $stmt->bindParam(":description",self::$taskDescription);
            $stmt->execute();

            /* Transaction::closeTransaction(); */
        }catch (PDOException $e) {
            /* Transactions::rollbackTransaction(); */
            /* echo '<div class="alert alert-error">Erro ao salvar a tarefa: ' . $e->getMessage() . '</div>'; */
        } catch (Exception $e) {
            /* echo '<div class="alert alert-error">Erro desconhecido ao salvar a tarefa: ' . $e->getMessage() . '</div>'; */
        }
    }

    private static function getTasksFromDB(){
        $stmtQuery=self::$connection->prepare("SELECT * FROM tasks");
        $stmtQuery->execute();
        $taskList=$stmtQuery->fetchAll(PDO::FETCH_ASSOC);
        /* header('Content-Type: application/json');
        return json_encode($taskList); */
        return $taskList;
    }
    public static function callDataMapper(){
        self::setConnection();
        self::saveTask();
        return self::getTasksFromDB();
    }
}

TaskMapper::callDataMapper();