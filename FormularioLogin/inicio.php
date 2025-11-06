<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: login.php");
    exit();
}

$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$cargo = $_SESSION['cargo'];
$salario_base = $_SESSION['salario_base'];

if (strtolower($cargo) == "gerente") {
    $bono = $salario_base * 0.10;
    $detalle = "Bonificación fija del 10 % (Gerente)";
} else {
    // Generar comisión aleatoria entre 0 % y 10 %
    $comision_porcentaje = rand(0, 10);
    $bono = $salario_base * ($comision_porcentaje / 100);
    $detalle = "Comisión aleatoria del {$comision_porcentaje}% (Vendedor)";
}

$salario_anual = $salario_base + $bono;
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Panel del Empleado</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary mb-4">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Empresa XYZ</span>
    <form action="logout.php" method="POST">
      <button class="btn btn-outline-light btn-sm">Cerrar sesión</button>
    </form>
  </div>
</nav>

<div class="container">
  <div class="card shadow p-4 mx-auto" style="max-width: 550px;">
    <h3 class="text-center mb-4">Bienvenido, <?php echo "$nombre $apellido"; ?></h3>
    <table class="table table-bordered text-center">
      <tr><th>Cargo</th><td><?php echo ucfirst($cargo); ?></td></tr>
      <tr><th>Salario Base</th><td><?php echo number_format($salario_base, 2); ?> €</td></tr>
      <tr><th><?php echo ($cargo == 'Gerente') ? 'Bonificación' : 'Comisión'; ?></th><td><?php echo number_format($bono, 2); ?> €</td></tr>
      <tr class="table-success"><th>Salario Total</th><td><strong><?php echo number_format($salario_anual, 2); ?> €</strong></td></tr>
    </table>
    <p class="text-center text-muted"><?php echo $detalle; ?></p>
  </div>
</div>

</body>
</html>



