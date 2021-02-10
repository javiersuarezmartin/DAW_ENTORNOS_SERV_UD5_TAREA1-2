<?php
    class Alumno {
        private $nombre;
        private $edad;
        private $curso;

        // Constructor

        public function __construct() {
            $this->nombre = '';
            $this->edad = 0;
            $this->curso = 0;
        }

        // Métodos Get

        public function getNombre() {
            return $this->nombre;
        }

        public function getEdad() {
            return $this->edad;
        }
        
        public function getCurso() {
            return $this->curso;
        }

        
        // Métodos Set

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setEdad($edad) {
            $this->edad = $edad;
        }
        
        public function setCurso($curso) {
            $this->curso = $curso;
        }

        // Otros métodos

        public function cambiarNombre($nombre) {
            if ($nombre != '') {
                $this->setNombre($nombre);
            };            
        }
        
        public function mostrarNombre() {
            if ($this->nombre != '') {
                echo ('<h1>' . $this->getNombre() . '</h1>');
            } else {
                echo ('El nombre no ha sido asignado');
            };            
        }  

    };
?>