<?php
/**
 * @class WeatherController
 * invokes weather route
 */
class WeatherController extends Controller{
        public function post(){
            $settings = require('C:\xampp\php\includes\weather-app\settings.php');
            $model = new WeatherModel();
            $model->setSettings($settings);
            $model->setRequestWrapper(new WebRequestWrapper());
            $model->setParser(new WeatherParser());
            if(WeatherValidator::validateLatitude($_POST["lat"])
            && WeatherValidator::validateLongitude($_POST["long"])
            ){
                $model->setLongitude($_POST["long"]);
                $model->setLatitude($_POST["lat"]);
            }
            else if($_POST["query"]){
                $model->setQuery($_POST["query"]);
            }
            else{
                $view = new IndexView();
                $view->setErrors(["No information submitted."]);
                Logger::log(LogType::ERROR, "No information submitted.");
                echo $view->createView();
                return 0;
            }
            $result = $model->getWeatherForecast();
            if($result["error"]){
                $view = new WeatherView();
                $view->setErrors([$result["error"]["message"]]);
                Logger::log(LogType::ERROR, "Error with getting results.");
                echo $view->createView();
            }
            else{
                $view = new WeatherView();
                $view->setArgs($result);
                Logger::log(LogType::SUCCESS, "Results gained successfully.");
                echo $view->createView();

            }
  
        }
}