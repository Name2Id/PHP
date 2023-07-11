<?php

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class Vdc {

        public static function nombre () {
            $nombre = test_input($_POST["nombre"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$nombre)) {
                $Error = "El formato del nombre es invalido.";
                return $Error;
            } else {
                return $nombre;
            }
        } 

        public static function correo () {
            $correo = test_input($_POST["correo"]);
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $Error = "El formato del correo es invalido.";
                return $Error;
            } else {
                return $correo;
            }
        }

        public static function enlace () {
            $enlace = test_input($_POST["enlace"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$enlace)) {
                $Error = "Enlace invalido.";
                return $Error;
            } else {
                return $enlace;
            }
        }

        public static function esValido ($valor) {
            if (strpos( $valor, 'invalido' ) === true) {
                return 0;
            } else {
                return 1;
            }
        }

        public static function imprimeOretorna ($error,$valor) {
            if ($error === 0) {
                echo $valor;
            } else if ($error === 1) {
                return $valor;
            }
        }

    }

?>