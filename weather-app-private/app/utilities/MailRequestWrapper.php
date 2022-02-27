<?php

class MailRequestWrapper{
    private $to;
    private $from;
    private $subject;
    private $headers;
    private $message;

    public function setTo($to){
        $this->to = $to;
    }

    public function setSubject($subject){
        $this->subject = $subject;
    }
    public function setHeaders($headers){
        $this->headers = $headers;
    }
    public function setMessage($message){
        $this->message = $message;
    }
    public function sendRequest(){
        return mail($this->to, $this->subject, $this->message);
    }
}