<?php
class MessageBuilder{
    private string $message;
    public function setType($type){
        switch($type){
            case LogType::WARNING:
                $this->type = "[WARNING]";
                break;
            case LogType::ERROR:
                $this->type = "[ERROR]";
            case LogType::INFORMATION:
                $this->type = "[INFORMATION]";
            case LogType::SUCCESS:
                $this->type = "[SUCCESS]";
        }
    }
    public function setMessage($message){
        $this->message = $message;
    }
    public function setDateTime($datetime){
        $this->datetime = $datetime;
    }
    public function build(){
        if(!$this->datetime){
            $datetime = datetime();
        }
        return "{$this->type} - {$this->message} at {$this->datetime}";
    }

}