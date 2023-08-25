<?php
require_once "../autentication/TaskFormDataAutentication.php";
require_once "../api/Connection.php";
require_once "../api/Transactions.php";
require_once "../api/LoggerTXT.php";

class TaskMapper{
    private static $connection;
    private static $taskId;
    private static $taskTitle;
    private static $taskDescription;
    private static function setConnection(){
        self::$connection = Connection::openConnection("taskManagement");
    }
    public static function setTaskData($taskId, $taskTitle, $taskDescription){
        self::$taskId=$taskId;
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
        return $taskList;
    }

    /* private static function deleteTask(){
        $stmtDeleteTask=self::$connection->prepare("DELETE FROM tasks WHERE id=:taskId");
        $stmtDeleteTask->bindParam(":taskId",self::$taskId);
        $stmtDeleteTask->execute();
        echo self::$taskId;
    } */

    public static function callDataMapper(){
        self::setConnection();
        self::setTaskData(self::$taskId, self::$taskTitle, self::$taskDescription);
        self::saveTask();
        /* echo self::$taskId; */
        /* self::deleteTask(); */
        return self::getTasksFromDB();
    }
}

TaskMapper::callDataMapper();