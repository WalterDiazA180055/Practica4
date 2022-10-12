<?php
require_once "lib/lib/nusoap.php";
function getNombres($datos) {
    if($datos == "Nombres") {
        return join(",", array(
            "Walter AlejandrO Diaz Gonzalez",
            "<br>Mario Bersain Gomez Morales",
            "<br>Carlos Ariel Gutu Santiago",
            "<br>Daniel Alejandro Alegria Carrasco",
            "<br>David Eliseo Gonzalez Lopez"));
        }
        else{
            return "No existen esos nombres";
    }
}
$server = new soap_server();
$server->register("getNombres");
if( !isset($HTTP_RAW_POST_DATA))$HTTP_RAW_POST_DATA=file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>