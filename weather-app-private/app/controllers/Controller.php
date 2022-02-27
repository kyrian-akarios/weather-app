<?php

abstract class Controller{
    public function __construct(){}
    public function get(){
        $view = new Error404View();
        echo $view->createView();
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