<?php
class LoggerTest extends TestCase{
    public function testLog(){
        $message = "Test warning.";
        Logger::log(LogType::WARNING, $message);
        $file = fopen(LOG_PATH . "error.log");
        $results = fread(filesize($file));
        $result =  str_split($results, "\r\n")[count($results)-1];
        fclose($file);
        $this->assertEquals($message, $result);
    }
}