<?php
    //Ruben hace que salga el nombre del usuario con un saludo

    //Funcionalidad del botón, al hacer click añade salarioBase y nombre
    require_once "Empleado.php";
    
    $resultados = [];

    if (isset($_POST['calcular'])) {
        for ($i = 1; $i <= 4; $i++) {
            $nombre = $_POST["nombre$i"];
            $salarioBase = $_POST["salario$i"];

            $empleado = new Empleado($nombre, "", $salarioBase);
            $salarioAnual = $empleado->calcularSalarioAnual();

            $resultados[] = "$nombre tiene un salario anual de " . number_format($salarioAnual, 2) . " €";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Salarios</title>
</head>
<body>
    <!--Saludo con nombre del Usuario (Ruben)--> 
    <!--Formulario con inputs y boton calcular salario-->
</body>
</html>