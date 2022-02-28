<?php
use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase{
    
    public function testWeatherModelLatLong(){
        $model = new WeatherModel();
        $model->setMethod("GET");
        $model->setLongitude(-0.11);
        $model->setLatitude(51.52);
        $result = $model->getWeatherForecast();
        $fake_result = ["lon"=>"-0.11", "lat"=>"51.52"];
        $this->assertTrue($result['location']['lat'] == $fake_result['lat'] && $result['location']['lon'] == $fake_result['lon']);
    }
    public function testWeatherModelQuery(){
        $model = new WeatherModel();
        $model->setQuery("London");
        $model->setMethod("GET");
        $result = $model->getWeatherForecast();
        $fake_result = ["name"=>"London"];
        $this->assertTrue($result['location']['name'] == $fake_result['name'])
    }
}