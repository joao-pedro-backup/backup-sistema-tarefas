<?php
require_once"Logger.php";
class LoggerTXT extends Logger{
    protected  function write($message) {
        $text="---" . "\n" . date("Y-m-d H:i:s") . " -> " . $message . "\n" . "---";
        $handler=fopen($this->filename, "a");
        fwrite($handler, $text);
        fclose($handler);
    }
}