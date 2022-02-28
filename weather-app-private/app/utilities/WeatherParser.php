<?php
/**
 * @class - WeatherParser
 * @desc - decodes JSON response of weather API
 */
class WeatherParser{
    private $data;
    public function __construct(){}

    public function setData($data){
        $this->data = $data;
    }
    public function parseWeatherData(){
        return json_decode($this->data, true, 2048);

    }
}