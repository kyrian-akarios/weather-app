<?php
class Router{
    private array $routes;
    public function __construct(){}

    public function addRoute($new_route, $controller){
        $this->routes[$new_route] = $controller;
    }

    
    public function parseURL($url){
        $split_url = explode("/", $url);
        return "/" . $split_url[2];
        //create array from url?
    }
    public function cleanArgs($args){
        //should get first part of the url
        //and put the rest into an array

    }
    public function run($url){
        $route = $this->parseURL($url);
        if(array_key_exists($route, $this->routes)){
            echo $this->routes[$route]->execute();
        }
        else{
            $view = new Error404View();
            echo $view->createView();
        }
    }
   
   
}