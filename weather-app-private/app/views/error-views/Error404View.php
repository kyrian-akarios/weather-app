<?php

class Error404View extends ErrorView{
    public function __construct(){}
    
    public function head(){
        $css_path = CSS_PATH;
        $head_output = <<< HEAD
            <head>
            <meta name="author" content="Mo Aziz">
            <meta name="" content="">
            <meta name="" content="">
            <link rel="stylesheet" href="$css_path" type="text/css">
            </head>
        HEAD;
        return $head_output;        
    }
   
    public function header(){
        $header_output = <<< HEADER
            <header></header>
        HEADER;
        return $header_output;

    }

    //add as optional args to content?
    //add errors to appropriate sections in content instead of its own section?
    public function content($errors = null, $args = null){
        $content_output = <<< CONTENT

        CONTENT;
        return $content_output;
    }

    public function footer(){
        $footer_output = <<< FOOTER

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