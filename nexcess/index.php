<?php


// Building URI Router for the API
require_once('uri_router.php');

$router = new uri_router();

// Setting Request URI
$request_uri = $_SERVER['REQUEST_URI'];


// Instantiating Router Class and passing it the URI value
$router->load($request_uri);



?>
