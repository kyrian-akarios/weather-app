<?php
include APP_PATH . "/views/View.php";
class ContactView extends View{

    public function content($errors = null, $args = null){
        $error_output = "";
        $args_output = "";
        if($this->errors){
            $error_output .= "<div class='errors'>";
            foreach($this->errors as $error){
                $error_output .= "<i class='fa fa-exclamation'></i>";
                $error_output .= "<p>{$error}</p>";
            }
            $error_output .= "</div>";
        }
        if($this->args){
            $args_output .= "<div class='info'>";
            foreach($this->args as $arg){
                $args_output .= "<i class='fa fa-info'></i>";
                $args_output .= "<p>{$arg}</p>";
       
            }
            $args_output .= "</div>";
        }
        return <<< CONTENT
        <div class="contact-page content">
            <div class="wrapper">
                    <p class="heading">Contact</p>
                <div class="page-content">
                {$error_output}
                {$args_output}
                <div class="contact-form">
                <form action="./contact" method="post">
                <div class="form-element">
                    <label>
                        Name:
                        <br>
                        <input type="text" name="name">
                    </label>
                <br>
                </div>
                <div class="form-element">
                    <label>
                        Email:
                        <br>
                        <input type="email" name="email">
                    </label>
                </div>
                <br>
                <div class="form-element">
                    <label>
                        Message:
                        <br>
                        <textarea name="message" multiple></textarea>
                    </label>
                </div>

             
                <br>
                <div class="form-element">
                <button type="submit">Submit</button>                
                </div>
                </div>
            </form>
                </div>
             
                </div>
            </div>
        </div>
        CONTENT;
    }

  
}