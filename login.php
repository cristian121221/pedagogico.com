<?php
// Incluir el archivo de conexión
require_once 'conexion.php';

// Obtener los datos del formulario
$dni= $_POST['dni'];
$password = $_POST['password'];

// Consultar la base de datos para verificar las credenciales
$sql = "SELECT * FROM usuario WHERE dni = '$dni' AND contrasena = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['dni'] = $dni;
    header("Location: encuesta.html");
    exit();
} else {
    // Credenciales incorrectas
    echo "DNI o contraseña incorrectos";
}

$conn->close();
?>
