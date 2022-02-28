<?php
/**Bootstrap File
 * 
 * Contains consant declartions, autoloads, and other general settings
 */
require 'settings.php';
$css_file = "styles.css";

/**
* Defining constants
*/
define("APP_PATH", __DIR__ . "/app/");
define("PUBLIC_PATH", dirname($_SERVER["SCRIPT_NAME"]));
define("CSS_PATH", PUBLIC_PATH  . "/css/" . $css_file);
define("SCRIPT_PATH", PUBLIC_PATH . "/scripts/" );
define ("WEB_PATH", "/weather-app-public/");
define("LOG_PATH", APP_PATH . "/logs/");

/**
 * Autoload
 */
include "autoload.php";
spl_autoload_register("Autoloader::UtilityLoader");
spl_autoload_register("Autoloader::ModelLoader");
spl_autoload_register("Autoloader::ControllerLoader");
spl_autoload_register("Autoloader::ViewLoader");
spl_autoload_register("Autoloader::ValidatorLoader");

/**
 * Include/require declarations
 */
require_once(APP_PATH . "/utilities/Router.php");

/**
* Var declarations
*/
$router = new Router();
include 'routes.php';
$router->run($_SERVER["REQUEST_URI"]);


