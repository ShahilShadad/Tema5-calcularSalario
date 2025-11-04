<?php
// Parámetros de conexión
$host = "localhost";
$user = "root";
$pass = "Proyecto010223";
$dbname = "bd_usuarios";

// Crear conexión
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verificar conexión
if (!$conn) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Recoger datos del formulario
$username = $_POST['user'];
$password = $_POST['pass'];

// Consulta SQL segura con sentencias preparadas
$sql = "SELECT * FROM usuarios WHERE username = ? AND password = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

// Comprobar si hay coincidencia
if (mysqli_num_rows($resultado) == 1) {
    echo "<div style='text-align:center; margin-top:30px; color:green;'>
            Usuario registrado correctamente.
          </div>";
} else {
    echo "<div style='text-align:center; margin-top:30px; color:red;'>
            Usuario o contraseña incorrectos.<br>
            <a href='Formulario.php'>Volver al Formulario</a>
          </div>";
}

// Cerrar conexión
mysqli_close($conn);
?>
