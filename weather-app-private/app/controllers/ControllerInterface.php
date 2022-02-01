<?php

interface ControllerInterface{
    public function get($args = null);
    public function post($args = null);
    public function execute();
}