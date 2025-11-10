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
        //Función base calcularSalarioAnual (sin bonificaciones)
        function calcularSalarioAnual(){
            return $this->salarioBase * 12;
        }
        //Función que devuelve el nombre del empleado (gerente o vendedor)
        function devolverNombreCompleto(){
            return $this->nombre."".$this->apellidos;
        }
    }
    class Gerente extends Empleado{
        public $bonoGerente = 10;
        public function __construct($nombre,$apellidos,$salarioBase)
        {
        parent::__construct($nombre,$apellidos,$salarioBase);
        }
        //Función calcular salarioAnual Gerente
        function calcularSalarioAnual(){
            $salarioBono = $this->salarioBase * (1+$this->$bonoGerente/100)
            return $salarioBase * 12;
        }
    }
    class Vendedor extends Empleado{
        public $bonoEmpleado;
        public function __construct($nombre,$apellidos,$salarioBase)
        {
        parent::__construct($nombre,$apellidos,$salarioBase);
        $this->bonoEmpleado = rand(0,10);
        }
        //Función calcular salarioAnual Empleado
        function calcularSalarioAnual(){
        $salarioEmpleado = $this->salarioBase * (1+$this->bonoEmpleado/100);
        return $salarioEmpleado * 12;
        }
    }
?>