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
        //Esto lo hace Shahil
        function calcularSalarioAnual(){
        }
        function devolverNombreCompleto(){
        }
    }
    class Gerente extends Empleado{
        public $bonoGerente = 10;
        public function __construct($nombre,$apellidos,$salarioBase)
        {
        parent::__construct($nombre,$apellidos,$salarioBase);

        }
    }
    class Vendedor extends Empleado{
        public $bonoEmpleado;
        public function __construct($nombre,$apellidos,$salarioBase)
        {
        parent::__construct($nombre,$apellidos,$salarioBase);
        $this->bonoEmpleado = rand(0,10);
        }
    }
?>