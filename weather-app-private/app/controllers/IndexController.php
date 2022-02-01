<?php

class IndexController extends Controller{
        public function get(){
            $view = new IndexView();
            echo $view->createView();
        }
        public function post(){
        }
}