<?php
include APP_PATH . "/views/View.php";
class ContactView extends View{

    public function content($errors = null, $args = null){
        if($errors){
            $error_output = <<< ERRORS


            ERRORS;
        }
        else{
            $error_output = "";
        }
        return <<< CONTENT
        <div class="contact-page content">
        <div class="page-heading">
        <p class="heading">Contact</p>
        </div>
        <div class="page-content">

        </div>
        </div>
        CONTENT;
    }

  
}