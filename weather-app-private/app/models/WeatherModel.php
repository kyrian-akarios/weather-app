<?php

class WeatherModel{
    
    private $request_wrapper;
    private $parser;
    private $settings;
    private $lat;
    private $long;
    private $query;
    private $key;
    public function __construct(){}
    public function setSettings($settings){
        $this->settings = $settings;
    }
    public function setParser($parser){
        $this->parser = $parser;
    }
    public function setLongitude($long){
        $this->long = $long;
    }
    public function setQuery($query){
        $this->query = $query;
    }
    public function setLatitude($lat){
        $this->lat = $lat;
    }
    public function setRequestWrapper($wrapper){
        $this->request_wrapper = $wrapper;
    }
    public function getWeatherForecast(){
        $this->key = $this->settings['web_services']['api-keys']['weather'];
        $parameters=array(
            'key'=>$this->key,
            'q'=>$this->lat && $this->long ? $this->lat . "," . $this->long : $this->query,
            "days"=>3,
            "aqi"=>"no"
        );
        $this->request_wrapper->setRequestURL($this->settings['web_services']['api-links']['weather']);
        $this->request_wrapper->setHeaders([
            "Content-Type"=>"application/json"
        ]);
        $this->request_wrapper->setMethod("GET");
        $this->request_wrapper->setParameters($parameters);
        $result = $this->request_wrapper->sendRequest();
        return $this->parseWeatherData($result);
        //else return error
    }

    public function parseWeatherData($data){
        $this->parser->setData($data);
        return $this->parser->parseWeatherData();

    }
}