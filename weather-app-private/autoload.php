<?php
/**
 * @class Autoloader
 * Defines paths to find classes to include.
 */
class Autoloader{
   /**@param controller - the controller to be included
    * @return void
    */
    public static function ControllerLoader($controller){
        include APP_PATH . "\controllers\\" . $controller . ".php";
    }
    /**@param model - the model to be included
    * @return void
    */
    public static function ModelLoader($model){
        include APP_PATH . "\models\\" . $model . ".php";
    }
    /**@param validator- the validator to be included
    * @return void
    */
    public static function ValidatorLoader($validator){
        include APP_PATH . "\\validators\\" . $validator . ".php";
    }
    /**@param view - the view to be included
    * @return void
    */
    public static function ViewLoader($view){
        include APP_PATH . "\\views\\" . $view . ".php";
    }
    /**@param utility - the utiility to be included
    * @return void
    */
    public static function UtilityLoader($utility){
        include APP_PATH . "\\utilities\\" . $utility . ".php";
    }
}