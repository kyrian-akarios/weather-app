<?php

class Logger{
    private $file;
    public function __construct(){}
    public function setLoggerFile($file){
        $this->file = $file;

    }
    public static function log($type, $message){
        if(!$file){
            $log_path = LOG_PATH;
            $this->setLoggerFile($log_path);
        }
        $message_builder = new MessageBuilder();
        $message_builder->type = $type;
        $message_builder->message = $message;
        $message_builder->datetime = datetime();
        $message_to_send = $message_builder->build();
        $o_file = fopen($file, "a+");
        fwrite($o_file, $message_to_send);
        fclose($o_file);
    }

}