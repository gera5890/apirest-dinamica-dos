<?php

$routesArray = explode("/",$_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);


if(count($routesArray) == 0){

    $json = array(
        'status' => 404,
        'result' => 'Not found'
    );

    echo json_encode($json, http_response_code($json['status']));

    return;

}

if(count($routesArray) == 1 and isset($_SERVER['REQUEST_METHOD'])){
    

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $json = array(
            'status' => 200,
            'result' => 'Metodo GET'
        );

        echo json_encode($json, http_response_code($json['status']));

    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $json = array(
            'status' => 200,
            'result' => 'Metodo POST'
        );

        echo json_encode($json, http_response_code($json['status']));
    }

}