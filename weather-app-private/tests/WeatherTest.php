<?php
use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase{
    
    public function testWeatherModelLatLong(){
        $model = new WeatherModel();
        $model->setMethod("GET");
        $model->setLongitude(-50);
        $model->setLatitude(95);
        $result = $model->getWeatherForecast();
        $this->assertNotEqualTo();
    }
    public function testWeatherModelQuery(){
        $model = new WeatherModel();
        $model->setQuery("leicester");
        $model->setMethod("GET");
        $result = $model->getWeatherForecast();
        $file = fopen("weatherQuery.json");
        $this->assertEqual($result, fread(filesize($file)));
        fclose();
    }
}