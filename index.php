<?php

// SE PRUEBA AL API MANDANDO A LLAMAR LOS METODOS
include_once 'apiTramites.php';

$api = new ApiTramites();

$api->getAllTramites();
$api->getAllDocumentos();
$api->getAllTiposDocumentos();

?>