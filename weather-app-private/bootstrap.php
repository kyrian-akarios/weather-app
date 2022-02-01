<?php
$css_file = "styles.css";

/**
* Defining constants
*/

define("APP_PATH", __DIR__ . "/app/");
define("CSS_PATH", "/weather-app-public/styles/" . $css_file);
define ("WEB_PATH", "/weather-app-public/");

/**
 * Autoload
 */
include "autoload.php";
spl_autoload_register("Autoloader::UtilityLoader");
spl_autoload_register("Autoloader::ModelLoader");
spl_autoload_register("Autoloader::ControllerLoader");
spl_autoload_register("Autoloader::ViewLoader");
spl_autoload_register("Autoloader::ErrorLoader");
spl_autoload_register("Autoloader::ValidatorLoader");


/**
 * logger
 */

/**
 * Use declarations
 */
require_once(APP_PATH . "/utilities/Router.php");
/**
* Var declarations
*/

$router = new Router();
include 'routes.php';
$router->run($_SERVER["REQUEST_URI"]);


