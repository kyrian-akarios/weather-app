<?php
/**
 * @class - AboutController
 * About controller for instantiating AboutView
 */
class AboutController extends Controller {
    public function get(){
        $view = new AboutView();
        Logger::log(LogType::INFORMATION, "About page accessed");

        echo $view->createView();
    }
}