<?php
/**
 * @class - Logger
 * @desc - logger class for logging information
 */
class Logger{
    private $file;
    public function __construct(){}
    public function setLoggerFile($file){
        $this->file = $file;

    }
    /**
     * @method - log
     * @desc - logs information using file handlers and message builders
     */
    public static function log($type, $message){
        $datetime = new DateTime();
        $message_builder = new MessageBuilder();
        $message_builder->setType($type);
        $message_builder->setMessage($message);
        $message_builder->setDateTime($datetime);
        $message_to_send = $message_builder->build();
        $o_file = fopen(LOG_PATH . "errors.log.txt", "a+");
        if($o_file){
            fwrite($o_file, $message_to_send);
        }
        fclose($o_file);
    }

}