<?php

abstract class ErrorView{
    public array $errors; 
    public function __construct(){}

    public function setErrors($errors){
        $this->errors = $errors;
    }
    public function createView(){
        $error_output;
        foreach($this->errors as $error){
            $error_output .= "<p>" . $error . "</p>";
        }
        return <<< ERROR
        ERROR;
    }
}