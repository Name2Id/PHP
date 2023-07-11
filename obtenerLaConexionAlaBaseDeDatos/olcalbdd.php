<?php

    function conexion () {

        require_once '../conexionAlaBaseDeDatos/Calbdd.php';
        $Calbdd = new Calbdd (

            "localhost",
            "rami",
            "Rami.gglez1",
            "php"

        );
        return $Calbdd->cxn();

    }

?>