<?php

abstract class View{
    protected $args;
    protected $errors;
    public function __construct(){}
    public function setArgs($args){
        $this->args=$args;

    }
    public function setErrors($errors){
        $this->errors=$errors;

    }
    public function head(){
        $css_path = CSS_PATH;
        $head_output = <<< HEAD
            <head>
            <meta name="author" content="Mo Aziz">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="" content="">
            <link rel="stylesheet" href="$css_path" type="text/css">
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            </head>
        HEAD;
        return $head_output;        
    }
   
    public function header(){
        $header_output = <<< HEADER
            <header>
            <p>Weather App</p>
            <div class="header-links">
                <a href="./">Home</a>
                <a href="./about">About</a>
                <a href="./contact">Contact</a>
            </div>
            </header>
        HEADER;
        return $header_output;

    }

    //add as optional args to content?
    //add errors to appropriate sections in content instead of its own section?
    public function content(){
        $content_output = <<< CONTENT

        CONTENT;
        return $content_output;
    }

    public function footer(){
        $footer_output = <<< FOOTER
            <footer>
                <p>Copyright &copy; - Mo Aziz - 2022</p>
            </footer>
        FOOTER;
        return $footer_output;

    }

    public function scripts(){
        $script_output = <<< SCRIPT

        SCRIPT;
        return $script_output;
    }

    public function createView(){
        return $this->head() .  $this->header() . $this->content() . $this->footer() . $this->scripts();
    }
}