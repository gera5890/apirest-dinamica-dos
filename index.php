<?php

ini_set('display_errors', '1'); //visualizar errores en postman o navegador
ini_set("log_errors", '1');    //para crear archivo a nivel global
ini_set("error_log","/opt/lampp/htdocs/apirest-dinamica/php_error_log");

include_once "controllers/routesController.php";

$index = new RoutesController();
$index->index();