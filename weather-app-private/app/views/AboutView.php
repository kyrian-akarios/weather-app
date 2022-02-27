<?php
include APP_PATH . "/views/View.php";
class AboutView extends View{

    public function content($errors = null, $args = null){
        if($errors){
            $error_output = <<< ERRORS


            ERRORS;
        }
        else{
            $error_output = "";
        }
        return <<< CONTENT
        <div class="about-page content">
            <div class="wrapper">
            <p class="heading">About</p>
            <div class="page-content">
                <p>This is a weather app built by <link>Mo Aziz </link> designed to call a weather API to show the current weather based on a chosen location.
                Location can either be entered via manual input, or via getting the location via the Geolocation API (permission will need to be given). This app is to showcase knowledge
                and the ability to use APIs for projects.

                The source can be found at: https://github.com/MoAziz123/weather-app
            </div>
            </div>
        </div>
        CONTENT;
    }

  
}