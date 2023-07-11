<?php

    class Csd {

        public static function calcular ($entrada="11:00am May 18 2023",$salida="4:48pm May 18 2023") {

            $precio = 12;
            $disminuir = 30;

            #creamos las entradas y salidas

            $e = strtotime($entrada);

            echo "Created date is " . date("Y-m-d H:i:sa", $e).'<br><br>';

            $s = strtotime($salida);

            echo "Created date is " . date("Y-m-d H:i:sa", $s).'<br><br>';

            #obtenemos el total de horas

            $originalTime = new DateTimeImmutable($entrada);
            $targedTime = new DateTimeImmutable($salida);
            $interval = $originalTime->diff($targedTime);
            $time = $interval->format("%H:%I:%S");

            #restamos el tiempo de comida

            echo $time.'<br><br>';

            $time = explode(':',$time);

            $time[1] -= $disminuir;

            $time = implode(':',$time);

            echo $time.'<br><br>';

            $time = explode(':',$time);

            $time[1] /= 60;

            $time[0] += $time[1];

            echo $time[0].'<br><br>';

            echo $time[0] * $precio.'<br><br>';

            echo '<hr>';

        }

    }

?>