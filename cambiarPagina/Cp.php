<?php

    class Cp {

        public static function cambia () {
            if (isset($_GET['is']) && $_GET['is'] === 'inse') {
                require_once '../iniciarsesion/is.html';
            } else if (isset($_GET['aunu']) && $_GET['aunu'] === 'agunus') {
                require_once '../agregarUnNuevoUsuario/aunu.html';
            } else {
                require_once '../404/404.html';
            }
        }

    }

?>