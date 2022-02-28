<?php
/**
 * @class - IndexController
 * invokes index route
 */
class IndexController extends Controller{
        public function get(){
            $view = new IndexView();
            echo $view->createView();
        }
        
}