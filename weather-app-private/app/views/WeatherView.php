<?php
/**
 * @class - WeatherView
 * Shows the weather page
 */
class WeatherView extends View{
    public function parseDate($data){
        str_split("-");


    }

    public function content(){
        $error_output = "";
        $content_output = "";
        if($this->errors){
            $error_output .= "<div class='errors'>";
            foreach($this->errors as $error){
                $error_output .= "<i class='fa fa-exclamation'></i>";
                $error_output .= "<p>{$error}</p>";
            }
            $error_output .= "</div>";
        }
        $content_output .= <<< CONTENT_OUTPUT
        <div class="weather-page content">
        <div class="wrapper">
            {$error_output}
            <form action="./weather" "geolocation_manual" method="post">
            <div class="form-element" id="text-geolocation">
                <input type="text" placeholder="Enter a city, postcode, or town..."name="query">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
            </form>
        CONTENT_OUTPUT;
      
        if($this->args != null){
            $content_output .= <<< CONTENT_OUTPUT
            <div class='location heading'>
            {$this->args["location"]["region"]}, {$this->args["location"]["country"]}
            </div>
            <div class='weather-cards'>
            CONTENT_OUTPUT;
            foreach($this->args["forecast"]["forecastday"] as $day){
                switch($day["day"]["condition"]["text"]){
                    case "Heavy rain":
                        $day_output = "<i class='fa fa-cloud-showers-heavy'></i>";
                        $day_output .=  "<td>". $day["day"]["condition"]["text"]. "</td>";
                        break;
                    case "Patchy rain possible":
                        $day_output= "<i class='fa fa-cloud-showers-heavy'></i>";
                        $day_output .= "<td>" . $day["day"]["condition"]["text"] ."</td>";
                        break;
                    default:
                    $day_output= "<i class='fa fa-cloud'></i>";
                    $day_output .= "<td>" . $day["day"]["condition"]["text"] ."</td>";
                  
                    }
                $date = strtotime($day["date"]);
                $datetime = new DateTime();
                $datetime->setTimestamp($date);
                $content_output .= <<< CONTENT_OUTPUT
                    <table class='weather-table'>
                    <tr colspan=2>
                        <th colspan=2>{$datetime->format('D')}</th>
                    </tr>
                    <tr>
                        <td>
                            <i class='fa fa-clock'></i> 
                        </td>
                        <td>
                            <p>{$datetime->format('d/m/Y')}</p>                        
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <i class='fa fa-thermometer'></i>
                        </td>
                        <td>
                            <table class='weather-temperature'>
                                <tr class='heading-row'>
                                    <td>avg</td>
                                    <td>min</td>
                                    <td>max</td>
                                </tr>
                                <tr class='temperature-row'>
                                    <td>{$day["day"]["avgtemp_c"]} &#8451;</td>
                                    <td>{$day["day"]["mintemp_c"]} &#8451;</td>
                                    <td>{$day["day"]["maxtemp_c"]} &#8451;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class='table-condition'>
                        <td>{$day_output}</td>
                    </tr>
                    
                    <tr class='expand-hour'>
                        <td colspan=2><i class='fa fa-angle-down'></i></td>
                    </tr>
                    </table>
                CONTENT_OUTPUT;
                $hour_output .= "<div class='hour-output'>";
                foreach($day["hour"] as $hour){
                $time_symbol = $hour['is_day'] == 1 ? "<tr class='light'><td colspan=2><i class='fa fa-sun'></i></td></tr>" : "<tr class='dark'><td colspan=2><i class='fa fa-moon'></i></td></tr>";
                $time = substr($hour['time'],-5);
                $hour_output .= <<< CONTENT_OUTPUT
                    <table class='weather-hour'>
                        {$time_symbol}
                        <tr class='time'>
                            <td><i class='fa fa-clock'></i></td>
                            <td>{$time}</tr>
                        </tr>
                        <tr class='temperature'>
                            <td>
                                <i class='fa fa-thermometer-full'></i>
                            </td>
                            <td>
                                {$hour['temp_c']}&#8451;
                            </td>
                        </tr>
                        <tr class='wind'>
                            <td>
                                <i class='fa fa-wind'></i>
                            </td>
                            <td>
                                {$hour['wind_mph']} mph
                            </td>
                        </tr>
                        <tr class='wind_dir'>
                            <td>
                                <i class='fa fa-wind'></i><i class='fa fa-directions'></i>
                            </td>
                            <td>
                                {$hour['wind_dir']}
                            </td>
                        </tr>
                    </table>
                CONTENT_OUTPUT;
                }
            $hour_output .= "</div>";
            }
            $content_output .= <<< CONTENT_OUTPUT
            </div>
            CONTENT_OUTPUT;
            $content_output .= "<div class='hourly-outputs'>";
            $content_output .= $hour_output;
        }
        $content_output .= "</div></div></div>";

        return $content_output;
    }
    //won't work as createView() calls content with 0 args
    //no point in calling ->content() in controller
    //rather ->setArgs() or ->setErrors() may be better
    public function scripts(){
        $script_path = SCRIPT_PATH;
        return <<< SCRIPT
        <script src="./scripts/weather.js"></script> 
        SCRIPT;
    }
}