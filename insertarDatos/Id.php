<?php

    class Id {

        public function __construct (array $data) {

            $campos = null;
            $valores = null;

            #aqui falla cuando el usuario ingresa un dato en un formato erroneo
            /**
             * implementar una validacion para que el programa 
             * para la ejecucion y le indique al usuario 
             * que los datos son incorrectos
             * tambien devolver al usuario 
             * al formulario de registro
             * FEATURE pendiente !
             */
            

            for ($i=0; $i < count($data['campos']); $i++) {

                if ($i < count($data['campos']) -1) {

                    $campos .= $data['campos'][$i].",";

                } else {

                    $campos .= $data['campos'][$i];

                }

            }

            for ($i=0; $i < count($data['valores']); $i++) {

                if ($i < count($data['valores']) -1) {

                    $valores .= "'".$data['valores'][$i]."',";

                } else {

                    $valores .= "'".$data['valores'][$i]."'";

                }

            }

            $tabla = $data['tabla'];

            $sql = "INSERT INTO $tabla($campos)VALUES($valores)";

            require_once '../conexionAlaBaseDeDatos/Calbdd.php';

            $Calbdd = new Calbdd (

                "localhost",
                "rami",
                "Rami.gglez1",
                "php"

            );

            $conexionAlaBaseDeDatos = $Calbdd->cxn();

            if ($conexionAlaBaseDeDatos->query($sql) === TRUE) {
                echo "<script>alert('New record created successfully')</script>";
            } else {
                echo "<script>alert('Error: " . $sql . "<br>" . $conexionAlaBaseDeDatos->error."')</script>";
            }
            
            $conexionAlaBaseDeDatos->close();

        }

    }

?>