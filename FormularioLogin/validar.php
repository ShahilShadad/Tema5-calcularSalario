<?php
session_start();
include('conexion.php');

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$sql = "SELECT * FROM empleados WHERE usuario='$usuario' AND contraseña='$contraseña'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['apellido'] = $row['apellido'];
    $_SESSION['cargo'] = $row['cargo'];
    $_SESSION['salario_base'] = $row['salario_base'];
    header("Location: inicio.php");
} else {
    echo "<script>alert('Usuario o contraseña incorrectos'); window.location='login.php';</script>";
}
$conn->close();
?>
