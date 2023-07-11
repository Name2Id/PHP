<?php

    class Pcalbdd {

        public static function estatus () {
            $Calbdd = new Calbdd (

                "localhost",
                "rami",
                "Rami.gglez1",
                "php"

            );
            try {
                $Calbdd->cxn();
?>     

                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>CXN</title>
                </head>
                <body>
                    <h1>
                        Conexion A la 
                        Base De Datos Exitosa.
                    </h1>
                </body>
                </html>

<?php
            } catch (Exception $e) {
?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>CXN</title>
                </head>
                <body>
                    <h1>
                        Error De Conexion A la 
                        Base De Datos.
                    </h1>
                </body>
                </html>
<?php
            }
        }

    }

?>