<?php
abstract class Logger{
    protected $filename;

    protected function __construct($filename){
        $this->filename = $filename;
        file_put_contents($filename, FILE_APPEND);
    }

    abstract protected function write($message);
}