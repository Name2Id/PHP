<?php

    class Calbdd {

        private string $nds;
        private string $ndu;
        private string $ps;
        private string $ndlbdd;

        public function __construct (
            $nombreDelServidor,
            $nombreDelUsuario,
            $palabraSecreta,
            $nombreDeLaBaseDeDatos
        ) {
            $this->nds = $nombreDelServidor;
            $this->ndu = $nombreDelUsuario;
            $this->ps = $palabraSecreta;
            $this->ndlbdd = $nombreDeLaBaseDeDatos;
        }

    }

?>