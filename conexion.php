<?php
$servername = "127.0.0.1";
$username = "root";
$password = "1234";
$dbname = "login";
$port = "3306";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>