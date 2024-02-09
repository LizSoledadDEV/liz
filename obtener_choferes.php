<?php
include 'conexion.php'; // Archivo de conexión a la base de datos

$sql = "SELECT pkpersona, CONCAT(nombre, ' ', apellidos),  AS nombre_completo FROM persona";
$result = $conn->query($sql);

$choferes = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $choferes[] = $row['pkpersona', 'nombre_completo'];
    }
}

$conn->close();
?>
