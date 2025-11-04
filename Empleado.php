<?php
    class Empleado {
        public $nombre;
        public $apellidos;
        public $salarioBase;

        public function __construct($nombre, $apellidos, $salarioBase){
            
            $this->nombre = $nombre;
            $this->apellidos= $apellidos;
            $this->salarioBase = $salarioBase;
        }
    }
?>