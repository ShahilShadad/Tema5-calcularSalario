<?php
include('conexion.php');

$sql = "SELECT nombre, apellido, cargo, salario_base, comision FROM empleados";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Salarios</title>
</head>
<body>
<h2>Listado de Empleados y Salarios Anuales</h2>

<table border="1" cellpadding="8">
<tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cargo</th>
    <th>Salario Base (€)</th>
    <th>Bonificación/Comisión</th>
    <th>Salario Anual (€)</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $cargo = $row['cargo'];
    $base = $row['salario_base'];
    $comision = $row['comision'];

    if ($cargo == "Gerente") {
        $bono = $base * 0.10;
    } else {
        $bono = $base * ($comision / 100);
    }

    $salario_anual = $base + $bono;

    echo "<tr>
            <td>$nombre</td>
            <td>$apellido</td>
            <td>$cargo</td>
            <td>".number_format($base, 2)."€</td>
            <td>".number_format($bono, 2)."€</td>
            <td><strong>".number_format($salario_anual, 2)."€</strong></td>
          </tr>";
}
$conn->close();
?>
</table>
</body>
</html>
