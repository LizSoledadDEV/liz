<?php
$servername = "localhost"; // servidor de MySQL 
$username = "tu_usuario"; // nombre de usuario de MySQL
$password = "tu_contraseña"; // tu contraseña de MySQL
$dbname = "asignacion"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa"; //  mensaje se mostrará si la conexión es exitosa
}
?>

