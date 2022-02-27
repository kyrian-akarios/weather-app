<?php

class ContactFormValidator{
    public static function validateName($name){
        $pattern = "/[A-z]/";
        if(preg_match($pattern, $name)){
            return true;
        }
        return false;

    }

    public static function validateEmail($email){
        $pattern = '/^[a-zA-Z0-9.!#$%&’*+=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/';
        if(preg_match($pattern, $email)){
            return true;
        }
        return false;
    }
    
    public static function validateMessage($message){
        if(strlen($message) > 0){
            return true;
        }
        return false;
    }
   
}