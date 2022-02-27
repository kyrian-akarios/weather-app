<?php

class WeatherValidator{
    public static function validateQuery($location){
        if($location != null){
            return true;
        }
        return false;
    }

    public static function validateLongitude($long){
        if($long > -180 && $long < 180){
            return true;
        }
        return false;
    }

    public static function validateLatitude($lat){
        if($lat > -90 && $lat < 90){
            return true;
        }
        return false;
    }
}