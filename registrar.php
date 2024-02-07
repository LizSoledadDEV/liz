<?php
include 'conexion.php';

$persona = $_POST['persona'];
$placa = $_POST['placa'];
$ubicacion = $_POST['ubicacion'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO asignacion_activo ( persona, placa,ubicacion, fecha ) VALUES ('$persona', '$placa', '$ubicacion', $fecha)";

if ($conn->query($sql) === TRUE) {
    echo "Asignacion agregada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
