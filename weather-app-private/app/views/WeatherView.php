<?php

class WeatherView extends View{
   
  
    public function content($errors = null, $args = null){
        if($errors){
            $error_output = <<< ERRORS


            ERRORS;
        }
        else{
            $error_output = "";
        }
      
        if($args){
            foreach($args["forecast"]["forecastday"] as $day){
                echo $day["date"];
                echo "<br>";
                echo $day["day"]["avgtemp_c"];
                echo "<br>";
                echo $day["day"]["mintemp_c"];
                echo "<br>";
                echo $day["day"]["maxtemp_c"];
                echo "<br>";
                echo $day["day"]["condition"]["text"];
                echo "<br>";
                echo "<br>";
            }
        }
        return <<< CONTENT
        <div class="weather-page">
            <div class="
        </div>
        
        CONTENT;
    }



}