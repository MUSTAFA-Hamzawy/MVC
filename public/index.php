<?php
use MVC\core\UrlHandler;
require_once "../vendor/autoload.php";

// config
define("ROOT", dirname(__DIR__));
define("APP", ROOT . DIRECTORY_SEPARATOR . "app");
define("CONTROLLERS", APP . DIRECTORY_SEPARATOR . "controllers");
define("MODELS", APP . DIRECTORY_SEPARATOR . "models");
define("VIEWS", APP . DIRECTORY_SEPARATOR . "views");




$app = new UrlHandler();