<?php

class ErrorHTTPMethodView extends ErrorView{
    public function __construct(){}
    public function createView(){
        return <<< ERROR
        <p>beep boop - you are doomed </p>
        ERROR;
    }
}