<?php
class AboutController extends Controller {
    public function get(){
        return new AboutView();
    }
}