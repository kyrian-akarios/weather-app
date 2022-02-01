<?php
class ContactController extends Controller{
    public function get(){
        return new ContactView();
    }
}