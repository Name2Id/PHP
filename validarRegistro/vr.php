<?php

require_once '../validacionDeCampos/Vdc.php';

//RECOPILACION DE DATOS DESDE EL FORMULARIO DE REGISTRO UTILIZANDO LA VARIABLE SUPER GLOBAL $_POST

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = Vdc::nombre();
    $correo = Vdc::correo();
    $enlace = Vdc::enlace();

    $n = Vdc::imprimeOretorna(
        Vdc::esValido($nombre),
        $nombre
    );

    $c = Vdc::imprimeOretorna(
        Vdc::esValido($correo),
        $correo
    );

    $e = Vdc::imprimeOretorna(
        Vdc::esValido($enlace),
        $enlace
    );

    $secreto = hash('sha256',$_POST['secreto']);

    #echo $n.' - '.$c.' - '.$e.' - '.$secreto;

}