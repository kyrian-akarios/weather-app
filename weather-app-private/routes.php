<?php
require_once(APP_PATH."/controllers/Controller.php");

$router->addRoute("/", new IndexController());
$router->addRoute("/about", new AboutController());
$router->addRoute("/contact", new ContactController());
$router->addRoute("/weather", new WeatherController());