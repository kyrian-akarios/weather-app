<?php

class Autoloader{
   
    public static function ControllerLoader($controller){
        include APP_PATH . "\controllers\\" . $controller . ".php";
    }
    public static function ModelLoader($model){
        include APP_PATH . "\models\\" . $model . ".php";
    }
    public static function ValidatorLoader($validator){
        include APP_PATH . "\validators\\" . $validator . ".php";
    }
    public static function ViewLoader($view){
        include APP_PATH . "\\views\\" . $view . ".php";
    }
    public static function UtilityLoader($utility){
        include APP_PATH . "\\utilities\\" . $utility . ".php";
    } 
    public static function ErrorLoader($error){
        include APP_PATH . "\\views\\error-views\\" . $error . ".php";
    } 
}