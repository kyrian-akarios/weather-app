<?php
/**
 * @class abstract - Controller
 * Base controller with get/post methods
 */
abstract class Controller{
    public function __construct(){}
    /**
     * @method POST - invokes the GET type route
     * @param none
     */
    public function get(){
        $view = new Error404View();
        echo $view->createView();
    }
    /**
     * @method POST - invokes the POST type route
     * @param none
     */
    public function post(){
        $view = new Error404View();
        echo $view->createView();
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