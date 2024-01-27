<?php

function request_sepomex_api($criterio_busqueda)
{

    $endpoint_sepomex = "https://api.copomex.com/query/";
    $method_sepomex = 'info_cp/';
    $variable_string = '?type=simplified';
    $token = '&token=fb5c3aeb-28a3-4dbd-9a51-2a1a473588c5';

    $url = $endpoint_sepomex . $method_sepomex . $criterio_busqueda . $variable_string . $token;
    $response = file_get_contents($url);

    if ($response) {
        return $response;
    } else {
        return false;
    }
}

if (isset($_GET['codigo_postal'])) {

    $codigo = $_GET['codigo_postal'];
}

$response = request_sepomex_api('09810');

if ($response) {
    $response = json_decode($response);
} else {

    echo 'Ha ocurrido un error';
}
