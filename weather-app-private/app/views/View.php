<?php
/**
 * @class - View
 * generates the View template
 */
abstract class View{
    protected $args;
    protected $errors;
    public function __construct(){}
    public function setArgs($args){
        $this->args=$args;

    }
     /**
     * @method content
     * @param - errors
     * @return none
     * @desc - Sets the errors for the page
     */
    public function setErrors($errors){
        $this->errors=$errors;

    }
     /**
     * @method head
     * @return HTML
     * @desc - Contains the head of the page (metadata)
     */
    public function head(){
        $css_path = CSS_PATH;
        $head_output = <<< HEAD
            <head>
            <meta name="author" content="Mo Aziz">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="$css_path" type="text/css">
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            </head>
        HEAD;
        return $head_output;        
    }
    /**
     * @method header
     * @return HTML
     * @desc - Contains the navbar/header of the page
     */
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
    /**
     * @method content
     * @return HTML
     * @desc - Contains the content of the page
     */
    public function content(){
        $content_output = <<< CONTENT

        CONTENT;
        return $content_output;
    }
    /**
     * @method footer
     * @return HTML
     * @desc - Contains the footer of the page
     */
    public function footer(){
        $footer_output = <<< FOOTER
            <footer>
                <p>Copyright &copy; - Mo Aziz - 2022</p>
            </footer>
        FOOTER;
        return $footer_output;

    }
     /**
     * @method scripts
     * @return HTML
     * @desc - Contains the scripts of the page
     */
    public function scripts(){
        $script_output = <<< SCRIPT

        SCRIPT;
        return $script_output;
    }
    /**
     * @method createView
     * @return View 
     * @desc - Returns the entire view, built up of previous sections.
     */
    public function createView(){
        return $this->head() .  $this->header() . $this->content() . $this->footer() . $this->scripts();
    }
}
