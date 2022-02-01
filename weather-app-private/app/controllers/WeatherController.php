<?php

class WeatherController extends Controller{
        public function post(){
            $settings = require('C:\xampp\php\includes\weather-app\settings.php');
            $model = new WeatherModel();
            $model->setSettings($settings);
            $model->setRequestWrapper(new WebRequestWrapper());
            $model->setParser(new WeatherParser());
            if($_POST["lat"] && $_POST["long"]){
                $model->setLongitude($_POST["long"]);
                $model->setLatitude($_POST["lat"]);
            }
            else if($_POST["query"]){
                $model->setQuery($_POST["query"]);
            }
            else{
                //error
            }
            $result = $model->getWeatherForecast();
            $view = new WeatherView();
            $view->content(args: $result);
            echo $view->createView();
  
        }
}