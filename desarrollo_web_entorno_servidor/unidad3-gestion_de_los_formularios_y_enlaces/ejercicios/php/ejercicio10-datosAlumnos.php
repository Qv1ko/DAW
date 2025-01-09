<?php

    class DatosAlumnos {

        private $ciclo;
        private $curso;
        private $otros = [];

        public function __construct(string $ciclo, string $curso, array $otros) {
            $this->ciclo = $ciclo;
            $this->curso = $curso;
            $this->otros = $otros;
        }

        public function visualizar(): string {
            return "<p>Nuevo alumno de $this->curso de " . strtoupper($this->ciclo) . (empty($this->otros)? "" : ":<br>- " . implode("<br>- ", $this->otros)) . "</p>";
        }

    }

?>