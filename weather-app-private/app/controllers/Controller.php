<?php

abstract class Controller{
    public function __construct(){}
    public function get(){
        return new Error404View();
    }
    public function post(){
        return new Error404View();
    }
    public function execute(){
        switch($_SERVER['REQUEST_METHOD']){
            case "GET":
                $this->get();
                break;
            case "POST":
                $this->post();
                break;
            case null:
                return new ErrorView();
        }
    }
}